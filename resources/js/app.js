require('./bootstrap');

window.Vue = require('vue');
// Vuex
import store from './store/index';

// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

// components
Vue.component('lead-form-email', require('./components/LeadFormEmail.vue').default);
Vue.component('lead-form-phone', require('./components/LeadFormPhone.vue').default);



//run el
const mapp = new Vue({
    el: '#mapp',
    store
});
