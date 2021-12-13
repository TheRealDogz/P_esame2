<template>
  <div class="p-10">
      <div class="mb-5 p-5 flex bg-blue-300" v-for="job in jobs" :key="job.id">
          {{job}}
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Home',

    data(){
      return{    
          jobs: [],
      }
    },

    async mounted(){
      this.jobs = (await axios.get('http://127.0.0.1:8000/api/jobs')).data
    },
    methods: {
        async addJob(){
            await axios.post("http://localhost:8000/api/addjob", this.job)
            this.$router.push("/home")
        }
    }
}
</script>
