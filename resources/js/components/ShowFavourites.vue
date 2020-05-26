<template>
<div>
    <div>
        <div v-if="!error">
            <div v-for="(property, index) in properties" v-bind:key="index" class="media">
                <!-- <a :href="'/index/'+property.id"><img :src="imgLink" class="mr-3" alt="..."></a> -->
                <div class="media-body">
                    <a :href="'/index/'+property.id"><h6 class="mt-0">{{110000+property.id}} {{property.header_hun}}</h6></a>
                    <p v-html="property.short_text_hun"></p>  
                </div>
            </div>
        </div>
        <div v-else>
            <h6 class="ml-2 mr-2 text-danger">Nincs Még mentett ingatlan</h6>
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
            properties:[],
            error:0
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
                this.error=0
                this.properties = res.data               
            })
            .catch(error=>{
                console.log(error)
                this.error=1
            })
        }
    },
    created: function () {
        this.getProperties()
    }    
}
</script>
<style scoped>
    .navbar-favourites-container img{
        width: 44px;
        height: 44px;
    }

    .navbar-favourites-container{
        text-transform: none;
        max-width: 70vw;
        font-size: x-small;
    }

    .navbar-favourites-container .media{
        padding: 0 10px;
        margin-bottom: 5px;
    }

    .navbar-favourites-container p{
        margin: 0 0 5px 0;
    }
</style>


