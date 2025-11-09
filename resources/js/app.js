import './bootstrap';
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import router from './router';
import App from './App.vue';

// Create Vue app
const app = createApp(App);

// Use plugins
app.use(createPinia());
app.use(router);

// Mount the app
app.mount('#app');
