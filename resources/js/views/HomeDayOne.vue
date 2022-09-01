<template>
    <div>
        <div class="container-fluid main-view"
            :class="{'main-background-book' : changeBackground}">

            <div class="row justify-content-center">
                <div id="content-background-books" class="col-sm-12 col-md-12 col-lg-6"
                    :class="{'content-background-books-1' : changeBackground}">
                    <div class="view-iframe-one">
                        <!-- BEGIN: posición de los libros -->
                        <div v-if="viewHoverBooks">
                            <div class="class-position" id="book-1"
                                @click="clickShowViewInfoBook( listBooks[0] )"
                                @mouseover="listBooks[0].eventHover = true"
                                @mouseleave="listBooks[0].eventHover = false">
                                <div v-if="listBooks[0].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[0].imgCaratula"
                                        :alt="listBooks[0].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-2"
                                @click="clickShowViewInfoBook( listBooks[1] )"
                                @mouseover="listBooks[1].eventHover = true"
                                @mouseleave="listBooks[1].eventHover = false">
                                <div v-if="listBooks[1].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[1].imgCaratula"
                                        :alt="listBooks[1].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-3"
                                @click="clickShowViewInfoBook( listBooks[2] )"
                                @mouseover="listBooks[2].eventHover = true"
                                @mouseleave="listBooks[2].eventHover = false">
                                <div v-if="listBooks[2].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[2].imgCaratula"
                                        :alt="listBooks[2].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-4"
                                @click="clickShowViewInfoBook( listBooks[3] )"
                                @mouseover="listBooks[3].eventHover = true"
                                @mouseleave="listBooks[3].eventHover = false">
                                <div v-if="listBooks[3].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[3].imgCaratula"
                                        :alt="listBooks[3].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-5"
                                @click="clickShowViewInfoBook( listBooks[4] )"
                                @mouseover="listBooks[4].eventHover = true"
                                @mouseleave="listBooks[4].eventHover = false">
                                <div v-if="listBooks[4].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[4].imgCaratula"
                                        :alt="listBooks[4].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-6"
                                @click="clickShowViewInfoBook( listBooks[5] )"
                                @mouseover="listBooks[5].eventHover = true"
                                @mouseleave="listBooks[5].eventHover = false">
                                <div v-if="listBooks[5].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[5].imgCaratula"
                                        :alt="listBooks[5].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-7"
                                @click="clickShowViewInfoBook( listBooks[6] )"
                                @mouseover="listBooks[6].eventHover = true"
                                @mouseleave="listBooks[6].eventHover = false">
                                <div v-if="listBooks[6].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[6].imgCaratula"
                                        :alt="listBooks[6].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-8"
                                @click="clickShowViewInfoBook( listBooks[7] )"
                                @mouseover="listBooks[7].eventHover = true"
                                @mouseleave="listBooks[7].eventHover = false">
                                <div v-if="listBooks[7].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[7].imgCaratula"
                                        :alt="listBooks[7].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-9"
                                @click="clickShowViewInfoBook( listBooks[8] )"
                                @mouseover="listBooks[8].eventHover = true"
                                @mouseleave="listBooks[8].eventHover = false">
                                <div v-if="listBooks[8].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[8].imgCaratula"
                                        :alt="listBooks[8].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-10"
                                @click="clickShowViewInfoBook( listBooks[9] )"
                                @mouseover="listBooks[9].eventHover = true"
                                @mouseleave="listBooks[9].eventHover = false">
                                <div v-if="listBooks[9].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[9].imgCaratula"
                                        :alt="listBooks[9].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-11"
                                @click="clickShowViewInfoBook( listBooks[10] )"
                                @mouseover="listBooks[10].eventHover = true"
                                @mouseleave="listBooks[10].eventHover = false">
                                <div v-if="listBooks[10].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[10].imgCaratula"
                                        :alt="listBooks[10].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-12"
                                @click="clickShowViewInfoBook( listBooks[11] )"
                                @mouseover="listBooks[11].eventHover = true"
                                @mouseleave="listBooks[11].eventHover = false">
                                <div v-if="listBooks[11].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[11].imgCaratula"
                                        :alt="listBooks[11].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-13"
                                @click="clickShowViewInfoBook( listBooks[12] )"
                                @mouseover="listBooks[12].eventHover = true"
                                @mouseleave="listBooks[12].eventHover = false">
                                <div v-if="listBooks[12].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[12].imgCaratula"
                                        :alt="listBooks[12].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-14"
                                @click="clickShowViewInfoBook( listBooks[13] )"
                                @mouseover="listBooks[13].eventHover = true"
                                @mouseleave="listBooks[13].eventHover = false">
                                <div v-if="listBooks[13].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[13].imgCaratula"
                                        :alt="listBooks[13].alt">
                                </div>
                            </div>
                            <div class="class-position" id="book-15"
                                @click="clickShowViewInfoBook( listBooks[14] )"
                                @mouseover="listBooks[14].eventHover = true"
                                @mouseleave="listBooks[14].eventHover = false">
                                <div v-if="listBooks[14].eventHover" class="content-img-hover-book">
                                    <img class="img-hover-book"
                                        :src="listBooks[14].imgCaratula"
                                        :alt="listBooks[14].alt">
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
                                    <div class="col-12 mt-4">
                                        <h3 class="text-center">{{ bookSelect.title }}</h3>
                                        <div class="overflow-auto">
                                            <!-- <p class="text-justify">{{ truncate(bookSelect.description) }}</p> -->
                                            <p class="text-justify">{{ bookSelect.description }}</p>
                                        </div>
                                        <div class="text-right">
                                            <button id="btn-info-book"
                                                @click="eventShowIframeBook( bookSelect )"
                                                type="button" class="btn btn-primary btn-sm">
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

                            <div v-if="openPDF" @click="closeIframeBook" id="pdf-read">
                                <div id="close-view-pdf">
                                    <svg id="icon-view-book" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>

                                <!-- <iframe :src="urlBook + '#toolbar=0'" sin opciones -->
                                <!-- <embed :src="urlBook"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%" /> -->
                                <iframe :src="urlBook + '#toolbar=0'"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%" />
                            </div>
                        </div>
                    </div>
                </div>

                <div id="content-backgroud-video" class="col-sm-12 col-md-12 col-lg-6"
                    :class="{'content-background-books-2' : changeBackground}">
                    <div id="content-clock">
                        <span id="clock-timer">{{ clockTimer }}</span>
                    </div>

                    <div class="view-iframe-two">
                        <div class="vertical-center-video">
                            <div id="content-agenda-book">
                                <vs-button @click="agendaBook=!agendaBook">
                                    Agenda del dia
                                </vs-button>
                            </div>

                            <vs-dialog width="550px" not-center v-model="agendaBook">
                                <vs-tooltip color="#b1935e" border-thick>
                                    <a id="pdf-download" href="/book/pdf-programa.pdf" download="programa">
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
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <template #tooltip>
                                        Descargar programa
                                    </template>
                                </vs-tooltip>
                            </vs-dialog>

                            <div class="card animate__animated animate__slideInRight animate__slower">
                                <div class="view-body">
                                    <!-- <iframe id="iframe-video" width=""
                                        height=""
                                        :src="urlTransmision"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen /> -->
                                    <!-- <iframe id="iframe-video" src="https://player.vimeo.com/video/543207075"
                                        frameborder="0"
                                        allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen    https://player.vimeo.com/video/543242638?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    </iframe> -->
                                    <iframe id="iframe-video"
                                        :src="urlTransmision"
                                        width=""
                                        height=""
                                        frameborder="0"
                                        allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div id="chat">
                        <iframe src="https://www6.cbox.ws/box/?boxid=861776&boxtag=9fCpoB" width="100%" height="450" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"></iframe>
                    </div> -->
                    <!-- <iframe src='https://deadsimplechat.com/Ixm0bpQOb' width='100%' height='500px'></iframe> -->
                    <!-- <iframe src="https://deadsimplechat.com/ETp0098vF" width="400px" height="600px"></iframe> -->

                    <button @click="openViewChat" id="btn-float-chat" type="button" class="btn btn-primary">
                        <svg v-if="openChatIcon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </button>

                    <div :class="{'content-chat-opacity' : openChatIcon}"
                        id="content-chat">
                        <div id="body-chat">
                            <iframe id="iframe-chat"
                                :class="{'content-chat-opacity' : openChatIcon}"
                                :src="urlChat"
                                width=""
                                height=""
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                urlTransmision: "https://vimeo.com/event/947811/embed/1ea5cea1f6",
                urlChat: "https://vimeo.com/event/947811/chat/1ea5cea1f6",
                urlBook: "",
                openPDF: false,
                imgGif: false,
                activeModal: false,
                heightIframeBook: false,
                agendaBook: false,
                //changeBackground: true,
                changeBackground: false, // comentar
                //viewHoverBooks: false,
                viewHoverBooks: true,  // comentar
                openChatIcon: false,
                listBooks: [],
                bookSelect: null,
                clockTimer: "",
                intervalClock: "",
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
            changeBackgroundMain() {
                this.changeBackground = !this.changeBackground;
                this.viewHoverBooks = !this.viewHoverBooks;
            },
            truncate( text ) {
                if (window.innerWidth < 992) {
                    return text.length > 200 ? text.slice(0, 150) + '...' : text;
                }

                return text.length > 350 ? text.slice(0, 350) + '...' : text;
            },
            openViewChat() {
                this.openChatIcon = !this.openChatIcon
            },
            initClock() {
                let day = new Date();
                this.clockTimer = day.toLocaleTimeString();
            },
            changeBackgroudPage() {
                axios.get("/api/change-background")
                .then( result => {
                    let change = result.data.data;
                    console.log(change)
                    if (change === 'si'){
                        this.changeBackground = false
                        this.viewHoverBooks = true
                    } else {
                        this.changeBackground = true
                        this.viewHoverBooks = false
                    }
                }).catch( error => {
                    console.log('fallo');
                });
            }
        },
        created() {
            this.listBooks = [
                {
                    id: 1,
                    title: 'JACOBO Y EL PLANETA DE LOS MIEDOS',
                    description: 'Todos le tenemos miedo a algo, así Jacobo diga que no le tiene miedo a nada. Después de que mamá, papá y Susi comparten sus miedos más profundos, papá revela un lugar al cual ir a esconder aquello que nos asusta. ¡Fuera del planeta!',
                    alt: 'JACOBO Y EL PLANETA DE LOS MIEDOS',
                    url: '/book/diauno/10_JACOBO_Y_EL_PLANETA_DE_LOS_MIEDOS.pdf',
                    imgCaratula:"/image/imgbooks/diauno/10_JACOBO_Y_EL_PLANETA_DE_LOS_MIEDOS.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'UNO ESTÁ BIEN PERO DOS MEJOR',
                    description: 'Uno puede jugar, correr, leer o balancearse, pero con dos todo es mejor. Louis Slobodkin nos muestra que con amigos la vida es más divertida.',
                    alt: 'UNO ESTÁ BIEN PERO DOS MEJOR',
                    url: '/book/diauno/07_UNO_ESTA_BIEN_PERO_DOS_MEJOR.pdf',
                    imgCaratula: "/image/imgbooks/diauno/07_UNO_ESTA_BIEN_PERO_DOS_MEJOR.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'AHORA NO, BERNARDO',
                    description: 'Se retoma la típica frase que todos los padres dicen a los niños, para construir una historia en la que el humor y el absurdo conducen a un inesperado desenlace. Hará sonrojar a los adultos y dibujará una sonrisa en los pequeños.',
                    alt: 'AHORA NO, BERNARDO',
                    url: '/book/diauno/14_AHORA_NO_BERNARDO.pdf',
                    imgCaratula: "/image/imgbooks/diauno/14_AHORA_NO_BERNARDO.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                     title: 'NOMI Y SUS QUERIDOS ANIMALES',
                    description: 'Nomi quiere llevar a su casa a todos los animales del zoológico ( y de la granja también, como es logico). Mamá sin embargo, no está de acuerdo en tener de mascota a un león, a una jirafa o un oso. En este libro de rimas acompañaremos a Nomi en búsqueda del animal que puede caber en su hogar. ',
                    url: '/book/diauno/06_NOMI_Y_SUS_QUERIDOS_ANIMALES.pdf',
                    imgCaratula: "/image/imgbooks/diauno/06_NOMI_Y_SUS_QUERIDOS_ANIMALES.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'LOS MATICES DE MATISSE',
                    description: 'Si fueras un niño llamado Henri Matisse y vivieras en una sombría ciudad en el norte de Francia, ¿cómo sería tu vida? ¿Estaría llena de colores y objetos hermosos? ¿Plena de líneas y figuras que danzan? Esta delicada exploración de la infancia del pintor Henri Matisse, muestra sutilmente que la creatividad se puede alimentar y que la genialidad puede dispararse a partir de los detalles más inesperados, como la imagen de un frutero o la rica textura de una tela.',
                    alt: 'LOS MATICES DE MATISSE',
                    url: '/book/diauno/08_LOS_MATICES_DE MATISSE.pdf',
                    imgCaratula: "/image/imgbooks/diauno/08_LOS_MATICES_DE MATISSE.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'TOBI Y LOS ANCIANOS',
                    description: 'Tobi piensa que los ancianos son personas muy aburridas. Un día, durante el verano, cuando todos sus amigos se marchan de vacaciones y él está jugando solo, su pelota cae justo donde está sentado el señor Cabra. Este encuentro le permite a Tobi conocer emocionantes e increíbles historias que vivieron algunos ancianos de su vecindario cuando eran jóvenes. Desde ese momento, su opinión acerca de las personas mayores cambia para siempre.',
                    alt: 'TOBI Y LOS ANCIANOS',
                    url: '/book/diauno/02_TOBI_Y_LOS_ANCIANOS.pdf',
                    imgCaratula:"/image/imgbooks/diauno/02_TOBI_Y_LOS_ANCIANOS.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: '¡ADIÓS, PEQUEÑO!',
                    description: 'Un niño pequeño que vive solo se propone buscar una mamá. En su camino, les pregunta a un gato, a un osito de peluche, a una gallina y a un señor si quieren ser su mamá. Aunque ellos le dicen que no, le ayudan a encontrar una.',
                    alt: '¡ADIÓS, PEQUEÑO!',
                    url: '/book/diauno/09_ADIOS_PEQUENIO.pdf',
                    imgCaratula: "/image/imgbooks/diauno/09_ADIOS_PEQUENIO.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'EL LIBRO QUE CANTA',
                    description: 'Desde antes de nacer, la poesía hace parte de la vida. En los primeros arrullos y en todos los juegos, rimas y rondas que escribimos en el cuerpo de un bebé, está presente una herencia de palabras, ritmo y afecto que será su primer texto de lectura y que quedará escrito en su memoria poética. El libro que canta acompaña a toda la familia durante ese tiempo maravilloso de la primera infancia. Sus capítulos trazan una ruta que comienza en el vientre materno y que va creciendo con el bebé.',
                    alt: 'EL LIBRO QUE CANTA',
                    url: '/book/diauno/11_EL_LIBRO_QUE_CANTA.pdf',
                    imgCaratula: "/image/imgbooks/diauno/11_EL_LIBRO_QUE_CANTA.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'PEQUEÑO',
                    description: 'En este mundo hay dos tipos de personas: los grandes y los pequeños. Los grandes deben siempre cuidar a los pequeños, pero, desafortunadamente, no siempre sucede así. En casa de Pequeño hay peleas grandes. Demasiado grandes. Enormes. Y, muchas veces, no hay nadie que se ocupe de él. Entonces Pequeño siente tristeza en toda la panza, en la cabeza y en los brazos también. Por suerte, Pequeño tiene una muy buena Maestra que lo quiere, y entre ambos buscarán a Alguien que le dé a Pequeño el cuidado y cariño que tanto necesita. Un libro perfecto para hablar con los más pequeños sobre los derechos de los niños y las obligaciones de los adultos.',
                    alt: 'PEQUEÑO',
                    url: '/book/diauno/01_PEQUENIO.pdf',
                    imgCaratula: "/image/imgbooks/diauno/01_PEQUENIO.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'HISTORIA DE BABAR EL ELEFANTITO',
                    description: 'Babar el elefantito sufre la muerte de su madre, y escapa lejos hasta llegar a París. Allí encuentra una amiga y se vuelve un ciudadano más de esta ciudad. Hasta que sus primos llegan a buscarlo, pues el rey elefante ha muerto y Babar es heredero del trono. Este entrañable libro de imágenes nació de los diálogos entre padres e hijos de la familia de Brunhoff. La madre narraba sus aventuras, el padre las ilustraba y los niños las seguían absortos noche tras noche.',
                    alt: 'HISTORIA DE BABAR EL ELEFANTITO',
                    url: '/book/diauno/13_HISTORIA_DE_BABAR_EL_ELEFANTITO.pdf',
                    imgCaratula:"/image/imgbooks/diauno/13_HISTORIA_DE_BABAR_EL_ELEFANTITO.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'EL CUENTO DE HADAS DE HAROLD',
                    description: 'Una noche en vela, el pequeño Harold usa su crayola morada de nuevo para desatar su imaginación. Esta vez, Harold creará su propio cuento de hadas y vivirá muchas peripecias hasta regresar, en su alfombra mágica, a la silla de su mamá, para pedirle que le cuente un cuento antes de volver a la cama.',
                    alt: 'EL CUENTO DE HADAS DE HAROLD',
                    url: '/book/diauno/05_EL_CUENTO_DE_HADAS_DE_HAROLD.pdf',
                    imgCaratula: "/image/imgbooks/diauno/05_EL_CUENTO_DE_HADAS_DE_HAROLD.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'JACOBO Y EL PRIMER DÍA',
                    description: 'Jacobo nunca ha ido al jardín infantil, le da un poco de miedo alejarse de mamá y dejar en casa a su hermanita Susi. Quién hubiera creído que el jardín estaba lleno de juegos disparatados y nuevos amigos.',
                    alt: 'JACOBO Y EL PRIMER DÍA',
                    url: '/book/diauno/03_JACOBO_Y_EL_PRIMER_DIA.pdf',
                    imgCaratula: "/image/imgbooks/diauno/03_JACOBO_Y_EL_PRIMER_DIA.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'LA ESCUELA DE LOS ÁNGELES',
                    description: '“La Escuela de los Ángeles rinde homenaje a estos personajes alados que acompañan a la humanidad –y, especialmente, a la infancia– con ánimo protector, desde tiempos muy antiguos, y pretende bajarlos de los altares para ponerlos a jugar, como niños pícaros y traviesos,en el espacio familiar y cercano de la escuela”. Así define Rodríguez esta historia que conjuga la maestría narrativa con la belleza de las ilustraciones del artista cubano Alexis Lago.',
                    alt: 'LA ESCUELA DE LOS ÁNGELES',
                    url: '/book/diauno/12_LA_ESCUELA_DE_LOS_ANGELES.pdf',
                    imgCaratula: "/image/imgbooks/diauno/12_LA_ESCUELA_DE_LOS_ANGELES.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'LOS TRES BANDIDOS',
                    description: 'Una historia singular. Tres bandidos salen en busca de tesoros, pero ¡oh, sorpresa! Sin pensarlo, capturan un tesoro que les cambia la vida.',
                    alt: 'LOS TRES BANDIDOS',
                    url: '/book/diauno/15_LOS_TRES_BANDIDOS.pdf',
                    imgCaratula:"/image/imgbooks/diauno/15_LOS_TRES_BANDIDOS.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'JACOBO VA AL HOSPITAL',
                    description: 'Jacobo no quiere que lo operen, no quiere que le pongan la anestesia ni mucho menos quiere quedarse a dormir en el hospital. Por suerte tío Eduar está aquí para convertir cada momento difícil en una nueva aventura.',
                    alt: 'JACOBO VA AL HOSPITAL',
                    url: '/book/diauno/04_JACOBO_VA_AL_HOSPITAL.pdf',
                    imgCaratula: "/image/imgbooks/diauno/04_JACOBO_VA_AL_HOSPITAL.jpg",
                    eventHover: false,
                }
            ]
        },
        mounted() {
           /*  this.intervalClock = setInterval( () => {
                this.initClock();
            }, 1000); 
            this.intervalClock = setInterval( () => {
                this.changeBackgroudPage();
            }, 30000);
            */
        }
    }
</script>

<style scoped lang="scss">

    /* BEGIN estilos chat */
    button#btn-float-chat {
        border-radius: 1.8rem !important;
        padding: 0.7rem;
        position: fixed;
        bottom: 3%;
        right: 1.2rem;
        z-index: 99;
        background: #9f793d;
        border-color: #9f793d;
    }
    div#content-chat {
        position: fixed;
        bottom: 12%;
        right: 1%;
        width: 25%;
        height: 70%;
        border-radius: 1rem;
        padding: 0.4rem;
        opacity: 0;
    } /* z-index: 99; */
    iframe#iframe-chat {
        position: absolute;
        width: 100%;
        height: 100%;
        bottom: 0;
        border-radius: 0.4rem;
        opacity: 0;
    }
    .content-chat-opacity {
        opacity: 1 !important;
        z-index: 110;
    }
    /* END estilos chat */

    div#content-clock {
        position: absolute;
        top: 2%;
        right: 2%;
        color: #9f793d;
    }

    .overflow-auto {
        height: 110px;
        overflow: auto !important;
        margin-bottom: 0.5rem;
    }

    .main-view {
        background-image: url("/image/imgbackground/preescolar.jpg");
        //background-image: url("/image/background-day-one.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
    }

    .main-background-book {
        //background-image: url("/image/background-initial.jpg");
        background-image: url("/image/imgbackground/main-background.png");
    }

    /* Style content first iframe */
    .view-iframe-one {
        position: relative;
        min-height: 100vh;
        z-index: 99;
    }

    .height-iframe-book {
        height: 80%;
    }

    /* STAR: estilos para libros */
    .class-position {
        position: absolute;
        //border: 1px solid red;
        cursor: pointer;
    }

    div#book-1 {
        top: 19%;
        left: 4.6%;
        height: 8.5%;
        width: 9%;
    }
    div#book-2 {
        top: 28.6%;
        left: 4.6%;
        height: 11.3%;
        width: 9%;
    }
    div#book-3 {
        top: 18%;
        left: 46%;
        height: 7%;
        width: 6.5%;
    }
    div#book-4 {
        top: 25.3%;
        left: 46%;
        height: 8.5%;
        width: 7%;
    }
    div#book-5 {
        top: 34.7%;
        left: 46%;
        height: 9%;
        width: 7%;
    }
    div#book-6 {
        top: 45%;
        left: 9%;
        height: 11%;
        width: 9%;
    }
    div#book-7 {
        top: 45%;
        left: 20%;
        height: 11%;
        width: 9%;
    }
    div#book-8 {
        top: 46%;
        left: 31%;
        height: 10%;
        width: 8%;
    }
    div#book-9 {
        top: 47%;
        left: 40%;
        height: 9%;
        width: 8%;
    }
    div#book-10 {
        top: 46%;
        left: 49%;
        height: 10%;
        width: 7%;
    }
    div#book-11 {
        top: 60%;
        left: 41.4%;
        height: 11.2%;
        width: 8.5%;
    }
    div#book-12 {
        top: 60.2%;
        left: 54.77%;
        height: 10.7%;
        width: 8.5%;
    }
    div#book-13 {
        top: 60.2%;
        left: 69.77%;
        height: 10.3%;
        width: 8.5%;
    }
    div#book-14 {
        top: 63.5%;
        left: 47.6%;
        height: 11.7%;
        width: 8.5%;
    }
    div#book-15 {
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
        margin: 0 6% 0 0;
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
        max-height: 350px;
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
    div#close-view-pdf {
        background: #9f793d;
        padding: 0.4rem;
        text-align: right;
        cursor: pointer;
    }
    svg#icon-view-book {
        color: #fff;
    }
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
        width: 92%;
        height: 100%;
        top: -8%;
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
        width: 90%;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .vertical-center-video {
        margin: 0;
        padding: 1rem;
        width: 100%;
        position: absolute;
        top: 35%;
        left: -20%;
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
        height: 55vh;
    }
    div#content-background-img {
        margin: 0 0 0 75%;
    }
    div#content-background-img button {
        background: #9f793d;
    }
    div#content-agenda-book {
        margin: 0 0 0 78%;
    }
    .color-button-book {
        background: #9f793d;
    }
    div#content-agenda-book button {
        background: #9f793d;
    }
    div#content-agenda-book button:hover {
        box-shadow: 0px 10px 20px -10px rgb(193 59 43);
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
        /* .class-position {
            border: 1px solid red;
        } */

        #content-background-books {
            background-image: url("/image/imgbackground/movil/preescolar-uno.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content-background-books-1 {
            background-image: url("/image/imgbackground/movil/main-background-1.png") !important;
        }
        .view-iframe-one {
            min-height: 60vh;
            contain: content;
        }
        .overflow-auto {
            height: 80px;
        }

        div#book-1 {
            top: 18%;
            left: 1%;
            height: 9%;
            width: 10%;
        }
        div#book-2 {
            left: 1%;
            width: 10%;
        }
        div#book-3 {
            top: 17%;
            left: 45%;
            height: 8%;
            width: 8%;
        }
        div#book-4 {
            left: 45%;
            width: 8%;
        }
        div#book-5 {
            left: 45%;
            width: 8%;
        }
        div#book-6 {
            left: 5%;
            width: 10%;
        }
        div#book-7 {
            left: 17%;
            width: 10%;
        }
        div#book-8 {
            top: 45%;
            left: 29%;
            height: 11%;
            width: 9%;
        }
        div#book-9 {
            top: 46%;
            left: 39%;
            height: 10%;
            width: 9%;
        }
        div#book-10 {
            width: 9%;
        }
        div#book-11 {
            top: 59%;
            left: 39%;
            height: 11.2%;
            width: 10%;
        }
        div#book-12 {
            top: 59%;
            width: 10%;
        }
        div#book-13 {
            top: 59%;
            left: 70%;
            width: 10%;
        }
        div#book-14 {
            height: 13%;
            width: 9%;
        }
        div#book-15 {
            left: 63%;
            height: 13%;
            width: 10%;
        }

        .vertical-center {
            width: 100%;
        }
        img#img-info-book {
            max-height: 190px;
        }
        h3.text-center {
            font-size: 1.1rem;
        }
        p.text-justify {
            font-size: 0.7rem;
        }
        #pdf-read {
            top: -5%;
        }
        svg#icon-view-book {
            width: 1.6rem;
            height: 1.6rem;
        }


        #content-backgroud-video {
            background-image: url("/image/imgbackground/movil/preescolar-dos.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content-background-books-2 {
            background-image: url("/image/imgbackground/movil/main-background-2.png") !important;
        }

        /* Style content second iframe */
        .view-iframe-two {
            min-height: 60vh;
            contain: content;
        }
        .vertical-center-video {
            left: 0%;
        }
        div#content-agenda-book {
            margin: 0 0 0 62%;
        }
        #iframe-video {
            height: 13rem;
        }
        div#content-clock {
            bottom: 2%;
            top: auto;
            right: auto;
        }

        div#content-chat {
            width: 80%;
            height: 60%;
        }
    }

    /* Styles for large screens  */
    @media (min-width: 2000px) {
       /*  #iframe-video {
            height: 55vh;
        } */
    }
</style>
