require('./bootstrap');

window.Vue = require('vue')

Vue.component('Post', require('./resources/js/components/Post.vue'))

const app = new Vue({
  el: '#app'
})