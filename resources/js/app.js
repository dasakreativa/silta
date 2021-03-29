
/** ---------------------------------
 * For Importing Core Vue.JS
 ------------------------------------ */
import './bootstrap';
import Vue from 'vue';
import App from './App.vue';
import router from './router.js';

/** ---------------------------------
 * For Importing Any Files
 ------------------------------------ */
import '@fortawesome/fontawesome-free/js/all';
import 'boxicons/dist/boxicons';
import 'jquery-validation/dist/localization/messages_id.js';
import 'jquery-validation/dist/jquery.validate';
import './addons/metismenu/dist/metisMenu.js';
import './addons/jquery-scrollbar/jquery.scrollbar.min.js';

/** ---------------------------------
 * Importing Modules
 ------------------------------------ */
const Swal = window.Swal = require('sweetalert2');
import moment from 'moment';
Vue.prototype.moment = moment;

/** ---------------------------------
 * Running Module
 ------------------------------------ */
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import vSelect from 'vue-select';
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate, {
	inject: true,
	fieldsBagName: 'veeFields',
	errorBagName: 'veeErrors'
});
Vue.component('v-select', vSelect);
Vue.use(BootstrapVue, IconsPlugin);

// Run all vue components and modules
const vm = new Vue({
	router,
    el: '#app',
    render: h => h(App)
});