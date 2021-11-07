<template >
<div >
    <div class="container">
        <h2>งานวิจัย</h2>
        <h6>{{fname}}</h6>
        <h6>{{lname}}</h6>
        <img :src="'../'+picture">
        <h6>{{academic_pos}}</h6>
        <h6>{{email}}</h6>

<table class="table">
  <thead>
      <tr>

      <th scope="col">Paper Name</th>
      <th scope="col">paper_sourcetitle</th>
      <th scope="col">paper_doi</th>
      <th scope="col">paper_volume</th>
        <th scope="col">paper_page</th>
    </tr>
  </thead>
  <tbody>

    <tr v-for="(paper, idx) in papers" :key="idx">
    <td>{{paper.paper_name}}</td>
    <td>{{paper.paper_sourcetitle}}</td>
    <td>{{paper.paper_doi}}</td>
    <td>{{paper.paper_volume}}</td>
    <td>{{paper.paper_page}}</td>

    </tr>
  </tbody>
</table>
</div>


  </div>




</template>

<script>
export default {
    //name:'edit',
    props:['id'],
    data(){
        return{
            fname:'',
            lname:'',
            academic_pos:'',
            email:'',
            picture:'',
            papers:[]
        }
    },
    mounted(){

        axios.get('/api/teachers/'+this.id).then(Response=>{
            var teacher=Response.data.data;
            this.fname=teacher.fname;
            this.lname=teacher.lname;
            this.academic_pos=teacher.academic_pos;
            this.email=teacher.email;
            this.picture=teacher.picture;
            this.papers=teacher.paper;
        });

    },
    methods:{
        addNewPaperTeacher(){
            axios.post('/api/teachers',{
                fname:this.fname,
                lname:this.lname,
                academic_pos:this.academic_pos,
                email:this.email,

            });
        },


    }

}

</script>

<style>

</style>
