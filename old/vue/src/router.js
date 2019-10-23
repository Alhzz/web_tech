import Vue from 'vue';
import VueRouter from 'vue-router'
import Register from '@/components/Register'
import Login from '@/components/Login'
import HelloWorld from '@/components/HelloWorld'
Vue.use(VueRouter)

const router = new VueRouter({
  routes: [
    { 
      path: '/login', 
      component: Login,
    },
    {
      path: '/main',
      component: HelloWorld, 
    },
    {
      path: '/regis',
      component: Register,
    },
    {
      path: '/quiz/:id',
      component: () => import('@/components/quiz/MainGame.vue'),
    },
    // {
    //   path: '/leaderboard',
    //   component: () => import('@/components/Leaderboard'),
    //   meta: { requiresAuth: true }
    // },
    {
      path: '*',
      redirect: '/main'
    },
  ]
})



export default router;