import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import api from '@/services/api'

export const useForumsStore = defineStore('forums', () => {
  // State
  const forums = ref([])
  const currentForum = ref(null)
  const loading = ref(false)
  const error = ref(null)

  // Getters
  const activeForums = computed(() =>
    forums.value.filter(forum => forum.is_active)
  )

  const forumsByCategory = computed(() => {
    const categories = {}
    activeForums.value.forEach(forum => {
      if (!categories[forum.category]) {
        categories[forum.category] = []
      }
      categories[forum.category].push(forum)
    })
    return categories
  })

  // Actions
  async function fetchForums() {
    loading.value = true
    error.value = null

    try {
      const response = await api.get('/api/forums')
      forums.value = response.data.data
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to fetch forums'
      throw err
    } finally {
      loading.value = false
    }
  }

  async function fetchForum(slug) {
    loading.value = true
    error.value = null

    try {
      const response = await api.get(`/api/forums/${slug}`)
      currentForum.value = response.data.data
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to fetch forum'
      throw err
    } finally {
      loading.value = false
    }
  }

  async function createForum(forumData) {
    try {
      const response = await api.post('/api/forums', forumData)
      forums.value.push(response.data.data)
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to create forum'
      throw err
    }
  }

  async function updateForum(slug, forumData) {
    try {
      const response = await api.put(`/api/forums/${slug}`, forumData)
      const index = forums.value.findIndex(f => f.slug === slug)
      if (index !== -1) {
        forums.value[index] = response.data.data
      }
      if (currentForum.value?.slug === slug) {
        currentForum.value = response.data.data
      }
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to update forum'
      throw err
    }
  }

  async function deleteForum(slug) {
    try {
      await api.delete(`/api/forums/${slug}`)
      forums.value = forums.value.filter(f => f.slug !== slug)
      if (currentForum.value?.slug === slug) {
        currentForum.value = null
      }
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to delete forum'
      throw err
    }
  }

  function clearError() {
    error.value = null
  }

  function setCurrentForum(forum) {
    currentForum.value = forum
  }

  return {
    // State
    forums,
    currentForum,
    loading,
    error,

    // Getters
    activeForums,
    forumsByCategory,

    // Actions
    fetchForums,
    fetchForum,
    createForum,
    updateForum,
    deleteForum,
    clearError,
    setCurrentForum
  }
})