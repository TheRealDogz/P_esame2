<template>
  <div class="p-10">
      <div class="flex flex-col mb-5 p-5 flex bg-blue-300 " v-for="job in jobs" :key="job.id">
          <p>{{job.azienda}}</p>
          <p>{{job.descrizione}}</p>
          <p>{{job.esperienza}}</p>
          <p>{{job.linguaggio}}</p>
          <p>{{job.ral}}</p>
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
