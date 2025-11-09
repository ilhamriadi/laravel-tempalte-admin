<template>
  <div class="forum-detail">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h1>
            <i class="fas fa-th-large me-2"></i>
            {{ forum?.name || 'Loading...' }}
          </h1>
          <p class="text-muted">{{ forum?.description }}</p>
        </div>
        <router-link to="/threads/create" class="btn btn-primary">
          <i class="fas fa-plus me-2"></i>
          Create Thread
        </router-link>
      </div>

      <div v-if="loading" class="text-center py-5">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading forum...</span>
        </div>
      </div>

      <div v-else-if="forum" class="forum-content">
        <!-- Forum Stats -->
        <div class="row mb-4">
          <div class="col-md-3">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="text-primary">{{ forum.threads_count || 0 }}</h3>
                <p class="text-muted mb-0">Threads</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="text-primary">{{ forum.posts_count || 0 }}</h3>
                <p class="text-muted mb-0">Posts</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="text-primary">{{ forum.members_count || 0 }}</h3>
                <p class="text-muted mb-0">Members</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="text-primary">{{ formatDate(forum.created_at) }}</h3>
                <p class="text-muted mb-0">Created</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Threads List -->
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Threads in {{ forum.name }}</h5>
          </div>
          <div class="card-body">
            <p class="text-muted">Thread listing will be implemented here.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { useForumsStore } from '@/stores/forums'

const route = useRoute()
const forumsStore = useForumsStore()

const forum = ref(null)
const loading = ref(true)

onMounted(async () => {
  try {
    await forumsStore.fetchForum(route.params.slug)
    forum.value = forumsStore.currentForum
  } catch (error) {
    console.error('Failed to fetch forum:', error)
  } finally {
    loading.value = false
  }
})

function formatDate(dateString) {
  return new Date(dateString).toLocaleDateString()
}
</script>