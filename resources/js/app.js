require('./bootstrap');

window.Vue = require('vue');
import VueResource from 'vue-resource';
Vue.use(VueResource);
Vue.http.interceptors.push(function(request) {

    // modify method
    request.method = 'POST';
  
    // modify headers
    request.headers.set('X-CSRF-TOKEN', 'TOKEN');
    request.headers.set('Authorization', 'Bearer TOKEN');
  
  });


Vue.component('save-favourite', require('./components/SaveFavourite.vue').default);


const app = new Vue({
    el: '#app',
});
