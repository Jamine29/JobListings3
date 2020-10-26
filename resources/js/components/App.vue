<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <ul class="navbar-nav">
                    <router-link :to="{ name: 'example' }" class="nav-link">Example</router-link>
                </ul>
            </div>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
export default {}
</script>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
