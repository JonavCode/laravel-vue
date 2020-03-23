/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import moment from 'moment'


window.Vue = require('vue');

Vue.component('mi-tarea-component', require('./components/MiTareaComponent.vue').default);
Vue.component('form-tarea-component', require('./components/FormTareaComponent.vue').default);
Vue.component('tarea-component', require('./components/TareaComponent.vue').default);

const app = new Vue({
    el: '#app'
});

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('MM/DD/YYYY hh:mm:ss');
    }
});
  
