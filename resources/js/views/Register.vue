<template>
  <div class="register">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card">
            <div class="card-header text-center">
              <h4><i class="fas fa-user-plus me-2"></i>Create Account</h4>
            </div>
            <div class="card-body">
              <form @submit.prevent="handleRegister">
                <!-- Name -->
                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    v-model="form.name"
                    :class="{ 'is-invalid': errors.name }"
                    required
                  />
                  <div v-if="errors.name" class="invalid-feedback">
                    {{ errors.name[0] }}
                  </div>
                </div>

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
                    {{ errors.email[0] }}
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
                    {{ errors.password[0] }}
                  </div>
                  <div class="form-text">
                    Password must be at least 8 characters long.
                  </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                  <div class="input-group">
                    <input
                      :type="showConfirmPassword ? 'text' : 'password'"
                      class="form-control"
                      id="password_confirmation"
                      v-model="form.password_confirmation"
                      :class="{ 'is-invalid': errors.password_confirmation }"
                      required
                    />
                    <button
                      type="button"
                      class="btn btn-outline-secondary"
                      @click="showConfirmPassword = !showConfirmPassword"
                    >
                      <i :class="showConfirmPassword ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                    </button>
                  </div>
                  <div v-if="errors.password_confirmation" class="invalid-feedback">
                    {{ errors.password_confirmation[0] }}
                  </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="mb-3 form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="terms"
                    v-model="form.terms"
                    :class="{ 'is-invalid': errors.terms }"
                    required
                  />
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="#" class="text-decoration-none">Terms of Service</a>
                    and <a href="#" class="text-decoration-none">Privacy Policy</a>
                  </label>
                  <div v-if="errors.terms" class="invalid-feedback">
                    {{ errors.terms[0] }}
                  </div>
                </div>

                <!-- Error Message -->
                <div v-if="errorMessage" class="alert alert-danger" role="alert">
                  <i class="fas fa-exclamation-triangle me-2"></i>
                  {{ errorMessage }}
                </div>

                <!-- Success Message -->
                <div v-if="successMessage" class="alert alert-success" role="alert">
                  <i class="fas fa-check-circle me-2"></i>
                  {{ successMessage }}
                </div>

                <!-- Submit Button -->
                <button
                  type="submit"
                  class="btn btn-primary w-100"
                  :disabled="loading"
                >
                  <span v-if="loading">
                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                    Creating Account...
                  </span>
                  <span v-else>
                    <i class="fas fa-user-plus me-2"></i>
                    Create Account
                  </span>
                </button>
              </form>

              <div class="text-center mt-3">
                <p class="mb-0">
                  Already have an account?
                  <router-link to="/login" class="text-decoration-none">
                    Login here
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
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const authStore = useAuthStore()

const form = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  terms: false
})

const loading = ref(false)
const showPassword = ref(false)
const showConfirmPassword = ref(false)
const errors = ref({})
const errorMessage = ref('')
const successMessage = ref('')

onMounted(() => {
  // If already logged in, redirect to home
  if (authStore.isAuthenticated) {
    router.push({ name: 'home' })
  }
})

async function handleRegister() {
  loading.value = true
  errors.value = {}
  errorMessage.value = ''
  successMessage.value = ''

  try {
    await authStore.register({
      name: form.name,
      email: form.email,
      password: form.password,
      password_confirmation: form.password_confirmation,
      terms: form.terms
    })

    successMessage.value = 'Account created successfully! Redirecting to home...'

    // Redirect to home after a short delay
    setTimeout(() => {
      router.push({ name: 'home' })
    }, 1500)
  } catch (error) {
    if (error.response?.status === 422) {
      // Validation errors
      errors.value = error.response.data.errors || {}
      errorMessage.value = error.response.data.message || 'Please fix the errors below.'
    } else {
      errorMessage.value = error.response?.data?.message || 'Registration failed. Please try again.'
    }
  } finally {
    loading.value = false
  }
}
</script>

<style scoped>
.register {
  min-height: 60vh;
  display: flex;
  align-items: center;
  padding: 2rem 0;
}

.card {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border: none;
}

.card-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border-bottom: none;
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

.alert-success {
  border-left-color: #198754;
}

.form-text {
  font-size: 0.875rem;
  color: #6c757d;
}
</style>