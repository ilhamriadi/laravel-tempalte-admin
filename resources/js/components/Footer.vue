<template>
  <footer class="bg-dark text-light py-4 mt-auto">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5><i class="fas fa-comments me-2"></i>Forum Community</h5>
          <p class="text-muted">
            A vibrant community for discussions, knowledge sharing, and connecting with like-minded individuals.
          </p>
        </div>
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li>
              <router-link to="/forums" class="text-light text-decoration-none">
                <i class="fas fa-th-large me-2"></i>Forums
              </router-link>
            </li>
            <li>
              <router-link to="/groups" class="text-light text-decoration-none">
                <i class="fas fa-users me-2"></i>Groups
              </router-link>
            </li>
            <li>
              <router-link to="/search" class="text-light text-decoration-none">
                <i class="fas fa-search me-2"></i>Search
              </router-link>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Community Guidelines</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-light text-decoration-none">
                <i class="fas fa-book me-2"></i>Rules & Guidelines
              </a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">
                <i class="fas fa-shield-alt me-2"></i>Privacy Policy
              </a>
            </li>
            <li>
              <a href="#" class="text-light text-decoration-none">
                <i class="fas fa-file-contract me-2"></i>Terms of Service
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="my-4 bg-secondary" />
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="mb-0 text-muted">
            © {{ currentYear }} Forum Community. All rights reserved.
          </p>
        </div>
        <div class="col-md-6 text-md-end">
          <div class="social-links">
            <a href="#" class="text-light me-3" title="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-light me-3" title="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-light me-3" title="GitHub">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="text-light" title="Discord">
              <i class="fab fa-discord"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue'

const currentYear = computed(() => new Date().getFullYear())
</script>

<style scoped>
footer {
  margin-top: auto;
}

a {
  transition: color 0.3s ease;
}

a:hover {
  color: #fff !important;
}

.social-links a {
  font-size: 1.2rem;
}

.social-links a:hover {
  transform: translateY(-2px);
  display: inline-block;
}
</style>