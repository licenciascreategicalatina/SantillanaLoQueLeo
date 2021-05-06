/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;


/* Register vuesax */
import Vue from 'vue';
import Vuesax from 'vuesax';

import 'vuesax/dist/vuesax.css'; //Vuesax styles
Vue.use(Vuesax);


/* Registration vue-splide */
//import App from './App';
import VueSplide from '@splidejs/vue-splide';

Vue.use( VueSplide );

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('view-home', require('./views/Home.vue').default);
Vue.component('view-day-one', require('./views/HomeDayOne.vue').default);
Vue.component('view-day-two', require('./views/HomeDayTwo.vue').default);
Vue.component('view-day-three', require('./views/HomeDayThree.vue').default);
Vue.component('view-component', require('./views/ViewComponent.vue').default);
Vue.component('button-view', require('./views/ButtonView.vue').default);
Vue.component('view-programa', require('./views/Programa.vue').default);
Vue.component('user-online', require('./components/UserOnLine.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
