import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import api from '@/services/api'

export const useGroupsStore = defineStore('groups', () => {
  // State
  const groups = ref([])
  const currentGroup = ref(null)
  const loading = ref(false)
  const error = ref(null)
  const pagination = ref({
    current_page: 1,
    last_page: 1,
    per_page: 12,
    total: 0,
    links: []
  })
  const filters = ref({
    search: '',
    type: '',
    sort: 'recent'
  })

  // Getters
  const publicGroups = computed(() =>
    groups.value.filter(group => group.type === 'public')
  )

  const userGroups = computed(() =>
    groups.value.filter(group => group.is_member)
  )

  const accessibleGroups = computed(() => {
    // For now, return public groups
    return publicGroups.value
  })

  // Actions
  async function fetchGroups(params = {}) {
    loading.value = true
    error.value = null

    try {
      const queryParams = {
        per_page: pagination.value.per_page,
        page: pagination.value.current_page,
        ...filters.value,
        ...params
      }

      const response = await api.get('/api/groups', { params: queryParams })

      groups.value = response.data.data.data
      pagination.value = {
        current_page: response.data.data.meta.current_page,
        last_page: response.data.data.meta.last_page,
        per_page: response.data.data.meta.per_page,
        total: response.data.data.meta.total,
        links: response.data.data.links
      }

      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to fetch groups'
      throw err
    } finally {
      loading.value = false
    }
  }

  async function fetchGroup(slug) {
    loading.value = true
    error.value = null

    try {
      const response = await api.get(`/api/groups/${slug}`)
      currentGroup.value = response.data.data
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to fetch group'
      throw err
    } finally {
      loading.value = false
    }
  }

  async function createGroup(groupData) {
    try {
      const response = await api.post('/api/groups', groupData)
      groups.value.unshift(response.data.data)
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to create group'
      throw err
    }
  }

  async function updateGroup(slug, groupData) {
    try {
      const response = await api.put(`/api/groups/${slug}`, groupData)

      const index = groups.value.findIndex(g => g.slug === slug)
      if (index !== -1) {
        groups.value[index] = response.data.data
      }

      if (currentGroup.value?.slug === slug) {
        currentGroup.value = response.data.data
      }

      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to update group'
      throw err
    }
  }

  async function deleteGroup(slug) {
    try {
      await api.delete(`/api/groups/${slug}`)
      groups.value = groups.value.filter(g => g.slug !== slug)
      if (currentGroup.value?.slug === slug) {
        currentGroup.value = null
      }
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to delete group'
      throw err
    }
  }

  async function joinGroup(slug) {
    try {
      const response = await api.post(`/api/groups/${slug}/join`)

      const group = groups.value.find(g => g.slug === slug)
      if (group) {
        group.is_member = true
        group.members_count++
      }

      if (currentGroup.value?.slug === slug) {
        currentGroup.value.is_member = true
        currentGroup.value.members_count++
      }

      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to join group'
      throw err
    }
  }

  async function leaveGroup(slug) {
    try {
      const response = await api.post(`/api/groups/${slug}/leave`)

      const group = groups.value.find(g => g.slug === slug)
      if (group) {
        group.is_member = false
        group.members_count--
      }

      if (currentGroup.value?.slug === slug) {
        currentGroup.value.is_member = false
        currentGroup.value.members_count--
      }

      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to leave group'
      throw err
    }
  }

  async function fetchGroupMembers(slug, params = {}) {
    try {
      const response = await api.get(`/api/groups/${slug}/members`, { params })
      return response.data
    } catch (err) {
      error.value = err.response?.data?.message || 'Failed to fetch group members'
      throw err
    }
  }

  function updateFilters(newFilters) {
    filters.value = { ...filters.value, ...newFilters }
    pagination.value.current_page = 1
  }

  function setPage(page) {
    pagination.value.current_page = page
  }

  function clearCurrentGroup() {
    currentGroup.value = null
  }

  function clearError() {
    error.value = null
  }

  return {
    // State
    groups,
    currentGroup,
    loading,
    error,
    pagination,
    filters,

    // Getters
    publicGroups,
    userGroups,
    accessibleGroups,

    // Actions
    fetchGroups,
    fetchGroup,
    createGroup,
    updateGroup,
    deleteGroup,
    joinGroup,
    leaveGroup,
    fetchGroupMembers,
    updateFilters,
    setPage,
    clearCurrentGroup,
    clearError
  }
})