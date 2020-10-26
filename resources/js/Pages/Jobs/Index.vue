<template>
    <div>
        <div v-for="job in jobs" class="border-blue-200 border-4 rounded-xl p-6 overflow-hidden mb-6">
            <p>Job {{ job }}</p>
            <div>
                <h5 class="block mt-1 mb-2 text-lg leading-tight font-semibold text-xl mb-2 text-gray-800 hover:underline">
                    {{ job.title }}
                </h5>
                <p class="text-gray-700 text-base mb-1">Description: {{job.description}}</p>
                <p class="text-gray-700 text-base mb-6">Update at: {{job.updated_at}}</p>
            </div>
        </div>
        <a :href=links.last>Last Link</a>
        <button v-on:click="fetchJobs(links.last)">Last Page</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                jobs: [],
                links: {}
            }
        },
        created() {
            this.fetchJobs('http://localhost/api/jobs');
        },
        mounted() {
            console.log('Jobs Index Component mounted');
        },
        methods: {
            fetchJobs(uri) {
                console.log('hier');
                console.log(uri);
                this.axios.get(uri)
                .then((response) => {
                    console.log('respones');
                    console.log(response.data.data);
                    this.jobs = response.data.data;
                    this.links = response.data.links;
                })
                .catch((error) => {
                    console.log('Error');
                    console.log(error);
                })
            }
        }
    }
</script>
