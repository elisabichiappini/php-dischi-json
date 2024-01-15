<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!--File css-->
    <link href="src/css/style.css" rel="stylesheet">
    <!--/File css-->
</head>
<body class="bg-dark text-white">
    <!--vue workarea-->
    <div id="app" v-cloak class="p-3">
        <!--disco selezionato-->
        <div v-if="discoCorrente">
            <!--layout disco singolo-->
            <div id="discoDetails" class="d-flex justify-center align-center flex-column">
                <img :src="discoCorrente.poster" :alt="discoCorrente.author" class="ec-disco">
                <h4 class="mt-2">{{ discoCorrente.titleCd }}</h4>
                <h5>{{ discoCorrente.author }}</h5>
                <h6> {{ discoCorrente.year }}</h6>
            </div>
            <!--/layout disco singolo-->
        </div>
        <!--/disco selezionato-->
        <!--dischi lista-->
        <div v-else>
            <!--layout lista dischi-->
            <h1 class="text-center p-3">Playlist</h1>
            <ul class="list-albums d-flex flex-wrap gap-2 text-center">
                <li v-for="(disco, index) in dischi" class="album no-grow" @click="showDisco(index)">
                    <img :src="disco.poster" :alt="disco.author" class="img-fluid">
                    <h5>{{ disco.author }}</h5>
                </li>
            </ul>
            <!--/layout lista dischi-->
        </div>
        <!--/dischi lista-->
    </div>
    <!--CDN Vuejs-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--/CDN Vuejs-->
    <!--CDN axios js-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--/CDN axios js-->
    <!--File js-->
    <script src="src/js/main.js"></script>
    <!--/File js-->
</body>
</html>
