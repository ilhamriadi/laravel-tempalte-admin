@extends('layouts.forum')

@section('content')
<!-- Vue App Mount Point -->
<div id="app"></div>

<!-- Loading screen while Vue app loads -->
<div id="loading-screen" class="d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="text-center">
        <div class="spinner-border text-primary mb-3" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h4>Loading Forum Community...</h4>
        <p class="text-muted">Please wait while we set up your experience.</p>
    </div>
</div>

<script>
    // Hide loading screen when Vue app is ready
    window.addEventListener('load', function() {
        setTimeout(() => {
            const loadingScreen = document.getElementById('loading-screen');
            const vueApp = document.getElementById('app');

            if (loadingScreen && vueApp) {
                loadingScreen.style.display = 'none';
                vueApp.style.display = 'block';
            }
        }, 1000);
    });
</script>

<style>
    #app {
        display: none;
    }

    #loading-screen {
        min-height: 60vh;
    }

    .spinner-border {
        animation: spinner-border 0.75s linear infinite;
    }

    @keyframes spinner-border {
        0% {
            border-color: #0d6efd;
            border-right-color: transparent;
        }
        100% {
            border-color: transparent;
            border-left-color: #0d6efd;
        }
    }
</style>
@endsection