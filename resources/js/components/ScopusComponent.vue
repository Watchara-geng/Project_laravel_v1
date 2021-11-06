<template >
<div >
    <div class="container">
        <h2>ระบบบันทึกข้อมูล</h2>

        <!--<div class="form-group">
            <label >ชื่อเรื่อง:</label>
            <input type="text" class="form-control" v-model="paper_name">
        </div>
        <div class="form-group">
            <label >Type:</label>
            <input type="text" class="form-control" v-model="paper_type">
        </div>-->
        <div class="form-group">
            <button class="btn btn-danger" v-on:click="addNewPaperTeacher"> Add</button>

        </div>
        <div class="form-group">
            <button class="btn btn-danger" v-on:click="callscopus"> call</button>

        </div>
        <div v-for="(paper, idx) in papers" :key="idx">
                    <h1>{{paper['dc:title']}}</h1>
        </div>
    </div>

</div>


</template>

<script>
export default {
    mounted(){
            axios.get('https://api.elsevier.com/content/search/scopus?query=orcid(0000-0001-7579-2485)&apikey=8c233a51930aa900046a5311f814ca29').then(response=>{
                this.papers=response.data['search-results']['entry'];
                console.log(this.papers)
            });
    },
    data(){
        return{
            papers:[],
            paper:{
                paper_name:'',
            }

        }
    },
    methods:{

        addNewPaperTeacher(){
            axios.get('https://api.elsevier.com/content/search/scopus?query=orcid(0000-0001-7579-2485)&apikey=8c233a51930aa900046a5311f814ca29').then(response=>{
                this.papers=response.data['search-results']['entry'];
                console.log(this.papers)
                for (var i = 0; i < this.papers.length; i++) {
            /*axios.post('/api/papers',{
                user_id:2,
                paper_name:paper['dc:title'],
            });*/
            console.log(papers)
            }
            });


        },

        callscopus(){

            axios.get('https://api.elsevier.com/content/search/scopus?query=orcid(0000-0001-7579-2485)&apikey=8c233a51930aa900046a5311f814ca29').then(response=>{
                this.papers=response.data['search-results'];
                console.log(this.papers)
            });
        }
    }
}
</script>

<style>

</style>
