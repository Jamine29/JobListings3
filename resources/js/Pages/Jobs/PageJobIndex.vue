<template>
    <div>
        <div v-for="job in jobs" class="border-blue-200 border-4 rounded-xl p-6 overflow-hidden mb-6">
            <div>
                <h5 class="block mt-1 mb-2 text-lg leading-tight font-semibold text-xl mb-2 text-gray-800 hover:underline">{{job.title}}</h5>
                <h4>{{ $t('description') }}</h4>
                <p v-html="job.description" class="text-gray-700 text-base mb-1"></p>
                <h4>{{ $t('updated_at') }}</h4>
                <!-- <p class="text-gray-700 text-base mb-6">{{ $options.filters.dateFormat(job.updated_at) }}</p>-->
                <p class="text-gray-700 text-base mb-6">{{ job.updated_at | dateFormat }}</p>
            </div>
        </div>
        <div>
            <div v-for="link in links" style="display:inline-block">
                <!--
                <button v-if="link.url !== null" v-html=link.label v-on:click="fetchJobs(link.label)" style="margin: 20px">Last Page</button>
                <button v-else v-html=link.label v-on:click="fetchJobs(link.label)" disabled=true style="margin: 20px"></button>
                -->
                <button v-if="link.url !== null" v-html=link.label @click="fetchJobs(link.label)" style="margin: 20px">Last Page</button>
                <button v-else @click="fetchJobs(link.label)" disabled=true style="margin: 20px">{{ link.label }}</button>
            </div>
        </div>
        <router-link :to="{ name: 'jobs.show'}">Zu Show</router-link>
    </div>
</template>

<script>
    import Job from '../../Models/Job.js';

    export default {
        data() {
            return {
                jobs: [],
                links: {},
                current_page: 0
            }
        },
        async created() {
            let response = await Job.get();
            this.jobs = response.data;
            this.links = response.links;
            this.current_page = response.current_page;
        },
        mounted() {
            console.log('PageJobIndex Monnted');
        },
        methods: {
            async fetchJobs(pageNumber) {
                if(pageNumber === 'Next') {
                    pageNumber = this.current_page + 1;
                }
                else if(pageNumber === 'Previous') {
                    pageNumber = this.current_page - 1;
                }

                let response = await Job.page(pageNumber).get();
                this.jobs = response.data;
                this.links = response.links;
                this.current_page = response.current_page;
            }
        }
    }
</script>
