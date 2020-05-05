<template>
  <div>
    <button class="btn btn-sm show-new-save-favourite-btn" @click="saveFavourite">
        <i class="far fa-heart text-danger"></i>
    </button>
  </div>
</template>

<script>
export default {
    props:['propertyId'],
    mounted(){
        console.log(this.propertyId)
    },
    methods:{
        saveFavourite(){
            this.$http.post('/save-favourite/', this.propertyId )
                .then(response=>{
                    console.log(response);
                }, error=>{
                    console.log(error);
                });
        }
    }
}
</script>

