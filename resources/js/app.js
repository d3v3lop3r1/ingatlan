import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

window.Vue = require('vue');


Vue.component('save-favourite', require('./components/SaveFavourite.vue').default);
Vue.component('show-favourites', require('./components/ShowFavourites.vue').default);


const app = new Vue({
    el: '#app',
});

// const app2 = new Vue({
//     el: '#app2',
// });
