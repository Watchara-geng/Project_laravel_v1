<template >
<div >
    <div class="container">
        
    </div>
</div>



</template>

<script>
export default {
    //name:'edit',
    props:['id']
    ,
    data(){
        return{
            paper_name:'',
            paper_url:'',
            paper_citation:'',
            paper_page:''
        }
    },
    mounted(){

        axios.get('/api/papers/'+this.id).then(Response=>{
            console.log(Response.data);
        })
        //console.log(this.id);
    }

}
</script>

<style>

</style>
