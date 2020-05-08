require('./bootstrap');

window.Vue = require('vue');


Vue.component('save-favourite', require('./components/SaveFavourite.vue').default);


const app = new Vue({
    el: '#app',
});
