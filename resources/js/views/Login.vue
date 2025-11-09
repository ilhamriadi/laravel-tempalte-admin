<template>
  <div class="login">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-header text-center">
              <h4><i class="fas fa-sign-in-alt me-2"></i>Login</h4>
            </div>
            <div class="card-body">
              <form @submit.prevent="handleLogin">
                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    v-model="form.email"
                    :class="{ 'is-invalid': errors.email }"
                    required
                  />
                  <div v-if="errors.email" class="invalid-feedback">
                    {{ errors.email }}
                  </div>
                </div>

                <!-- Password -->
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group">
                    <input
                      :type="showPassword ? 'text' : 'password'"
                      class="form-control"
                      id="password"
                      v-model="form.password"
                      :class="{ 'is-invalid': errors.password }"
                      required
                    />
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                      @click="showPassword = !showPassword"
                    >
                      <i :class="showPassword ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                    </button>
                  </div>
                  <div v-if="errors.password" class="invalid-feedback">
                    {{ errors.password }}
                  </div>
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="remember"
                    v-model="form.remember"
                  />
                  <label class="form-check-label" for="remember">
                    Remember me
                  </label>
                </div>

                <!-- Error Message -->
                <div v-if="errorMessage" class="alert alert-danger" role="alert">
                  <i class="fas fa-exclamation-triangle me-2"></i>
                  {{ errorMessage }}
                </div>

                <!-- Submit Button -->
                <button
                  type="submit"
                  class="btn btn-primary w-100"
                  :disabled="loading"
                >
                  <span v-if="loading">
                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                    Logging in...
                  </span>
                  <span v-else>
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Login
                  </span>
                </button>
              </form>

              <div class="text-center mt-3">
                <p class="mb-0">
                  Don't have an account?
                  <router-link to="/register" class="text-decoration-none">
                    Register here
                  </router-link>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const route = useRoute()
const authStore = useAuthStore()

const form = reactive({
  email: '',
  password: '',
  remember: false
})

const loading = ref(false)
const showPassword = ref(false)
const errors = ref({})
const errorMessage = ref('')

onMounted(() => {
  // If already logged in, redirect to home
  if (authStore.isAuthenticated) {
    router.push({ name: 'home' })
  }
})

async function handleLogin() {
  loading.value = true
  errors.value = {}
  errorMessage.value = ''

  try {
    await authStore.login({
      email: form.email,
      password: form.password,
      remember: form.remember
    })

    // Redirect to intended page or home
    const redirect = route.query.redirect || { name: 'home' }
    router.push(redirect)
  } catch (error) {
    if (error.response?.status === 422) {
      // Validation errors
      errors.value = error.response.data.errors || {}
      errorMessage.value = error.response.data.message || 'Please fix the errors below.'
    } else {
      errorMessage.value = error.response?.data?.message || 'Login failed. Please try again.'
    }
  } finally {
    loading.value = false
  }
}
</script>

<style scoped>
.login {
  min-height: 60vh;
  display: flex;
  align-items: center;
}

.card {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-control:focus {
  box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

.btn {
  transition: all 0.2s ease-in-out;
}

.btn:hover {
  transform: translateY(-1px);
}

.alert {
  border-left: 4px solid #dc3545;
}
</style>