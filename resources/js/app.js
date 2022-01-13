/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'

Vue.use(VueRouter)


const Hero = () => import('./components/Hero.vue')
const Example = () => import('./components/ExampleComponent.vue')
const Create = () => import('./components/CreateHero.vue')
const Edit = () => import('./components/EditHero.vue')
const routes = [
  { name:'Example', path: '/example', component: Example },
  { name:'Hero', path: '/Hero', component: Hero },
  { name:'Create', path: '/create', component: Create },
  { name:'Edit', path: '/edit/:id', component: Edit }
]
  
  
  // Create the router instance and pass the `routes` option
  // You can pass in additional options here, but let's
  // keep it simple for now.
  const router = new VueRouter({
    routes // short for `routes: routes`
  })



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
    router
  }).$mount('#app')
