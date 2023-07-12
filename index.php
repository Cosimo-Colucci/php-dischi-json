<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP discs jason</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div id="app">
            <header class="container-fluid py-2">
                <div class="main-logo">
                    <img class="ms-5" src="./img/spotify.png" alt="spotify_image">
                </div>
            </header>
            <main class="container">
                <div class="row">
                    <div class="col-12">
                        <article class="disc text-center" v-for="(disc, index) in discs" :key="index">
                            <img :src="disc.poster" alt="'disc.title'">
                            <div class="disc-description">
                                <p>
                                    <strong>
                                    {{disc.title}}
                                    </strong>
                                </p>
                                <p>
                                    {{disc.author}}
                                </p>
                                <p>
                                    <strong>
                                    {{disc.year}}
                                    </strong>
                                </p>
                            </div>
                            
                        </article>
                    </div>
                </div>
            </main>
        </div>

        <script src="./script/main.js"></script>
    </body>
</html>