<template>

  <div>
      <div class="container card-2">
        <p> Researchers </p>
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2 p-4" v-for="(teacher, idx) in teachers" :key="idx">
                <div class="card p-0">
                <div class="card-image"> <img :src="teacher.picture" alt=""> </div>
                <div class="card-content d-flex flex-column align-items-center">
                    <h5>{{teacher.fname}} {{teacher.lname}}</h5>

                </div>
            </div>
                
            </div>
        </div>
      </div>
</div>


</template>

<script>
export default {
    mounted(){
        this.getTeacherData();
    },
    methods:{
        getTeacherData(){
            axios.get('/api/teachers').then(response=>{
                this.teachers=response.data.data;
                //console.log(this.teachers)
            });
        }
    },
    data(){
        return{
            teachers:[],
            teacher:{
                id:0,
                fname:'',
                lname:'',
                academic_pos:'',

            }
        }
    }
}
</script>

<style>

</style>
<!-- <div class="card card-block ">
                    <a :href="'/researchers/'+teacher.id">
                    <img :src="teacher.picture" alt="" width="140" height="175">
                    <h5 class="card-title mt-3 mb-3 text-center">{{teacher.fname}} </h5>
                    </a>
                </div>
        <div class="card">
                <a :href="'/researcher/'+teacher.id"><img :src="teacher.picture" class="rounded mx-auto d-block">
                <div class="card-body">
                    <h5 class="card-title"><b>{{teacher.fname}} {{teacher.lname}}</b></h5>
                </div>
                </a>
                </div> -->
                