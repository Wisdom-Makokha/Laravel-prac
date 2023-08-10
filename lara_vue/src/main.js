//css file
import './assets/main.css'

//packages for the app
import { createApp } from 'vue'
import App from './App.vue'
import {createRouter, createWebHashHistory} from 'vue-router'

//components for the router
import home from './components/Home.vue'
import blog from './components/Blog.vue'

const routes = [
    {
        name: 'Home',
        path: '/',
        component: home
    },
    {
        name: 'blog',
        path: '/blog',
        component: blog
    }
];

const router = createRouter(
    {
        history: createWebHashHistory(),
        routes: routes,
    }
);

createApp(App).use(router).mount('#app')
