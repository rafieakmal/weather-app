<template>
  <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-shrink py-3" style="background-color: #9966ff;">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center text-light fw-bold" href="/">
                        GeoEnvironment
                    </a>
                    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav mx-auto" style="font-size: 14px;margin-top: 3px;">
                            <li class="nav-item">
                                <router-link
                                    class="nav-link text-light"
                                    :to="{name: 'home'}" >
                                    Home
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link text-light"
                                    :to="{name: 'gempa'}" >
                                    Gempa
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
</template>

<script>
    export default {
        name: 'navbar',
    }
</script>

