import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import api from '@/services/api'

export const useAuthStore = defineStore('auth', () => {
  // State
  const user = ref(null)
  const token = ref(localStorage.getItem('token'))
  const loading = ref(false)

  // Getters
  const isAuthenticated = computed(() => !!token.value && !!user.value)
  const isAdmin = computed(() => user.value?.roles?.includes('admin') || false)
  const isModerator = computed(() =>
    user.value?.roles?.some(role => ['admin', 'moderator'].includes(role)) || false
  )

  // Actions
  async function login(credentials) {
    loading.value = true
    try {
      const response = await api.post('/login', credentials)

      token.value = response.data.token
      user.value = response.data.user

      localStorage.setItem('token', token.value)

      // Set default authorization header
      api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`

      return response.data
    } catch (error) {
      throw error
    } finally {
      loading.value = false
    }
  }

  async function register(userData) {
    loading.value = true
    try {
      const response = await api.post('/register', userData)

      // Auto login after registration
      if (response.data.token) {
        token.value = response.data.token
        user.value = response.data.user
        localStorage.setItem('token', token.value)
        api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`
      }

      return response.data
    } catch (error) {
      throw error
    } finally {
      loading.value = false
    }
  }

  async function logout() {
    try {
      await api.post('/logout')
    } catch (error) {
      console.error('Logout error:', error)
    } finally {
      // Clear local state regardless of API call success
      token.value = null
      user.value = null
      localStorage.removeItem('token')
      delete api.defaults.headers.common['Authorization']
    }
  }

  async function fetchUser() {
    if (!token.value) return null

    try {
      const response = await api.get('/user')
      user.value = response.data
      return response.data
    } catch (error) {
      // Token is invalid, clear it
      logout()
      throw error
    }
  }

  async function initializeAuth() {
    if (token.value) {
      api.defaults.headers.common['Authorization'] = `Bearer ${token.value}`
      try {
        await fetchUser()
      } catch (error) {
        console.error('Failed to initialize auth:', error)
      }
    }
  }

  async function updateProfile(profileData) {
    try {
      const response = await api.put('/profile', profileData)
      user.value = { ...user.value, ...response.data }
      return response.data
    } catch (error) {
      throw error
    }
  }

  function hasPermission(permission) {
    return user.value?.permissions?.includes(permission) || isAdmin.value
  }

  function hasRole(role) {
    return user.value?.roles?.includes(role) || false
  }

  function canModerateForum() {
    return isModerator.value
  }

  return {
    // State
    user,
    token,
    loading,

    // Getters
    isAuthenticated,
    isAdmin,
    isModerator,

    // Actions
    login,
    register,
    logout,
    fetchUser,
    initializeAuth,
    updateProfile,
    hasPermission,
    hasRole,
    canModerateForum
  }
})