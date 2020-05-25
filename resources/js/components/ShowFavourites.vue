<template>
    <div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
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
    },
    
}
</script>

