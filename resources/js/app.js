/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
// import axios from 'axios';
import { createApp } from 'vue';
import router from "./router"
import App from './App.vue'

const app = createApp(App);

// app.use(axios);
app.use(router);

app.mount('#app');
