<template>
  <div class="forums">
    <div class="container">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h1><i class="fas fa-th-large me-2"></i>Forums</h1>
          <p class="text-muted">Browse and participate in community discussions</p>
        </div>
        <div>
          <router-link
            v-if="authStore.isAuthenticated"
            to="/threads/create"
            class="btn btn-primary"
          >
            <i class="fas fa-plus me-2"></i>
            Create Thread
          </router-link>
        </div>
      </div>

      <!-- Loading State -->
      <div v-if="forumsStore.loading" class="text-center py-5">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading forums...</span>
        </div>
      </div>

      <!-- Error State -->
      <div v-else-if="forumsStore.error" class="alert alert-danger">
        <i class="fas fa-exclamation-triangle me-2"></i>
        {{ forumsStore.error }}
        <button class="btn btn-sm btn-outline-danger ms-2" @click="fetchForums">
          Retry
        </button>
      </div>

      <!-- Forums Content -->
      <div v-else>
        <!-- Categories -->
        <div v-for="(category, categoryName) in forumsByCategory" :key="categoryName" class="mb-5">
          <h3 class="category-title mb-3">
            <i :class="getCategoryIcon(categoryName)" class="me-2"></i>
            {{ formatCategoryName(categoryName) }}
          </h3>
          <div class="row">
            <div
              v-for="forum in category"
              :key="forum.id"
              class="col-md-6 mb-3"
            >
              <div class="card h-100 forum-card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1">
                      <h5 class="card-title">
                        <router-link
                          :to="{ name: 'forum-detail', params: { slug: forum.slug } }"
                          class="text-decoration-none"
                        >
                          {{ forum.name }}
                        </router-link>
                      </h5>
                      <p class="card-text text-muted small">{{ forum.description }}</p>
                      <div class="forum-stats d-flex gap-3 text-muted small">
                        <span>
                          <i class="fas fa-comments me-1"></i>
                          {{ forum.threads_count || 0 }} threads
                        </span>
                        <span>
                          <i class="fas fa-comment me-1"></i>
                          {{ forum.posts_count || 0 }} posts
                        </span>
                      </div>
                    </div>
                    <div class="text-end">
                      <span class="badge bg-success" v-if="forum.is_active">
                        Active
                      </span>
                      <span class="badge bg-secondary" v-else>
                        Inactive
                      </span>
                    </div>
                  </div>

                  <!-- Latest Thread -->
                  <div
                    v-if="forum.latest_thread"
                    class="latest-thread mt-3 pt-3 border-top"
                  >
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="flex-grow-1">
                        <div class="text-muted small mb-1">Latest Thread:</div>
                        <router-link
                          :to="{ name: 'thread-detail', params: { id: forum.latest_thread.id } }"
                          class="text-decoration-none fw-small"
                        >
                          {{ forum.latest_thread.title }}
                        </router-link>
                        <div class="text-muted small mt-1">
                          by {{ forum.latest_thread.user?.name || 'Unknown' }}
                          • {{ formatDate(forum.latest_thread.last_reply_at) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Empty State -->
        <div v-if="Object.keys(forumsByCategory).length === 0" class="text-center py-5">
          <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
          <h4>No Forums Available</h4>
          <p class="text-muted">
            There are currently no forums available. Check back later!
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, computed } from 'vue'
import { useForumsStore } from '@/stores/forums'
import { useAuthStore } from '@/stores/auth'

const forumsStore = useForumsStore()
const authStore = useAuthStore()

const forumsByCategory = computed(() => forumsStore.forumsByCategory)

onMounted(() => {
  fetchForums()
})

async function fetchForums() {
  try {
    await forumsStore.fetchForums()
  } catch (error) {
    console.error('Failed to fetch forums:', error)
  }
}

function formatCategoryName(category) {
  return category.split('-').map(word =>
    word.charAt(0).toUpperCase() + word.slice(1)
  ).join(' ')
}

function getCategoryIcon(category) {
  const icons = {
    'general': 'fas fa-comments',
    'announcements': 'fas fa-bullhorn',
    'support': 'fas fa-life-ring',
    'feedback': 'fas fa-lightbulb',
    'off-topic': 'fas fa-coffee'
  }
  return icons[category] || 'fas fa-folder'
}

function formatDate(dateString) {
  if (!dateString) return 'Never'
  return new Date(dateString).toLocaleDateString()
}
</script>

<style scoped>
.forum-card {
  transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.forum-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.category-title {
  color: #6c757d;
  font-weight: 600;
  border-bottom: 2px solid #e9ecef;
  padding-bottom: 0.5rem;
}

.latest-thread {
  background-color: #f8f9fa;
  border-radius: 0.375rem;
  padding: 0.75rem;
}

.badge {
  font-size: 0.75rem;
}

.card-title a {
  color: inherit;
}

.card-title a:hover {
  color: #0d6efd;
}

.forum-stats span {
  display: flex;
  align-items: center;
}
</style>