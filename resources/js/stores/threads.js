import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import api from '@/services/api'

export const useThreadsStore = defineStore('threads', () => {
  // State
  const threads = ref([])
  const currentThread = ref(null)
  const loading = ref(false)
  const pagination = ref({
    current_page: 1,
    last_page: 1,
    per_page: 15,
    total: 0,
    links: []
  })
  const filters = ref({
    search: '',
    sort: 'latest',
    forum_id: null,
    pinned_only: false
  })

  // Getters
  const filteredThreads = computed(() => {
    let result = threads.value

    if (filters.value.search) {
      const search = filters.value.search.toLowerCase()
      result = result.filter(thread =>
        thread.title.toLowerCase().includes(search) ||
        thread.content.toLowerCase().includes(search)
      )
    }

    if (filters.value.pinned_only) {
      result = result.filter(thread => thread.is_pinned)
    }

    return result
  })

  // Actions
  async function fetchThreads(params = {}) {
    loading.value = true

    try {
      const queryParams = {
        per_page: pagination.value.per_page,
        page: pagination.value.current_page,
        ...filters.value,
        ...params
      }

      const response = await api.get('/api/threads', { params: queryParams })

      threads.value = response.data.data.data
      pagination.value = {
        current_page: response.data.data.meta.current_page,
        last_page: response.data.data.meta.last_page,
        per_page: response.data.data.meta.per_page,
        total: response.data.data.meta.total,
        links: response.data.data.links
      }

      return response.data
    } catch (error) {
      console.error('Failed to fetch threads:', error)
      throw error
    } finally {
      loading.value = false
    }
  }

  async function fetchThread(id) {
    loading.value = true

    try {
      const response = await api.get(`/api/threads/${id}`)
      currentThread.value = response.data.data
      return response.data
    } catch (error) {
      console.error('Failed to fetch thread:', error)
      throw error
    } finally {
      loading.value = false
    }
  }

  async function createThread(threadData) {
    try {
      const response = await api.post('/api/threads', threadData)
      threads.value.unshift(response.data.data)
      return response.data
    } catch (error) {
      console.error('Failed to create thread:', error)
      throw error
    }
  }

  async function updateThread(id, threadData) {
    try {
      const response = await api.put(`/api/threads/${id}`, threadData)

      const index = threads.value.findIndex(t => t.id === id)
      if (index !== -1) {
        threads.value[index] = response.data.data
      }

      if (currentThread.value?.id === id) {
        currentThread.value = response.data.data
      }

      return response.data
    } catch (error) {
      console.error('Failed to update thread:', error)
      throw error
    }
  }

  async function deleteThread(id) {
    try {
      await api.delete(`/api/threads/${id}`)
      threads.value = threads.value.filter(t => t.id !== id)
      if (currentThread.value?.id === id) {
        currentThread.value = null
      }
    } catch (error) {
      console.error('Failed to delete thread:', error)
      throw error
    }
  }

  async function pinThread(id) {
    try {
      const response = await api.post(`/api/threads/${id}/pin`)

      const thread = threads.value.find(t => t.id === id)
      if (thread) {
        thread.is_pinned = response.data.data.is_pinned
      }

      if (currentThread.value?.id === id) {
        currentThread.value.is_pinned = response.data.data.is_pinned
      }

      return response.data
    } catch (error) {
      console.error('Failed to pin thread:', error)
      throw error
    }
  }

  async function lockThread(id) {
    try {
      const response = await api.post(`/api/threads/${id}/lock`)

      const thread = threads.value.find(t => t.id === id)
      if (thread) {
        thread.is_locked = response.data.data.is_locked
      }

      if (currentThread.value?.id === id) {
        currentThread.value.is_locked = response.data.data.is_locked
      }

      return response.data
    } catch (error) {
      console.error('Failed to lock thread:', error)
      throw error
    }
  }

  function updateFilters(newFilters) {
    filters.value = { ...filters.value, ...newFilters }
    pagination.value.current_page = 1 // Reset to first page
  }

  function setPage(page) {
    pagination.value.current_page = page
  }

  function clearCurrentThread() {
    currentThread.value = null
  }

  return {
    // State
    threads,
    currentThread,
    loading,
    pagination,
    filters,

    // Getters
    filteredThreads,

    // Actions
    fetchThreads,
    fetchThread,
    createThread,
    updateThread,
    deleteThread,
    pinThread,
    lockThread,
    updateFilters,
    setPage,
    clearCurrentThread
  }
})