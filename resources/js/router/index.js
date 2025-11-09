import { createRouter, createWebHistory } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

// Route components
import Home from '@/views/Home.vue'
import Forums from '@/views/Forums.vue'
import ForumDetail from '@/views/ForumDetail.vue'
import ThreadDetail from '@/views/ThreadDetail.vue'
import Groups from '@/views/Groups.vue'
import GroupDetail from '@/views/GroupDetail.vue'
import Profile from '@/views/Profile.vue'
import Login from '@/views/Login.vue'
import Register from '@/views/Register.vue'
import CreateThread from '@/views/CreateThread.vue'
import Search from '@/views/Search.vue'
import Notifications from '@/views/Notifications.vue'
import NotFound from '@/views/NotFound.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: { title: 'Home' }
  },
  {
    path: '/forums',
    name: 'forums',
    component: Forums,
    meta: { title: 'Forums' }
  },
  {
    path: '/forums/:slug',
    name: 'forum-detail',
    component: ForumDetail,
    props: true,
    meta: { title: 'Forum' }
  },
  {
    path: '/threads/:id',
    name: 'thread-detail',
    component: ThreadDetail,
    props: true,
    meta: { title: 'Thread' }
  },
  {
    path: '/threads/create',
    name: 'create-thread',
    component: CreateThread,
    meta: {
      title: 'Create Thread',
      requiresAuth: true
    }
  },
  {
    path: '/groups',
    name: 'groups',
    component: Groups,
    meta: { title: 'Groups' }
  },
  {
    path: '/groups/:slug',
    name: 'group-detail',
    component: GroupDetail,
    props: true,
    meta: { title: 'Group' }
  },
  {
    path: '/profile/:username?',
    name: 'profile',
    component: Profile,
    props: true,
    meta: { title: 'Profile' }
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      title: 'Login',
      guest: true
    }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      title: 'Register',
      guest: true
    }
  },
  {
    path: '/search',
    name: 'search',
    component: Search,
    meta: { title: 'Search' }
  },
  {
    path: '/notifications',
    name: 'notifications',
    component: Notifications,
    meta: {
      title: 'Notifications',
      requiresAuth: true
    }
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'not-found',
    component: NotFound,
    meta: { title: 'Page Not Found' }
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { top: 0 }
    }
  }
})

// Navigation guards
router.beforeEach((to, from, next) => {
  const authStore = useAuthStore()

  // Update page title
  document.title = to.meta.title
    ? `${to.meta.title} - Forum Community`
    : 'Forum Community'

  // Check authentication requirements
  if (to.meta.requiresAuth && !authStore.isAuthenticated) {
    next({ name: 'login', query: { redirect: to.fullPath } })
    return
  }

  // Redirect authenticated users away from guest pages
  if (to.meta.guest && authStore.isAuthenticated) {
    next({ name: 'home' })
    return
  }

  next()
})

export default router