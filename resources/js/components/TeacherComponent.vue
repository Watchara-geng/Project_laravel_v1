<template>

      <div class="container card-2">
        <p> Researchers </p>
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2 p-4" v-for="(teacher, idx) in teachers" :key="idx">
                <a :href="'/researcher/'+teacher.id">
                <div class="card p-0">
                <div class="card-image"> <img :src="teacher.picture" alt=""> </div>
                <div class="card-content d-flex flex-column align-items-center">
                    <h5>{{teacher.fname}} {{teacher.lname}}</h5>
                </div>
            </div></a>

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
