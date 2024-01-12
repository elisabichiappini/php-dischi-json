const { createApp } = Vue;

  createApp({
    data() {
      return {
        dischi: []
      }
    },
    methods: {
      getDischi () {
        axios.get('server.php').then(data => {
          console.log(data);
          this.dischi = data.data;
        })
      }
    },
    created() {
      this.getDischi();
    }
  }).mount('#app');