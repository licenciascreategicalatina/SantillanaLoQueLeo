<template>
    <div>
        <div class="container-fluid main-view">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-one">
                        <!-- STAR: posición de los libros -->
                        <div>
                        <div class="class-position" id="book-1"
                            @click="clickShowViewInfoBook( slides[0] )"
                            @mouseover="slides[0].eventHover = true"
                            @mouseleave="slides[0].eventHover = false">
                            <div v-if="slides[0].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[0].src" :alt="slides[0].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-2"
                            @click="clickShowViewInfoBook( slides[1] )"
                            @mouseover="slides[1].eventHover = true"
                            @mouseleave="slides[1].eventHover = false">
                            <div v-if="slides[1].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[1].src" :alt="slides[1].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-3"
                            @click="clickShowViewInfoBook( slides[2] )"
                            @mouseover="slides[2].eventHover = true"
                            @mouseleave="slides[2].eventHover = false">
                            <div v-if="slides[2].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[2].src" :alt="slides[2].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-4"
                            @click="clickShowViewInfoBook( slides[3] )"
                            @mouseover="slides[3].eventHover = true"
                            @mouseleave="slides[3].eventHover = false">
                            <div v-if="slides[3].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[3].src" :alt="slides[3].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-5"
                            @click="clickShowViewInfoBook( slides[4] )"
                            @mouseover="slides[4].eventHover = true"
                            @mouseleave="slides[4].eventHover = false">
                            <div v-if="slides[4].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[4].src" :alt="slides[4].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-6"
                            @click="clickShowViewInfoBook( slides[5] )"
                            @mouseover="slides[5].eventHover = true"
                            @mouseleave="slides[5].eventHover = false">
                            <div v-if="slides[5].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[5].src" :alt="slides[5].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-7"
                            @click="clickShowViewInfoBook( slides[6] )"
                            @mouseover="slides[6].eventHover = true"
                            @mouseleave="slides[6].eventHover = false">
                            <div v-if="slides[6].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[6].src" :alt="slides[6].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-8"
                            @click="clickShowViewInfoBook( slides[7] )"
                            @mouseover="slides[7].eventHover = true"
                            @mouseleave="slides[7].eventHover = false">
                            <div v-if="slides[7].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[7].src" :alt="slides[7].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-9"
                            @click="clickShowViewInfoBook( slides[8] )"
                            @mouseover="slides[8].eventHover = true"
                            @mouseleave="slides[8].eventHover = false">
                            <div v-if="slides[8].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[8].src" :alt="slides[8].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-10"
                            @click="clickShowViewInfoBook( slides[9] )"
                            @mouseover="slides[9].eventHover = true"
                            @mouseleave="slides[9].eventHover = false">
                            <div v-if="slides[9].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[9].src" :alt="slides[9].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-11"
                            @click="clickShowViewInfoBook( slides[10] )"
                            @mouseover="slides[10].eventHover = true"
                            @mouseleave="slides[10].eventHover = false">
                            <div v-if="slides[10].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[10].src" :alt="slides[10].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-12"
                            @click="clickShowViewInfoBook( slides[11] )"
                            @mouseover="slides[11].eventHover = true"
                            @mouseleave="slides[11].eventHover = false">
                            <div v-if="slides[11].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[11].src" :alt="slides[11].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-13"
                            @click="clickShowViewInfoBook( slides[12] )"
                            @mouseover="slides[12].eventHover = true"
                            @mouseleave="slides[12].eventHover = false">
                            <div v-if="slides[12].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[12].src" :alt="slides[12].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-14"
                            @click="clickShowViewInfoBook( slides[13] )"
                            @mouseover="slides[13].eventHover = true"
                            @mouseleave="slides[13].eventHover = false">
                            <div v-if="slides[13].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[13].src" :alt="slides[13].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-15"
                            @click="clickShowViewInfoBook( slides[14] )"
                            @mouseover="slides[14].eventHover = true"
                            @mouseleave="slides[14].eventHover = false">
                            <div v-if="slides[14].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="slides[14].src" :alt="slides[14].alt">
                            </div>
                        </div>
                        </div>
                        <!-- END: posición de los libros -->

                        <div class="vertical-center" :class="{'height-iframe-book' : heightIframeBook}">
                            <!-- STAR: modal información del libro -->
                            <div v-if="active" id="content-info-book">
                                <div @click="closeViewInfoBook"  class="header-info-book">
                                    <svg id="icon-info-book" xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>

                                <div id="body-info-book" class="row">
                                    <div class="col-5 text-center">
                                        <img id="img-info-book"
                                            @click="eventShowIframeBook( bookSelect )"
                                            :src="bookSelect.imgCaratula" :alt="bookSelect.alt">
                                    </div>
                                    <div class="col-7">
                                        <h3>{{ bookSelect.title }}</h3>
                                        <p>Año xx/xx/xxxx</p>
                                        <p>{{ bookSelect.description }}</p>
                                        <div class="text-right">
                                            <button id="btn-info-book"
                                                @click="eventShowIframeBook( bookSelect )"
                                                type="button"
                                                class="btn btn-primary btn-sm">
                                                PDF
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: modal información del libro -->

                            <div id="image-gif" v-if="imgGif"
                                class="animate__animated animate__zoomIn animate__slower">
                                <img src="/image/book-image.gif" alt="image gif">
                            </div>

                            <div v-if="openPDF" @click="closeIframeBook" id="close-pdf-read"
                                class="">
                                <span class="close-pdf">X</span>
                            </div>
                            <div v-if="openPDF" @click="closeIframeBook" id="pdf-read"
                                class="">
                                <!-- <iframe :src="urlBook + '#toolbar=0'" sin opciones -->
                                <embed :src="urlBook"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%" />
                                <!-- <iframe :src="urlBook"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%" /> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-two">
                        <div class="vertical-center">

                            <div id="content-agenda-book">
                                <vs-button @click="agendaBook=!agendaBook">
                                    Agenda del dia
                                </vs-button>
                            </div>

                            <vs-dialog width="550px" not-center v-model="agendaBook">
                                <div id="content-dialog-book" class="con-content" >
                                    <h3 class="text-center color-white font-weight-bold">Programa</h3>
                                    <p class="text-center">
                                        <img src="/image/img-dialog.png" alt="img dialog">
                                    </p>
                                    <div class="row">
                                        <div class="col-4 text-center color-white">
                                            <h4>3:30</h4>
                                            <span>Bienvenida</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4>4:30</h4>
                                            <span>Conferencia magistral <br>Julieta Pinasco</span>
                                        </div>
                                        <div class="col-4 text-center color-white">
                                            <h4>6:45</h4>
                                            <span>Taller <br>Raquel Cuperman</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 text-center">
                                            <h4>3:35</h4>
                                            <span>Cata de libros</span>
                                        </div>
                                        <div class="col-4 text-center color-white">
                                            <h4>5:15</h4>
                                            <span>Taller <br>Alejandra Jaramillo</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4>7:30</h4>
                                            <span>Cierre</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 text-center color-white">
                                            <h4>4:15</h4>
                                            <span>¿Qué pasó en la cata? <br>Los profesores lo cuentan</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4>6:00</h4>
                                            <span>Conferencia magistral <br>Eduardo Escallón</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h4>7:30</h4>
                                            <span>Cierre</span>
                                        </div>
                                    </div>
                                </div>
                            </vs-dialog>

                            <div class="card animate__animated animate__slideInRight animate__slower">
                                <div class="view-body">
                                    <iframe id="iframe-video" width=""
                                        height=""
                                        :src="urlTransmision"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';
    import '@splidejs/splide/dist/css/themes/splide-default.min.css';

    export default {
        components: {
            Splide,
            SplideSlide,
        },
        data() {
            return {
                //urlTransmision: "https://www.youtube.com/embed/oCJQD93dTC4",
                urlTransmision: "https://www.youtube.com/embed/nRxMQTjl8Uc",
                urlBook: "",
                openPDF: false,
                imgGif: false,
                hover: false,
                active: false,
                heightIframeBook: false,
                agendaBook: false,
                options: {
                    rewind      : true,
                    perPage     : 3,
                    perMove     : 1,
                    gap         : '1rem',
                    //autoplay    : true,
                    //pauseOnHover: true,
                    arrows      : 'slider',
                },
                slides: [],
                bookSelect: null,
            }
        },
        methods: {
            clickShowViewInfoBook( book ) {
                this.active = true
                this.bookSelect = book;
            },
            closeViewInfoBook() {
                this.active = false
            },
            eventShowIframeBook( book ) {
                this.active = false
                this.heightIframeBook = true
                this.imgGif = true;
                this.urlBook = book.url;

                setTimeout( () => {
                    this.openPDF = !this.openPDF;
                    this.imgGif = false;
                }, 2000);
            },
            closeIframeBook() {
                this.openPDF = !this.openPDF;
                this.heightIframeBook = false
            },

        },
        created() {
            /* Lista de libros */
            this.slides = [
                {
                    id: 1,
                    title: 'Perro callejero',
                    description: 'Vivía en la calle, a base de zarpazos y dentelladas. La gente decía: “Es un perro malo”.',
                    alt: 'Perro callejero',
                    url: '/book/diados/INT PERRO CALLEJERO_iniciales.pdf',
                    src:"/image/imgbooks/diados/perro-callejero.jpg",
                    imgCaratula:"/image/imgbooks/diados/perro-callejero.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'Uno está bien, pero dos mejor',
                    description: 'Uno está bien, pero dos mejor. LouismSlobodkin',
                    alt: 'Uno está bien',
                    url: '/book/UNO interior_ESP.pdf',
                    src:"/image/imgbooks/diauno/uno-esta-bein.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/uno-esta-bien.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'Nomi y sus queridos animales',
                    description: 'Nomi quería un tigre, Nomi quería un oso, Nomi quería un león con aspecto cariñoso.',
                    alt: 'Nomi y sus queridos animales',
                    url: '/book/Nomi interior.pdf',
                    src:"public/image/imgbooks/diados/cuentos-de-tomas.jpg",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/nomi.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                    title: 'Los matices de matisse',
                    description: 'Si fueras un niño llamado Henri Matisse y vivieras en un pueblo triste en el norte de Francia, donde los cielos estuvieran grises.',
                    alt: 'Los matices de matisse',
                    url: '/book/PAGES Los matices de Matisse_OK.pdf',
                    src:"/image/imgbooks/diauno/los-matices.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/matisse.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'Perro callejero',
                    description: 'Vivía en la calle, a base de zarpazos y dentelladas. La gente decía: “Es un perro malo”.',
                    alt: 'Perro callejero',
                    url: '/book/diados/INT PERRO CALLEJERO_iniciales.pdf',
                    src:"/image/imgbooks/diados/perro-callejero.jpg",
                    imgCaratula:"/image/imgbooks/diados/perro-callejero.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'Uno está bien, pero dos mejor',
                    description: 'Uno está bien, pero dos mejor. LouismSlobodkin',
                    alt: 'Uno está bien',
                    url: '/book/UNO interior_ESP.pdf',
                    src:"/image/imgbooks/diauno/uno-esta-bein.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/uno-esta-bien.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: 'Nomi y sus queridos animales',
                    description: 'Nomi quería un tigre, Nomi quería un oso, Nomi quería un león con aspecto cariñoso.',
                    alt: 'Nomi y sus queridos animales',
                    url: '/book/Nomi interior.pdf',
                    src:"/image/imgbooks/diauno/nomi-y-sus-queridos.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/nomi.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'Los matices de matisse',
                    description: 'Si fueras un niño llamado Henri Matisse y vivieras en un pueblo triste en el norte de Francia, donde los cielos estuvieran grises.',
                    alt: 'Los matices de matisse',
                    url: '/book/PAGES Los matices de Matisse_OK.pdf',
                    src:"/image/imgbooks/diauno/los-matices.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/matisse.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'Perro callejero',
                    description: 'Vivía en la calle, a base de zarpazos y dentelladas. La gente decía: “Es un perro malo”.',
                    alt: 'Perro callejero',
                    url: '/book/diados/INT PERRO CALLEJERO_iniciales.pdf',
                    src:"/image/imgbooks/diados/perro-callejero.jpg",
                    imgCaratula:"/image/imgbooks/diados/perro-callejero.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'Uno está bien, pero dos mejor',
                    description: 'Uno está bien, pero dos mejor. LouismSlobodkin',
                    alt: 'Uno está bien',
                    url: '/book/UNO interior_ESP.pdf',
                    src:"/image/imgbooks/diauno/uno-esta-bein.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/uno-esta-bien.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'Nomi y sus queridos animales',
                    description: 'Nomi quería un tigre, Nomi quería un oso, Nomi quería un león con aspecto cariñoso.',
                    alt: 'Nomi y sus queridos animales',
                    url: '/book/Nomi interior.pdf',
                    src:"/image/imgbooks/diauno/nomi-y-sus-queridos.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/nomi.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'marcial y la venganza de los lagartillos',
                    description: 'Todo comenzó por un error de Marcial. Lo cometió por travieso, porque se aburría mucho en casa, donde lo cuidaba su abuela Pancracia.',
                    alt: 'marcial y la venganza de los lagartillos',
                    url: '/book/diados/Marcial y la venganza de los lagartijos-Iniciales.pdf',
                    src:"/image/imgbooks/diados/marcial-y-la-venganza-de-los-lagartijos.jpg",
                    imgCaratula: "/image/imgbooks/diados/marcial-y-la-venganza-de-los-lagartijos.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'El corazón del árbol',
                    description: '¿qué sucede cuando una poeta y un artista plástico se encuentran en las páginas de un libro? ¿Sucederá algo parecido a lo que ocurre en nuestra mente cuando leemos un poema y empezamos a darle forma y color a las palabras?',
                    alt: 'El corazón del árbol',
                    url: 'public/book/diados/Corazón del arbol_PAGES.pdf',
                    src:"/image/imgbooks/diados/corazon-del-arbol.jpg",
                    imgCaratula:"/image/imgbooks/diados/corazon-del-arbol.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'Uno está bien, pero dos mejor',
                    description: 'Uno está bien, pero dos mejor. LouismSlobodkin',
                    alt: 'Uno está bien',
                    url: '/book/UNO interior_ESP.pdf',
                    src:"/image/imgbooks/diauno/uno-esta-bein.png",
                    imgCaratula: "/image/imgbooks/diauno/caratulas/uno-esta-bien.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'Cuentos de Tomás',
                    description: 'El niño estaba frente a un cuarto pequeño. No había visto bien y se acercó a la ventana. Daba sobre un patio interior.',
                    alt: 'Cuentos de Tomás',
                    url: '/book/diados/Cuentos de Tomas-Iniciales.pdf',
                    src:"/image/imgbooks/diados/cuentos-de-tomas.jpg",
                    imgCaratula: "/image/imgbooks/diados/cuentos-de-tomas.jpg",
                    eventHover: false,
                }
            ]
        }
    }
</script>

<style scoped lang="scss">

    .main-view {
        background-image: url("/image/background-day-two.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
    }


    /* Style content first iframe */
    .view-iframe-one {
        position: relative;
        min-height: 100vh;
        z-index: 99;
    }

    .height-iframe-book {
        height: 70%;
    }

    /* STAR: estilos para libros */
    .class-position {
        position: absolute;
        //border: 1px solid red;
    }

    div#book-1 {
        top: 19.5%;
        left: 4.6%;
        height: 8.5%;
        width: 8.5%;
    }
    div#book-2 {
        top: 28.6%;
        left: 4.6%;
        height: 11.3%;
        width: 9%;
    }
    div#book-3 {
        top: 17%;
        left: 46%;
        height: 8.5%;
        width: 6.6%;
    }
    div#book-4 {
        top: 25.7%;
        left: 46%;
        height: 8%;
        width: 6.6%;
    }
    div#book-5 {
        top: 34.5%;
        left: 46%;
        height: 8.5%;
        width: 6.6%;
    }
    div#book-6 {
        top: 45%;
        left: 9.3%;
        height: 11%;
        width: 7.9%;
    }
    div#book-7 {
        top: 45.3%;
        left: 20.2%;
        height: 10.2%;
        width: 7.8%;
    }
    div#book-8 {
        top: 47%;
        left: 31.2%;
        height: 8.4%;
        width: 7%;
    }
    div#book-9 {
        top: 47.5%;
        left: 40.6%;
        height: 8%;
        width: 6.6%;
    }
    div#book-10 {
        top: 47%;
        left: 49.4%;
        height: 8.4%;
        width: 6.5%;
    }
    div#book-11 {
        top: 59.4%;
        left: 41.3%;
        height: 11.5%;
        width: 8.5%;
    }
    div#book-12 {
        top: 59.4%;
        left: 55%;
        height: 11%;
        width: 8.5%;
    }
    div#book-13 {
        top: 59%;
        left: 69.6%;
        height: 11.7%;
        width: 8.5%;
    }
    div#book-14 {
        top: 63.5%;
        left: 47.5%;
        height: 11.5%;
        width: 8.5%;
    }
    div#book-15 {
        top: 62.6%;
        left: 62.3%;
        height: 11.5%;
        width: 8.5%;
    }
    /* END: estilos para libros */

    .content-img-hover-book {
        margin: -1rem;
    }
    .img-hover-book {
        width: 5rem;
    }

    div#content-info-book {
        background: #EBEBEB;
        margin: 0 6%;
    }
    .header-info-book {
        background: #7B592F;
        height: 2.2rem;
        text-align: right;
        cursor: pointer;
    }
    #icon-info-book {
        margin: 0.47rem;
        color: #fff;
    }
    #body-info-book {
        margin: 0;
        padding: 1rem;
    }
    img#img-info-book {
        width: 100%;
        margin: 20% 0 5% 0;
        cursor: pointer;
    }
    #btn-info-book {
        padding: 0.25rem 1rem;
        background: #9E7441;
        border-color: #9E7441;
    }


    /* style for books */
    .style-select-book {
        position: absolute;
        background: transparent;
        cursor: pointer;
    }
    .style-select-book:hover {
        background: #ff00003d;
    }

    /* Read PDF */
    #close-pdf-read {
        position: absolute;
        background: rgb(0 0 0 / 46%);
        top: -40px;
        right: 0;
        padding: 0.2rem 1rem;
        cursor: pointer;
    }
    .close-pdf {
        color: #fff;
        font-size: 2rem;
    }
    #pdf-read {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 15px;
    }
    div#close-pdf-read:hover {
        background: #90080861;
    }

    #image-gif {
        position: absolute;
        top: 40%;
        left: 25%;
    }


    /* Estilos compartidos */
    .vertical-center {
        margin: 0;
        padding: 1rem;
        width: 100%;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }


    /* Style content second iframe */
    .view-iframe-two {
        position: relative;
        min-height: 100vh;
        z-index: 99;
    }
    .view-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 0.5rem !important;
    }
    #iframe-video {
        width: 100%;
        height: 22rem;
    }
    div#content-agenda-book {
        margin: 0 0 0 75%;
    }
    div#content-agenda-book button {
        background: #9f793d;
    }
    #content-dialog-book {
        background: #b1935e;
        margin-top: 1rem;
        border-radius: 1rem;
        padding: 0.6rem 0;
    }
    .color-white {
        color: #fff;
    }


    /* Styles responsive */
    @media (min-width: 30px) and (max-width: 991.98px) {

        .vs-card__img img {
            height: 180px;
        }

        /* Style content first iframe */
        .view-iframe-one {
            min-height: 60vh;
            contain: content;
        }
        .card-body-text {
            padding: 0.8rem;
        }
        .text-title {
            font-size: 1.5rem;
        }
        .text-subtitle {
            font-size: 0.8rem;
            margin: 1rem 0;
        }

        /* Read PDF */
        #close-pdf-read {
            top: 0px;
        }
        .close-pdf {
            font-size: 1rem;
        }
        #pdf-read {
            top: 30px;
        }


        /* Estilos compartidos */
        .vertical-center {
            padding: 0;
        }


        /* Style content second iframe */
        .view-iframe-two {
            min-height: 40vh;
            contain: content;
        }
        #iframe-video {
            height: 13rem;
        }
    }

    /* Styles for large screens  */
    @media (min-width: 1400px) {
        .main-card .vs-card__img {
            max-height: 350px !important;
        }
    }
</style>
