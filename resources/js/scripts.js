require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false;
Vue.config.devtools = false;

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
