const { createApp } = Vue;

  createApp({
    data() {
      return {
        // array in cui pushare i dati del file.json
        dischi: [],
        discoCorrente: null,
        overlayDisco: false,
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
        axios
        .get('server.php', {
          params: { index }
        })
        .then(response => {
          this.discoCorrente = response.data;
          this.overlayDisco = true;
        });
      },
      nascondiOverlay() {
        this.overlayDisco = false;
        this.discoCorrente = null;
      }
    },
    // creo l'area dischi nella fase di vita di creazione
    created() {
      this.getDischi();
    }
  }).mount('#app');