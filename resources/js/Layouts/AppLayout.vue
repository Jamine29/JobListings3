<template>
    <div>
        <Navigation />
        <main>
            <router-view></router-view>
        </main>
        <Footer />
    </div>
</template>

<script>
    import Navigation from './Navigation';
    import Footer from './Footer';

    export default {
        components: {
            Navigation,
            Footer
        },
        mounted() {
            console.log('AppLayout mounted.')
        }
    }
</script>
