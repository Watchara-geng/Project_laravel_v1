<template >
<div >

    <div class="container">
        <div v-if="loading" class="loader">
            <div class="d-flex justify-content-center mt-5">
                <div class="spinner-border text-info" role="status"></div>
                <p> Loading...</p>
            </div>
        </div>
        <div v-else>
            <h2>งานวิจัย</h2>
            <h6>{{fname}}</h6>
            <h6>{{lname}}</h6>
            <img :src="'../'+picture">
            <h6>{{academic_pos}}</h6>
            <h6>{{email}}</h6>
            <h6>Citation count {{citation_count}}</h6>
            <h6>Document count {{document_count}}</h6>
            <h6>Cited By count {{cited_by_count}}</h6>
            <h6>H-index {{hindex}}</h6>

            <h6>author_name {{t_author_name}}</h6>
    
<table class="table">
  <thead>
      <tr>
      <th scope="col">Paper Name</th>
      <th scope="col">Year</th>
      <th scope="col">Journals/Transactions</th>
      <th scope="col">Doi</th>
      <th scope="col">Ciations</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>

    <tr v-for="(paper, idx) in papers" :key="idx">
        <td>{{paper.paper_name}}</td>
        <td>{{new Date(paper.paper_yearpub).getFullYear()}}</td>
        <td>{{paper.paper_sourcetitle}}</td>
        <td>{{paper.paper_doi}}</td>
        <td>{{paper.paper_citation}}</td>
        <td >
            <span v-for="(p, i) in paper.author" :key="i">  
                <a v-if="`${filterA(p.author_name,teachers)}` == 0">{{p.author_name}}</a>
                <a v-else v-bind:href="`/researcher/${filterA(p.author_name,teachers)}`">{{p.author_name}}</a>   
            </span>
        </td>
    </tr>
  </tbody>
</table>
</div>
</div>

  </div>
</template>

<script>
export default {
    //name:'edit',
    props:['id'],
    data(){
        return{
            teachers:[],
            loading: false,
            fname:'',
            lname:'',
            academic_pos:'',
            email:'',
            picture:'',
            t_author_name:'',
            hindex:'',
            citation_count:'',
            cited_by_count:'',
            document_count:'',
            papers:[]
        }

    },
    async mounted(){
        this.getTeacherData();
        this.getDetail();
        //console.log(this.teachers);

    },
    methods:{
        /*addNewPaperTeacher(){
            axios.post('/api/teachers',{
                fname:this.fname,
                lname:this.lname,
                academic_pos:this.academic_pos,
                email:this.email,
            });
        },*/
        async getTeacherData(){
            let result = await axios.get('/api/teachers/');
            var teachers=result.data.data;
            this.teachers = teachers;

        },
        async getDetail(){
            this.loading = true
            let resultA = await axios.get('/api/teachers/'+this.id);
            var teacher=resultA.data.data;
            let resultB = await axios.get('https://api.elsevier.com/content/search/author?query=authlast('+teacher.lname+')%20and%20authfirst('+teacher.fname+')%20&apiKey=7f59af901d2d86f78a1fd60c1bf9426a');
            var aid=resultB.data;
            aid=aid["search-results"]["entry"][0]['dc:identifier'];
            aid=aid.split(":");
            aid=aid[1];
            let resultC = await axios.get('https://api.elsevier.com/content/author?author_id='+aid+'&view=metrics&apiKey=6ab3c2a01c29f0e36b00c8fa1d013f83&httpAccept=application%2Fjson');
            var data=resultC.data;
            data=data['author-retrieval-response'][0];
            this.hindex=data['h-index'];
            data=data['coredata'];
            this.fname=teacher.fname;
            this.lname=teacher.lname;
            this.academic_pos=teacher.academic_pos;
            this.email=teacher.email;
            this.t_author_name=teacher.author_name;
            this.picture=teacher.picture;
            this.papers=teacher.paper;
            this.citation_count=data['citation-count'];
            this.cited_by_count=data['citation-count'];
            this.document_count=data['document-count']
            this.loading = false
        },
        filterA(value,teachers) { //Arch-int N.
           function search(nameKey, myArray){
                for (var i=0; i < myArray.length; i++) {
                    if (myArray[i].author_name === nameKey) {
                        return myArray[i].id;        
                    }
                }
                return 0;
            }
            var array = [
                { name:"Arch-Int N.", id:1 },
                { name:"So-In C.", id:2},
                
            ];

            var resultObject = search(value, teachers);
            value=resultObject;
            console.log(teachers);
            return value
            
            
        },
    }

}

</script>

<style>

</style>
