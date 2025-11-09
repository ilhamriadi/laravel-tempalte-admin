<!-- Vue Navigation Component -->
<nav id="app-navigation"></nav>

<!-- Fallback navigation for when Vue is not loaded -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="fallback-nav" style="display: none;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-comments me-2"></i>
            Forum Community
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home me-1"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forums">
                        <i class="fas fa-th-large me-1"></i>
                        Forums
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/groups">
                        <i class="fas fa-users me-1"></i>
                        Groups
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/search">
                        <i class="fas fa-search me-1"></i>
                        Search
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login">
                        <i class="fas fa-sign-in-alt me-1"></i>
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        <i class="fas fa-user-plus me-1"></i>
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Show fallback navigation if Vue app doesn't load within 2 seconds
    setTimeout(() => {
        const vueNav = document.getElementById('app-navigation');
        const fallbackNav = document.getElementById('fallback-nav');

        if (vueNav && vueNav.children.length === 0) {
            fallbackNav.style.display = 'block';
        }
    }, 2000);
</script>