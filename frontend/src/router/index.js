import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Hardware from '@/components/Hardware'
import Mentors from '@/components/Mentors'
import Resources from '@/components/Resources'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/hardware',
            name: 'Hardware',
            component: Hardware
        },
        {
            path: '/mentors',
            name: 'Mentors',
            component: Mentors
        },
        {
            path: '/resources',
            name: 'Resources',
            component: Resources
        }
    ]
})
