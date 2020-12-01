/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'; 
import VueAxios from 'vue-axios'; 
import Axios from 'axios'; 

Vue.use(VueRouter, VueAxios, Axios);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import App from './components/App.vue'; 

import Create from './components/movies/Create.vue'; 
import Index from './components/movies/Index.vue'; 
import Edit from './components/movies/Edit.vue';  

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const routes = [
	{
		name: 'index', 
		path: '/', 
		component: Index
	}, 
	{
		name: 'create', 
		path: '/create',
		component: Create
	},
	{
		name: 'Edit', 
		path: '/edit/:id', 
		component: Edit
	}
]; 

const router = new VueRouter({
	mode: 'history', 
	routes: routes
});

new Vue(Vue.util.extend({ router }, App)).$mount("#app"); 

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

