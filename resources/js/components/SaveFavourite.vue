<template>
  <div class="save-favourite-container">
    <button class="btn btn-sm show-new-save-favourite-btn" @click="setCookie">
        <i :class="isSave" class="fa-heart text-danger"></i>
    </button>
  </div>
</template>

<script>
import axios from 'axios';
export default {
    props:['propertyId'],
    data:function(){
      return{
        isSave:'far'
      }
    },
    methods:{
        checkCookie(){
        axios.get('/cookie-check/'+ this.propertyId )
          .then(res=>{
            const saved=res.data
            if (saved){
              this.isSave='fas'
            } else {
              this.isSave='far'
            }
          })
          .catch(error=>{
            console.log(error)
            this.isSave='far'
          })

        },
        setCookie(){
            console.log(this.propertyId)
            axios.get('/cookie-set/'+ this.propertyId )
                .then(res=>{
                  this.checkCookie()
                })
                .catch(error=>console.log(error))
        }
    },
    
}
</script>

