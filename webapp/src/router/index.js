import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Video from '@/components/Video'
import Page from '@/components/Page'

Vue.use(Router)

export default new Router({
  mode:'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },{
      path: '/video/:tId?',
      name: 'Video',
      component: Video
    },{
      path: '/page/:lessonId',
      name: 'Page',
      component: Page
    },
  ]
})
