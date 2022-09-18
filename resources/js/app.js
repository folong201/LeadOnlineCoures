import './bootstrap';
// window.Vue = import 'vue'    

import Alpine from 'alpinejs';
import {createApp} from 'vue'
// import { routes } from './router/index';

import course from "./components/course.vue"

window.Alpine = Alpine;

Alpine.start();

createApp(
   course
)
.mount('#app')