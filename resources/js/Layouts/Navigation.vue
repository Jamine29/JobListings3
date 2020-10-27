<template>
    <nav class="bg-gray-700 border-b border-gray-100 fixed top-0 left-0 right-0">
        <div class="container">
            <ul class="navbar-nav">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-12">
                        <div class="flex">
                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <router-link :to="{ name: 'jobs' }" class="nav-link">Jobs</router-link>
                                <!--
                                <jet-nav-link v-if="$page.user !== null" :href="route('dashboard')" :active="$page.currentRouteName == 'dashboard'" class="border-b-t-width text-base">
                                    Dashboard
                                </jet-nav-link>
                                <jet-nav-link :href="route('jobs.index')" :active="$page.currentRouteName.includes('jobs')" class="border-b-t-width text-base">
                                    Jobs
                                </jet-nav-link>
                                <jet-nav-link :href="route('companies.index')" :active="$page.currentRouteName.includes('companies')" class="border-b-t-width text-base">
                                    Companies
                                </jet-nav-link>
                                -->
                            </div>
                        </div>

                        <!--
                        <div v-if="$page.user === null" class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <jet-nav-link v-if="$page.user === null" :href="route('login')" class="border-b-t-width text-base">
                                Login
                            </jet-nav-link>
                            <jet-nav-link v-if="$page.user === null" :href="route('register')" class="border-b-t-width margin-l-width-32 text-color-highlighted text-base">
                                Sign Up
                            </jet-nav-link>
                        </div>
                        -->
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</template>
