const { createApp } = Vue;

  createApp({
    data() {
      return {
        // array in cui pushare i dati del file.json
        dischi: []
      }
    },
    // chiamata alla Api per leggere dati e passarli all'array dischi
    methods: {
      getDischi () {
        axios.get('server.php').then(data => {
          console.log(data);
          this.dischi = data.data;
        })
      }
    },
    // in created richiamo la funzione così arrivando sull'app ho la lista albums
    created() {
      this.getDischi();
    }
  }).mount('#app');