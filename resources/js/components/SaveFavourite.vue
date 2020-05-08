<template>
  <div>
    <button class="btn btn-sm show-new-save-favourite-btn" @click="saveFavourite">
        <i class="far fa-heart text-danger"></i>
    </button>
  </div>
</template>

<script>
import axios from 'axios';
export default {
    props:['propertyId'],
    methods:{
        saveFavourite(){
            console.log(this.propertyId)
            axios.post('/save-favourite/', this.propertyId )
                .then(res=>console.log(res))
                .catch(error=>console.log(error))
        }
    }
}
</script>

