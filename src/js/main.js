const { createApp } = Vue;

  createApp({
    data() {
      return {
        // array in cui pushare i dati del file.json
        dischi: [],
      }
    },
    // chiamata alla Api per leggere dati e passarli all'array dischi
    methods: {
      getDischi() {
        axios
        .get('server.php')
        .then(response => {
          this.dischi = response.data;
        });
      },
      showDisco(index) {
        console.log(index);
      }
    },
    // creo l'area dischi nella fase di vita di creazione
    created() {
      this.getDischi();
    }
  }).mount('#app');