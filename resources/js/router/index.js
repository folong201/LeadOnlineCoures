import { createRouter,createWebHistory } from 'vue-router'
import examle from '../components/examle.vue'
const routes = [
    {
        path:'/test',
        name:'test',
        component:examle
    }
]

export default ({
    history:createWebHistory(),
    routes
})