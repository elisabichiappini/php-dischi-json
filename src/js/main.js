const { createApp } = Vue;

  createApp({
    data() {
      return {
        dischi: [
          {
            "poster":"https:\/\/pbs.twimg.com\/media\/EJXUzRJWsAE3GGl?format=jpg&name=medium",
            "titleCd":"Essentials",
            "author":"Billie Ellish",
            "year":"2020"
          },
          {
            "poster":"https:\/\/www.newsic.it\/wp-content\/uploads\/2022\/02\/rosalia-album-2022.jpg",
            "titleCd":"Motomami",
            "author":"Rosalia",
            "year":"2018"
          },
          {
            "poster":"https:\/\/m.media-amazon.com\/images\/I\/61ooG1rHdtL._AC_SL1500_.jpg",
            "titleCd":"Corochinato",
            "author":"ex-otago",
            "year":"2019"
          }
        ]
      }
    }
  }).mount('#app');