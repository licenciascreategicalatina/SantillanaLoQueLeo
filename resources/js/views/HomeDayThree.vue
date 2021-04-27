<template>
    <div>
        <div class="container-fluid main-view"
            :class="{'main-background-book' : changeBackground}">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-one">
                        <!-- BEGIN: posición de los libros -->
                        <div>
                        <div class="class-position" id="book-1"
                            @click="clickShowViewInfoBook( listBooks[0] )"
                            @mouseover="listBooks[0].eventHover = true"
                            @mouseleave="listBooks[0].eventHover = false">
                            <div v-if="listBooks[0].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[0].imgCaratula" :alt="listBooks[0].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-2"
                            @click="clickShowViewInfoBook( listBooks[1] )"
                            @mouseover="listBooks[1].eventHover = true"
                            @mouseleave="listBooks[1].eventHover = false">
                            <div v-if="listBooks[1].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[1].imgCaratula" :alt="listBooks[1].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-3"
                            @click="clickShowViewInfoBook( listBooks[2] )"
                            @mouseover="listBooks[2].eventHover = true"
                            @mouseleave="listBooks[2].eventHover = false">
                            <div v-if="listBooks[2].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[2].imgCaratula" :alt="listBooks[2].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-4"
                            @click="clickShowViewInfoBook( listBooks[3] )"
                            @mouseover="listBooks[3].eventHover = true"
                            @mouseleave="listBooks[3].eventHover = false">
                            <div v-if="listBooks[3].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[3].imgCaratula" :alt="listBooks[3].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-5"
                            @click="clickShowViewInfoBook( listBooks[4] )"
                            @mouseover="listBooks[4].eventHover = true"
                            @mouseleave="listBooks[4].eventHover = false">
                            <div v-if="listBooks[4].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[4].imgCaratula" :alt="listBooks[4].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-6"
                            @click="clickShowViewInfoBook( listBooks[5] )"
                            @mouseover="listBooks[5].eventHover = true"
                            @mouseleave="listBooks[5].eventHover = false">
                            <div v-if="listBooks[5].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[5].imgCaratula" :alt="listBooks[5].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-7"
                            @click="clickShowViewInfoBook( listBooks[6] )"
                            @mouseover="listBooks[6].eventHover = true"
                            @mouseleave="listBooks[6].eventHover = false">
                            <div v-if="listBooks[6].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[6].imgCaratula" :alt="listBooks[6].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-8"
                            @click="clickShowViewInfoBook( listBooks[7] )"
                            @mouseover="listBooks[7].eventHover = true"
                            @mouseleave="listBooks[7].eventHover = false">
                            <div v-if="listBooks[7].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[7].imgCaratula" :alt="listBooks[7].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-9"
                            @click="clickShowViewInfoBook( listBooks[8] )"
                            @mouseover="listBooks[8].eventHover = true"
                            @mouseleave="listBooks[8].eventHover = false">
                            <div v-if="listBooks[8].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[8].imgCaratula" :alt="listBooks[8].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-10"
                            @click="clickShowViewInfoBook( listBooks[9] )"
                            @mouseover="listBooks[9].eventHover = true"
                            @mouseleave="listBooks[9].eventHover = false">
                            <div v-if="listBooks[9].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[9].imgCaratula" :alt="listBooks[9].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-11"
                            @click="clickShowViewInfoBook( listBooks[10] )"
                            @mouseover="listBooks[10].eventHover = true"
                            @mouseleave="listBooks[10].eventHover = false">
                            <div v-if="listBooks[10].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[10].imgCaratula" :alt="listBooks[10].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-12"
                            @click="clickShowViewInfoBook( listBooks[11] )"
                            @mouseover="listBooks[11].eventHover = true"
                            @mouseleave="listBooks[11].eventHover = false">
                            <div v-if="listBooks[11].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[11].imgCaratula" :alt="listBooks[11].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-13"
                            @click="clickShowViewInfoBook( listBooks[12] )"
                            @mouseover="listBooks[12].eventHover = true"
                            @mouseleave="listBooks[12].eventHover = false">
                            <div v-if="listBooks[12].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[12].imgCaratula" :alt="listBooks[12].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-14"
                            @click="clickShowViewInfoBook( listBooks[13] )"
                            @mouseover="listBooks[13].eventHover = true"
                            @mouseleave="listBooks[13].eventHover = false">
                            <div v-if="listBooks[13].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[13].imgCaratula" :alt="listBooks[13].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-15"
                            @click="clickShowViewInfoBook( listBooks[14] )"
                            @mouseover="listBooks[14].eventHover = true"
                            @mouseleave="listBooks[14].eventHover = false">
                            <div v-if="listBooks[14].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[14].imgCaratula" :alt="listBooks[14].alt">
                            </div>
                        </div>
                        <div class="class-position" id="book-16"
                            @click="clickShowViewInfoBook( listBooks[15] )"
                            @mouseover="listBooks[15].eventHover = true"
                            @mouseleave="listBooks[15].eventHover = false">
                            <div v-if="listBooks[15].eventHover" class="content-img-hover-book">
                                <img class="img-hover-book" v-if="true" :src="listBooks[15].imgCaratula" :alt="listBooks[15].alt">
                            </div>
                        </div>
                        </div>
                        <!-- END: posición de los libros -->

                        <div class="vertical-center" :class="{'height-iframe-book' : heightIframeBook}">
                            <!-- BEGIN: modal información del libro -->
                            <div v-if="activeModal" id="content-info-book">
                                <div @click="closeViewInfoBook"  class="header-info-book">
                                    <svg id="icon-info-book" xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>

                                <div id="body-info-book" class="row">
                                    <div class="col-12 text-center">
                                        <img id="img-info-book"
                                            @click="eventShowIframeBook( bookSelect )"
                                            :src="bookSelect.imgCaratula" :alt="bookSelect.alt">
                                    </div>
                                    <div class="col-12 mt-4 mb-2">
                                        <h3 class="text-center">{{ bookSelect.title }}</h3>
                                        <p class="text-justify">{{ bookSelect.description }}</p>
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
                                <a id="pdf-download" href="/book/Lo que leo.pdf" download="programa">
                                    <div id="content-dialog-book" class="con-content" >
                                        <h3 class="text-center color-white font-weight-bold">
                                            Programa
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                                            </svg>
                                        </h3>
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
                                </a>
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
                activeModal: false,
                heightIframeBook: false,
                agendaBook: false,
                changeBackground: false,
                listBooks: [],
                bookSelect: null,
            }
        },
        methods: {
            clickShowViewInfoBook( book ) {
                this.activeModal = true
                this.bookSelect = book;
            },
            closeViewInfoBook() {
                this.activeModal = false
            },
            eventShowIframeBook( book ) {
                this.activeModal = false
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
            this.listBooks = [
                {
                    id: 1,
                    title: 'Temple Teyuna, el infierno verde',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Temple Teyuna, el infierno verde',
                    url: '/book/Jacobo y el planeta de los miedos.pdf',
                    imgCaratula:"/image/imgbooks/diatres/tapa-temple.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'El juego de la nieve',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'El juego de la nieve',
                    url: '/book/UNO interior_ESP.pdf',
                    imgCaratula: "/image/imgbooks/diatres/juego-de-la-nieve.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'Antología poética de la generación del 27',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Antología poética de la generación del 27',
                    url: '/book/Nomi interior.pdf',
                    imgCaratula: "/image/imgbooks/diatres/antologia-poetica.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                    title: 'El canto del manatí',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'El canto del manatí',
                    url: '/book/PAGES Los matices de Matisse_OK.pdf',
                    imgCaratula: "/image/imgbooks/diatres/canto-manati.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'Puente a Terabitia',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Puente a Terabitia',
                    url: '/book/Jacobo y el planeta de los miedos.pdf',
                    imgCaratula:"/image/imgbooks/diatres/puente-terabitia.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'La duenda',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'La duenda',
                    url: '/book/UNO interior_ESP.pdf',
                    imgCaratula: "/image/imgbooks/diatres/la-duenda-azul.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: 'Las siete vidas de Agustín Codazzi',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Las siete vidas de Agustín Codazzi',
                    url: '/book/Nomi interior.pdf',
                    imgCaratula: "/image/imgbooks/diatres/las-siete-vidas-de-agustin.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'La guerra que salvó mi vida',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'La guerra que salvó mi vida',
                    url: '/book/PAGES Los matices de Matisse_OK.pdf',
                    imgCaratula: "/image/imgbooks/diatres/La-guerra-que-salvo-mi-vida.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'La muda',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'La muda',
                    url: '/book/Jacobo y el planeta de los miedos.pdf',
                    imgCaratula:"/image/imgbooks/diatres/la-muda.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'La gran Gilly Hopkins',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'La gran Gilly Hopkins',
                    url: '/book/UNO interior_ESP.pdf',
                    imgCaratula: "/image/imgbooks/diatres/la-gran-gilly.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'Fortunato',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Fortunato',
                    url: '/book/Nomi interior.pdf',
                    imgCaratula: "/image/imgbooks/diatres/fortunato.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'martina y la carta del monje Yukio',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'martina y la carta del monje Yukio',
                    url: '/book/PAGES Los matices de Matisse_OK.pdf',
                    imgCaratula: "/image/imgbooks/diatres/martina-monje-yukio.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'Frin',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Frin',
                    url: '/book/diatres/FRIN_iniciales.pdf',
                    imgCaratula:"/image/imgbooks/diatres/frin.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'Mi amigo luki-live',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Mi amigo luki-live',
                    url: '/book/diatres/MI AMIGO LUKI-AZUL_iniciales.pdf',
                    imgCaratula: "/image/imgbooks/diatres/mi-amigo-luk-azul.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'Rompecabezas',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Rompecabezas',
                    url: '/book/diatres/INTERIORES ROMPECABEZAS_Iniciales.pdf',
                    imgCaratula: "/image/imgbooks/diatres/rompecabezas.jpg",
                    eventHover: false,
                },
                {
                    id: 16,
                    title: 'Cuando Hitler robó el conejo rosa',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'Cuando Hitler robó el conejo rosa',
                    url: '/book/diatres/CUANDO HITLER_iniciales.pdf',
                    imgCaratula: "/image/imgbooks/diatres/cuando-hitler.jpg",
                    eventHover: false,
                }
            ]
        }
    }
</script>

<style scoped lang="scss">

    .main-view {
        background-image: url("/image/background-day-three.jpg");
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
        top: 5.4%;
        left: 4.8%;
        height: 11.6%;
        width: 8.5%;
    }
    div#book-2 {
        top: 19.5%;
        left: 4.6%;
        height: 8.5%;
        width: 8.5%;
    }
    div#book-3 {
        top: 28.6%;
        left: 4.6%;
        height: 11.3%;
        width: 9%;
    }
    div#book-4 {
        top: 16.6%;
        left: 45.6%;
        height: 9.5%;
        width: 7.5%;
    }
    div#book-5 {
        top: 25.3%;
        left: 46%;
        height: 8.5%;
        width: 6.3%;
    }
    div#book-6 {
        top: 34.7%;
        left: 46%;
        height: 8%;
        width: 6.4%;
    }
    div#book-7 {
        top: 46%;
        left: 10.5%;
        height: 10%;
        width: 7%;
    }
    div#book-8 {
        top: 46.5%;
        left: 20.5%;
        height: 9%;
        width: 7.6%;
    }
    div#book-9 {
        top: 47.3%;
        left: 31.2%;
        height: 8%;
        width: 7%;
    }
    div#book-10 {
        top: 47.8%;
        left: 40.6%;
        height: 7.6%;
        width: 6.5%;
    }
    div#book-11 {
        top: 47%;
        left: 49.4%;
        height: 8.5%;
        width: 6.3%;
    }
    div#book-12 {
        top: 60%;
        left: 41.4%;
        height: 11.2%;
        width: 8.5%;
    }
    div#book-13 {
        top: 60.2%;
        left: 54.77%;
        height: 10.7%;
        width: 8.5%;
    }
    div#book-14 {
        top: 60.2%;
        left: 69.77%;
        height: 10.3%;
        width: 8.5%;
    }
    div#book-15 {
        top: 63.5%;
        left: 47.3%;
        height: 11.2%;
        width: 8.5%;
    }
    div#book-16 {
        top: 63%;
        left: 62.3%;
        height: 11.2%;
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
        width: 60%;
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
    a#pdf-download {
        color: #212529;
    }
    a#pdf-download:hover {
        text-decoration: none;
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
