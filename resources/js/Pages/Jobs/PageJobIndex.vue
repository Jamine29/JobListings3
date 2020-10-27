<template>
    <div>
        <div v-for="job in jobs" class="border-blue-200 border-4 rounded-xl p-6 overflow-hidden mb-6">
            <div>
                <h5 v-html=job.title class="block mt-1 mb-2 text-lg leading-tight font-semibold text-xl mb-2 text-gray-800 hover:underline"></h5>
                <h4>Description:</h4>
                <p v-html=job.description class="text-gray-700 text-base mb-1"></p>
                <h4>Update at:</h4>
                <p class="text-gray-700 text-base mb-6">{{job.updated_at | dateFormat }}</p>
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
        },
        methods: {
            fetchJobs(uri) {
                this.axios.get(uri)
                .then((response) => {
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
