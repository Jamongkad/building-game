window.$ = window.jQuery = require('jquery')

import Vue from 'vue';
import Main from './Main.vue';
import VueResource from 'vue-resource';

Vue.use(VueResource);

new Vue({
    el: '#app',
    components: { Main }
});
