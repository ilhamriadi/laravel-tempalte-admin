<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <router-link class="navbar-brand" to="/">
        <i class="fas fa-comments me-2"></i>
        Forum Community
      </router-link>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <router-link class="nav-link" to="/">
              <i class="fas fa-home me-1"></i>
              Home
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/forums">
              <i class="fas fa-th-large me-1"></i>
              Forums
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/groups">
              <i class="fas fa-users me-1"></i>
              Groups
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/search">
              <i class="fas fa-search me-1"></i>
              Search
            </router-link>
          </li>
        </ul>

        <ul class="navbar-nav">
          <template v-if="authStore.isAuthenticated">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle d-flex align-items-center"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
              >
                <img
                  :src="authStore.user.avatar || '/default-avatar.png'"
                  :alt="authStore.user.name"
                  class="rounded-circle me-2"
                  width="32"
                  height="32"
                />
                {{ authStore.user.name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <router-link class="dropdown-item" :to="`/profile/${authStore.user.name}`">
                    <i class="fas fa-user me-2"></i>
                    Profile
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/notifications">
                    <i class="fas fa-bell me-2"></i>
                    Notifications
                    <span class="badge bg-danger ms-auto" v-if="unreadCount > 0">
                      {{ unreadCount }}
                    </span>
                  </router-link>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li v-if="authStore.isAdmin">
                  <router-link class="dropdown-item" to="/admin">
                    <i class="fas fa-cog me-2"></i>
                    Admin Panel
                  </router-link>
                </li>
                <li>
                  <router-link class="dropdown-item" to="/threads/create">
                    <i class="fas fa-plus me-2"></i>
                    Create Thread
                  </router-link>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <button class="dropdown-item" @click="handleLogout">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    Logout
                  </button>
                </li>
              </ul>
            </li>
          </template>
          <template v-else>
            <li class="nav-item">
              <router-link class="nav-link" to="/login">
                <i class="fas fa-sign-in-alt me-1"></i>
                Login
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/register">
                <i class="fas fa-user-plus me-1"></i>
                Register
              </router-link>
            </li>
          </template>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { computed, ref } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const authStore = useAuthStore()
const unreadCount = ref(0) // TODO: Fetch from notifications store

async function handleLogout() {
  try {
    await authStore.logout()
    router.push({ name: 'home' })
  } catch (error) {
    console.error('Logout failed:', error)
  }
}
</script>

<style scoped>
.navbar-brand {
  font-weight: bold;
  font-size: 1.5rem;
}

.nav-link {
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: #fff !important;
}

.dropdown-item {
  color: #333;
}

.dropdown-item:hover {
  background-color: #f8f9fa;
}

.rounded-circle {
  object-fit: cover;
}
</style>