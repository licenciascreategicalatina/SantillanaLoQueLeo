<template>
    <div>
        <div class="container-fluid main-view"
            :class="{'main-background-book' : changeBackground}">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-one">
                        <!-- BEGIN: posición de los libros -->
                        <div v-if="viewHoverBooks">
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
                                        <p class="text-justify">{{ truncate(bookSelect.description) }}</p>
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

                            <div v-if="openPDF" @click="closeIframeBook" id="pdf-read">
                                <div id="close-view-pdf">
                                    <svg id="icon-view-book" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>

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
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <template #tooltip>
                                        descargar programa
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
                                        allowfullscreen
                                        title="Morat  No Hay M&amp;aacute;s Que Hablar.mp4">
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
                changeBackground: false,
                //viewHoverBooks: false,
                viewHoverBooks: true,
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
                return text.length > 350 ? text.slice(0, 350) + '...' : text;
            },
            openViewChat() {
                this.openChatIcon = !this.openChatIcon
            },
            initClock() {
                let day = new Date();
                this.clockTimer = day.toLocaleTimeString();

                if (this.clockTimer.includes("3:25:00")) {
                    this.changeBackgroundMain()
                }
                if (this.clockTimer.includes("4:15:00")) {
                    this.changeBackgroundMain()
                }
                /* if (this.clockTimer.includes("3:51:00")) {
                    this.changeBackgroundMain()
                }
                if (this.clockTimer.includes("3:52:00")) {
                    this.changeBackgroundMain()
                } */
            }
        },
        created() {
            /* Lista de libros */
            this.listBooks = [
                {
                    id: 1,
                    title: 'Jacobo y el platena de los miedos',
                    description: 'Todos le tenemos miedo a algo, así Jacobo diga que no le tiene miedo a nada.',
                    alt: 'Jacobo',
                    url: '/book/diauno/jacobo-y-el-planeta-de-los-miedos.pdf',
                    imgCaratula:"/image/imgbooks/diauno/jacobo-y-el-planeta-de-los-miedos.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'Uno está bien, pero dos mejor',
                    description: 'Uno puede jugar, correr, leer o balancearse, pero con dos todo es mejor. Louis Slobodkin nos muestra que con amigos la vida es más divertida.',
                    alt: 'Uno está bien',
                    url: '/book/diauno/uno-esta-bien.pdf',
                    imgCaratula: "/image/imgbooks/diauno/uno-esta-bien.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'Ahora no, Bernardo',
                    description: 'Se retoma la típica frase que todos los padres dicen a los niños, para construir una historia en la que el humor y el absurdo conducen a un inesperado desenlace. Hará sonrojar a los adultos y dibujará una sonrisa en los pequeños.',
                    alt: 'Ahora no, Bernardo',
                    url: '/book/diauno/ahora-no-bernardo.pdf',
                    imgCaratula: "/image/imgbooks/diauno/ahora-no-bernardo.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                    title: 'Nomi y sus queridos animales',
                    description: 'Nomi quiere llevar a su casa a todos los animales del zoológico ( y de la granja también, como es logico). Mamá sin embargo, no está de acuerdo en tener de mascota a un león, a una jirafa o un oso. En este libro de rimas acompañaremos a Nomi en búsqueda del animal que puede caber en su hogar.',
                    alt: 'Nomi y sus queridos animales',
                    url: '/book/diauno/nomi-y-sus-queridos-animales.pdf',
                    imgCaratula: "/image/imgbooks/diauno/nomi-y-sus-queridos-animales.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'Los matices de matisse',
                    description: 'Si fueras un niño llamado Henri Matisse y vivieras en una sombría ciudad en el norte de Francia, ¿cómo sería tu vida? ¿Estaría llena de colores y objetos hermosos? ¿Plena de líneas y figuras que danzan? Esta delicada exploración de la infancia del pintor Henri Matisse, muestra sutilmente que la creatividad se puede alimentar y que la genialidad puede dispararse a partir de los detalles más inesperados, como la imagen de un frutero o la rica textura de una tela.',
                    alt: 'Los matices de matisse',
                    url: '/book/diauno/los-matices-de-matisse.pdf',
                    imgCaratula: "/image/imgbooks/diauno/los-matisse.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'Tobi y los ancianos',
                    description: 'Tobi piensa que los ancianos son personas muy aburridas. Un día, durante el verano, cuando todos sus amigos se marchan de vacaciones y él está jugando solo, su pelota cae justo donde está sentado el señor Cabra. Este encuentro le permite a Tobi conocer emocionantes e increíbles historias que vivieron algunos ancianos de su vecindario cuando eran jóvenes. Desde ese momento, su opinión acerca de las personas mayores cambia para siempre.',
                    alt: 'Tobi y los ancianos',
                    url: '/book/diauno/tobi-y-los-ancianos.pdf',
                    imgCaratula:"/image/imgbooks/diauno/tobi-y-los-ancianos.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: 'Benjamino',
                    description: 'Había una vez una madre que tenía un hijo tan pequeño que podía vivir dentro de una cáscara de nuez. Lo llamaban Benjamino. Un día se encontró con el lobo y demostró cuán astuto es.',
                    alt: 'Benjamino',
                    url: '/book/diauno/benjamino.pdf',
                    imgCaratula: "/image/imgbooks/diauno/benjamino.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'El libro que canta',
                    description: 'Desde antes de nacer, la poesía hace parte de la vida. En los primeros arrullos y en todos los juegos, rimas y rondas que escribimos en el cuerpo de un bebé, está presente una herencia de palabras, ritmo y afecto que será su primer texto de lectura y que quedará escrito en su memoria poética. El libro que canta acompaña a toda la familia durante ese tiempo maravilloso de la primera infancia. Sus capítulos trazan una ruta que comienza en el vientre materno y que va creciendo con el bebé.',
                    alt: 'El libro que canta',
                    url: '/book/diauno/el-libro-que-canta.pdf',
                    imgCaratula: "/image/imgbooks/diauno/el-libro-que-canta.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'Escondidas',
                    description: 'Un libro de imágenes para crear una historia diferente en cada lectura. El libro cero del bebé para leer, acariciar y morder.',
                    alt: 'Escondidas',
                    url: '/book/diauno/escondidas.pdf',
                    imgCaratula: "/image/imgbooks/diauno/escondidas.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'El abuelo armadillo',
                    description: 'El abuelo armadillo sale de excursión con sus nietos. En el camino son sorprendidos por el cazador y sus perros. ¿Podrán escapar de su furia y sus balas? Será una misión del abuelo enseñarles a sus nietos sobre sus talentos naturales para protegerse y escapar a salvo para llegar a casa.',
                    alt: 'El abuelo armadillo',
                    url: '/book/diauno/el-abuelo-armadillo.pdf',
                    imgCaratula:"/image/imgbooks/diauno/el-abuelo-armadillo.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'El cuento de hadas de Harold',
                    description: 'Una noche en vela, el pequeño Harold usa su crayola morada de nuevo para desatar su imaginación. Esta vez, Harold creará su propio cuento de hadas y vivirá muchas peripecias hasta regresar, en su alfombra mágica, a la silla de su mamá, para pedirle que le cuente un cuento antes de volver a la cama.',
                    alt: 'El cuento de hadas de Harold',
                    url: '/book/diauno/cuento-de-hadas-de-harold.pdf',
                    imgCaratula: "/image/imgbooks/diauno/cuento-de-hadas-de-harold.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'Boris y las manzanas',
                    description: 'Boris es un cerdito que adora las manzanas, tiene amigos, le gusta explorar e ir al colegio, pero tiene un problema: no sabe contar. Tras varias decepciones, lo logra con la ayuda de su amiga Gladis, quien le sugiere intentar con manzanas. Así, Boris se acerca a sus debilidades desde sus gustos.',
                    alt: 'Boris y las manzanas',
                    url: '/book/diauno/boris-y-las-manzanas.pdf',
                    imgCaratula: "/image/imgbooks/diauno/boris-y-las-manzanas.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'Un dinosaurio es',
                    description: 'Los dinosaurios son seres fascinantes. Se caracterizan por tener enormes dientes, colas poderosas, apetito voraz… a veces se parecen incluso a, ¡un niño!',
                    alt: 'Un dinosaurio es',
                    url: '/book/diauno/un-dinosaurio-es.pdf',
                    imgCaratula: "/image/imgbooks/diauno/un-dinosaurio-es.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'Los tres bandidos',
                    description: 'Una historia singular. Tres bandidos salen en busca de tesoros, pero ¡oh, sorpresa! Sin pensarlo, capturan un tesoro que les cambia la vida.',
                    alt: 'Los tres bandidos',
                    url: '/book/diauno/los-tres-bandidos.pdf',
                    imgCaratula:"/image/imgbooks/diauno/los-tres-bandidos.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'Cuentos al revés',
                    description: 'Érase una vez un pobre lobillo que llevaba la comida de su abuela en un paquetillo. Tropezó con la temible Caperucita Roja, imaginen ustedes todo lo que pasó después. Junto a Gianni Rodari, viajemos a un mundo de fantasía, en donde los cuentos suceden al revés.',
                    alt: 'Cuentos al revés',
                    url: '/book/diauno/cuentos-al-reves.pdf',
                    imgCaratula: "/image/imgbooks/diauno/cuentos-al-reves.jpg",
                    eventHover: false,
                }
            ]
        },
        mounted() {
            this.intervalClock = setInterval( () => {
                this.initClock();
            }, 1000);
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
        z-index: 99;
        border-radius: 1rem;
        padding: 0.4rem;
        opacity: 0;
    }
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
        z-index: 70;
    }
    /* END estilos chat */

    div#content-clock {
        position: absolute;
        top: 2%;
        right: 2%;
        color: #9f793d;
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
        height: 70%;
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
        height: 22rem;
    }
    div#content-background-img {
        margin: 0 0 0 75%;
    }
    div#content-background-img button {
        background: #9f793d;
    }
    div#content-agenda-book {
        margin: 0 0 0 75%;
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
