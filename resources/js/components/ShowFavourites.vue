<template>
<div>
    <div v-for="(property, index) in properties" v-bind:key="index" class="media">
        <a :href="'/index/'+property.id"><img :src="imgLink" class="mr-3" alt="..."></a>
        <div class="media-body">
            <a :href="'/index/'+property.id"><h6 class="mt-0">{{110000+property.id}} {{property.header_hun}}</h6></a>
            <p v-html="property.short_text_hun"></p>  
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
    data: function(){
        return{
            imgLink:'/uploads/placeholder.png',
            properties:[]
        }
    },
    methods:{
        loadCookies(){
            axios.get('/cookie-get')
            .then(res=>{
                const saved=res.data
                console.log(saved)
            })
            .catch(error=>{
                console.log(error)
            })
        },
        getProperties(){
            axios.get('/cookie-properties-get')
            .then(res=>{
                this.properties = res.data               
            })
            .catch(error=>{
                console.log(error)
            })
        }
    },
    created: function () {
        this.getProperties()
    }    
}
</script>

