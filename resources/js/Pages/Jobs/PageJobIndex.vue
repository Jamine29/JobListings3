<template>
    <div>
        <div v-for="job in jobs" class="border-blue-200 border-4 rounded-xl p-6 overflow-hidden mb-6">
            <div>
                <h5 v-html=job.title class="block mt-1 mb-2 text-lg leading-tight font-semibold text-xl mb-2 text-gray-800 hover:underline"></h5>
                <h4>Description:</h4>
                <p v-html=job.description class="text-gray-700 text-base mb-1"></p>
                <h4>Update at:</h4>
                <p v-html="$options.filters.dateFormat(job.updated_at)" class="text-gray-700 text-base mb-6"></p>
            </div>
        </div>
        <div>
            <div v-for="link in links" style="display:inline-block">
                <button v-if="link.url !== null" v-html=link.label v-on:click="fetchJobs(link.label)" style="margin: 20px">Last Page</button>
                <button v-else v-html=link.label v-on:click="fetchJobs(link.label)" disabled=true style="margin: 20px"></button>
            </div>
        </div>
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
        },
        methods: {
            async fetchJobs(pageNumber) {
                if(pageNumber === 'Next &raquo;') {
                    pageNumber = this.current_page + 1;
                }
                else if(pageNumber === '&laquo; Previous') {
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
