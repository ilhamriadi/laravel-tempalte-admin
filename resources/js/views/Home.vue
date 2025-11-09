<template>
  <div class="home">
    <!-- Hero Section -->
    <section class="hero bg-primary text-white py-5 mb-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 fw-bold mb-4">
              Welcome to Our Community
            </h1>
            <p class="lead mb-4">
              Join a vibrant community of learners, experts, and enthusiasts.
              Share knowledge, ask questions, and connect with like-minded individuals.
            </p>
            <div class="d-flex gap-3">
              <router-link
                v-if="!authStore.isAuthenticated"
                to="/register"
                class="btn btn-light btn-lg"
              >
                <i class="fas fa-user-plus me-2"></i>
                Join Community
              </router-link>
              <router-link
                v-if="authStore.isAuthenticated"
                to="/threads/create"
                class="btn btn-light btn-lg"
              >
                <i class="fas fa-plus me-2"></i>
                Create Thread
              </router-link>
              <router-link to="/forums" class="btn btn-outline-light btn-lg">
                <i class="fas fa-th-large me-2"></i>
                Browse Forums
              </router-link>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image text-center">
              <i class="fas fa-comments" style="font-size: 12rem; opacity: 0.3;"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="stats py-4 mb-5">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3">
            <div class="stat-item">
              <h3 class="text-primary fw-bold">{{ stats.totalThreads }}</h3>
              <p class="text-muted">Threads</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <h3 class="text-primary fw-bold">{{ stats.totalComments }}</h3>
              <p class="text-muted">Comments</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <h3 class="text-primary fw-bold">{{ stats.totalMembers }}</h3>
              <p class="text-muted">Members</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-item">
              <h3 class="text-primary fw-bold">{{ stats.activeGroups }}</h3>
              <p class="text-muted">Groups</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Recent Activity -->
    <section class="recent-activity mb-5">
      <div class="container">
        <div class="row">
          <!-- Recent Threads -->
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                  <i class="fas fa-clock me-2"></i>
                  Recent Threads
                </h5>
                <router-link to="/forums" class="btn btn-sm btn-outline-primary">
                  View All
                </router-link>
              </div>
              <div class="card-body">
                <div v-if="threadsStore.loading" class="text-center py-3">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
                <div v-else-if="recentThreads.length === 0" class="text-muted text-center py-3">
                  No recent threads found.
                </div>
                <div v-else class="recent-threads">
                  <div
                    v-for="thread in recentThreads"
                    :key="thread.id"
                    class="thread-item d-flex justify-content-between align-items-start mb-3 pb-3 border-bottom"
                  >
                    <div class="flex-grow-1">
                      <router-link
                        :to="{ name: 'thread-detail', params: { id: thread.id } }"
                        class="text-decoration-none fw-bold"
                      >
                        {{ thread.title }}
                        <span v-if="thread.is_pinned" class="badge bg-warning ms-2">
                          <i class="fas fa-thumbtack"></i>
                        </span>
                        <span v-if="thread.is_locked" class="badge bg-danger ms-2">
                          <i class="fas fa-lock"></i>
                        </span>
                      </router-link>
                      <div class="text-muted small mt-1">
                        by {{ thread.user.name }} in
                        <router-link
                          :to="{ name: 'forum-detail', params: { slug: thread.forum.slug } }"
                          class="text-decoration-none"
                        >
                          {{ thread.forum.name }}
                        </router-link>
                        • {{ formatDate(thread.last_reply_at) }}
                      </div>
                    </div>
                    <div class="text-end text-muted small">
                      <div>{{ thread.comments_count }} replies</div>
                      <div>{{ thread.views }} views</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Popular Groups -->
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                  <i class="fas fa-users me-2"></i>
                  Popular Groups
                </h5>
                <router-link to="/groups" class="btn btn-sm btn-outline-primary">
                  View All
                </router-link>
              </div>
              <div class="card-body">
                <div v-if="groupsStore.loading" class="text-center py-3">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
                <div v-else-if="popularGroups.length === 0" class="text-muted text-center py-3">
                  No groups available yet.
                </div>
                <div v-else class="popular-groups">
                  <div
                    v-for="group in popularGroups"
                    :key="group.id"
                    class="group-item d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom"
                  >
                    <div class="d-flex align-items-center">
                      <div class="group-avatar me-3">
                        <img
                          :src="group.avatar || '/default-group.png'"
                          :alt="group.name"
                          class="rounded-circle"
                          width="40"
                          height="40"
                        />
                      </div>
                      <div>
                        <router-link
                          :to="{ name: 'group-detail', params: { slug: group.slug } }"
                          class="text-decoration-none fw-bold"
                        >
                          {{ group.name }}
                        </router-link>
                        <div class="text-muted small">
                          {{ group.description }}
                          <span class="badge bg-secondary ms-2">
                            {{ group.type }}
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="text-end text-muted small">
                      <div>{{ group.members_count }} members</div>
                      <button
                        v-if="authStore.isAuthenticated && !group.is_member"
                        class="btn btn-sm btn-outline-primary mt-1"
                        @click="joinGroup(group)"
                      >
                        Join
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Categories Preview -->
    <section class="categories-preview mb-5">
      <div class="container">
        <div class="text-center mb-4">
          <h2>Explore Categories</h2>
          <p class="text-muted">Find discussions that interest you</p>
        </div>
        <div class="row">
          <div
            v-for="(category, name) in forumsStore.forumsByCategory"
            :key="name"
            class="col-md-4 mb-3"
          >
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title text-capitalize">{{ name }}</h5>
                <p class="card-text text-muted">
                  {{ category.length }} {{ category.length === 1 ? 'forum' : 'forums' }}
                </p>
                <router-link
                  :to="{ name: 'forums' }"
                  class="btn btn-outline-primary btn-sm"
                >
                  Browse {{ name }}
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import { useAuthStore } from '@/stores/auth'
import { useThreadsStore } from '@/stores/threads'
import { useForumsStore } from '@/stores/forums'
import { useGroupsStore } from '@/stores/groups'

const authStore = useAuthStore()
const threadsStore = useThreadsStore()
const forumsStore = useForumsStore()
const groupsStore = useGroupsStore()

const stats = ref({
  totalThreads: 0,
  totalComments: 0,
  totalMembers: 0,
  activeGroups: 0
})

const recentThreads = computed(() => threadsStore.threads.slice(0, 5))
const popularGroups = computed(() => groupsStore.groups.slice(0, 5))

onMounted(async () => {
  // Fetch data
  await Promise.all([
    threadsStore.fetchThreads({ per_page: 5 }),
    forumsStore.fetchForums(),
    groupsStore.fetchGroups({ per_page: 5, sort: 'members' })
  ])

  // Calculate stats (mock data for now)
  stats.value = {
    totalThreads: threadsStore.pagination.total || 127,
    totalComments: 892,
    totalMembers: 342,
    activeGroups: groupsStore.groups.length || 8
  }
})

function formatDate(dateString) {
  return new Date(dateString).toLocaleDateString()
}

async function joinGroup(group) {
  try {
    // TODO: Implement group joining
    console.log('Joining group:', group.name)
  } catch (error) {
    console.error('Failed to join group:', error)
  }
}
</script>

<style scoped>
.hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.stat-item h3 {
  font-size: 2rem;
}

.thread-item:last-child,
.group-item:last-child {
  border-bottom: none !important;
  margin-bottom: 0 !important;
  padding-bottom: 0 !important;
}

.group-avatar img {
  object-fit: cover;
}

.card {
  transition: transform 0.2s ease-in-out;
}

.card:hover {
  transform: translateY(-2px);
}
</style>