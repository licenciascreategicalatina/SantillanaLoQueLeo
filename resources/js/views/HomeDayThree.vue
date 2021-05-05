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
                                    <div class="col-12 text-center" style="max-height: 350px;">
                                        <img id="img-info-book"
                                            @click="eventShowIframeBook( bookSelect )"
                                            :src="bookSelect.imgCaratula" :alt="bookSelect.alt">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <h3 class="text-center">{{ bookSelect.title }}</h3>
                                        <div class="overflow-auto">
                                            <p class="text-justify">{{ bookSelect.description }}</p>
                                        </div>
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
                                <!-- <embed :src="urlBook"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%" /> -->
                                <iframe :src="urlBook"
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

                                    <iframe id="iframe-video"
                                        :src="urlTransmision"
                                        width=""
                                        height=""
                                        frameborder="0"
                                        allow="autoplay; fullscreen; picture-in-picture"
                                        allowfullscreen/>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                frameborder="0"/>
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
                changeBackground: true,
                viewHoverBooks: false,
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

                this.eventClickBook( book )
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
            },
            changeBackgroudPage() {
                axios.get("/api/change-background")
                .then( result => {
                    let change = result.data.data;
                    //console.log(change)
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
            },
            eventClickBook( book ) {
                axios.post('/click-book', book)
                    .then( (resp) => {
                        //console.log('click...')
                    })
                    .catch( error => {
                        console.log('Error clic book')
                    });
            }
        },
        created() {
            this.listBooks = [
                {
                    id: 1,
                    title: 'El juego de la nieve',
                    description: 'Está a punto de inaugurarse la Feria de Juegos de Zyl. Iván Dragó parece dispuesto a olvidar los enigmas de su pasado para concentrarse en su oficio de inventor de juegos. Pero se cruza en su camino lo inesperado: una filmación de pocos segundos en la que cree reconocer a su madre, en medio de un paisaje nevado. Para saber qué pasó realmente con sus padres, tendrá que enfrentarse con juguetes peligrosos, deberá pasar las exigentes pruebas de Spativo y seguir las huellas de Morodian. Ante Iván se abre la región del frío y el olvido: el juego de la nieve.',
                    alt: 'El juego de la nieve',
                    url: '/book/diatres/el-juego-de-la-nieve.pdf',
                    imgCaratula: "/image/imgbooks/diatres/juego-de-la-nieve.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'Antología poética de la generación del 27',
                    description: 'Federico García Lorca, Carmen Conde, Luis Cernuda, Concha Méndez, Rafael Alberti, Elisabeth Mulder, Pedro Salinas… Los nombres que componen la llamada generación del 27 son esenciales para entender la historia de la poesía contemporánea. Hombres y mujeres que hicieron de la creación una forma de vida y que, en esta antología, hemos intentado acompañar desde sus primeros versos hasta sus últimas obras. Una selección que ofrece todas las claves para entender y disfrutar de su evolución literaria y que, además, devuelve al primer plano a las autoras del 27, otorgándoles el lugar y espacio que su indudable calidad merece.',
                    alt: 'Antología poética de la generación del 27',
                    url: '/book/diatres/antologia-poetica-del-27.pdf',
                    imgCaratula: "/image/imgbooks/diatres/antologia-poetica.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'El canto del manatí',
                    description: 'Tanana y Tanene son dos gemelos hijos de la armonía, junto a Buinaria han crecido entre los ríos y han aprendido a ser parte del fluir de la naturaleza. Cuando Buinaria vuelve de un largo viaje la armonía del clan se rompe, los hermanos ya no quieren ser parte de un todo y deciden llevar la lucha por el amor de su amiga hasta las últimas consecuencias.',
                    alt: 'El canto del manatí',
                    url: '/book/diatres/canto-manati.pdf',
                    imgCaratula: "/image/imgbooks/diatres/canto-manati.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                    title: 'Puente a Terabitia',
                    description: 'Jess Aarons ha entrenado todo el verano para ser el corredor más rápido de quinto grado. Y casi lo logra, de no ser por la niña nueva, Leslie Burke, que lo rebasa. Pronto, los dos se hacen mejores amigos y pasan los días en el bosque detrás de la casa de Leslie, donde ambos inventan un reino encantado llamado Terabitia. Una mañana, Leslie decide ir sola a Terabitia y ocurre una tragedia. Sólo el amor de su familia y la fuerza que Leslie le ha dado permitirá que Jess pueda superar su pérdida.',
                    alt: 'Puente a Terabitia',
                    url: '/book/diatres/puente-terabitia.pdf',
                    imgCaratula:"/image/imgbooks/diatres/puente-terabitia.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'La Duenda',
                    description: '"La primera vez que la vimos éramos niños, aún". A partir de esa primera mirada de la Duenda, un ser de fuerza envolvente e inasible, se conjura el hechizo que será la perdición y el remedio del protagonista de esta historia. Evelio Rosero, con una prosa poética que no cesa de ofrecer poesía, consigue crear una obra cautivante.',
                    alt: 'La duenda',
                    url: '/book/diatres/la-duenda-azul.pdf',
                    imgCaratula: "/image/imgbooks/diatres/la-duenda-azul.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'Las siete vidas de Agustín Codazzi',
                    description: 'Agustín Codazzi recorrió el mundo y fue tantos seres en una persona que vivió siete vidas. Cada una de estas corresponde a una edad, a un lugar, a una faceta suya. Hay que conocerlas todas para comprender por qué ese anónimo soldado italiano, aventurero y mercenario, se volvió libertador, geógrafo y cartógrafo de Venezuela y de la Nueva Granada, y para concluir que fue él quien verdaderamente descubrió el continente. En un tono desenfadado y familiar, Beatriz Caballero narra las peripecias de Codazzi y consigue transmitirle al lector la apasionante aventura que fue su vida. Este libro relata la vida del italiano a mediados del siglo XIX, desde su infancia en Lugo, para pasar a ser soldado de Napoleón en su adolescencia, a aventurarse como pirata y luego desembarcar en América para participar en la independencia de la Nueva Granada y emprender la Comisión Corográfica. ',
                    alt: 'Las siete vidas de Agustín Codazzi',
                    url: '/book/diatres/las-siete-vidas-de-agustin-codazzi.pdf',
                    imgCaratula: "/image/imgbooks/diatres/las-siete-vidas-de-agustin.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: 'La guerra que salvó mi vida',
                    description: 'Ada tiene nueve años y su madre nunca le ha permitido salir de su habitación, ya que nació con un pie zambo que le impide caminar. Su única conexión con el mundo es su hermano, Jamie, y la pequeña ventana de un tercer piso por la que ve el mundo. Irónicamente, gracias a la Segunda Guerra Mundial, la vida de Ada cambiará para siempre: escapa de su mamá, de las bombas de Hitler y de la prisión de su habitación. Pero, ¿qué pasará cuando la guerra termine y deba regresar a casa con su madre? Una narración histórica y, al mismo tiempo, un relato dolorosamente encantador sobre cómo se puede encontrar una familia en lugares inesperados.',
                    alt: 'La guerra que salvó mi vida',
                    url: '/book/diatres/la-guerra-que-salvo-mi-vida.pdf',
                    imgCaratula: "/image/imgbooks/diatres/La-guerra-que-salvo-mi-vida.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'La muda',
                    description: 'En un barrio pobre, dos hermanos sobrellevan una infancia difícil. Desatendidos por su madre, viven con su abuela, cuya sombra autoritaria los sigue a todas partes. Solo la fantasía y el amor fraterno les ayudan a soportar el abandono y el miedo. Pero un día, dentro de un carro destartalado encuentran una gallina. Desde ese momento, diario visitan al ave a escondidas para cuidarla y alimentarla, y eso le da un sentido diferente a sus vidas.',
                    alt: 'La muda',
                    url: '/book/diatres/la-muda.pdf',
                    imgCaratula:"/image/imgbooks/diatres/la-muda.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'La gran Gilly Hopkins',
                    description: 'Gilly Hopkins tiene once años. Desde muy pequeña ha vivido con diferentes familias, ya que su madre nunca se ha ocupado de ella. Debido a su carácter rebelde, todos los intentos de adopción han fracasado. Cuando llega a casa de la señora Trotter, mujer sencilla y cordial, la niña la rechaza, pero poco a poco, a fuerza de cariño y comprensión, Gilly comienza a querer a su nueva familia.',
                    alt: 'La gran Gilly Hopkins',
                    url: '/book/diatres/la-gran-gilly-hopkins.pdf',
                    imgCaratula: "/image/imgbooks/diatres/la-gran-gilly.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'Fortunato',
                    description: 'El sueño de Fortunato es llegar a España. En las laderas del Cocuy, la Vuelta a Colombia se atraviesa en su camino. El muchacho de ruana y sombrero avanza como una bala, al ritmo de los ciclistas profesionales.',
                    alt: 'Fortunato',
                    url: '/book/diatres/fortunato.pdf',
                    imgCaratula: "/image/imgbooks/diatres/fortunato.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'Martina y la carta del monje Yukio',
                    description: 'Cuando Martina llega Nueva York a casa de su papá tras mucho tiempo sin verlo, no solo lo encuentra a él muy diferente, sino que todo le resulta nuevo y sorpresivo: los paisajes, la gente, el idioma. Martina comprenderá que las circunstancias pueden moldear el carácter y los sentimientos. Afortunadamente conoce a alguien que le ayudará a sobrellevar la nueva situación: su vecino, el monje Yukio.',
                    alt: 'martina y la carta del monje Yukio',
                    url: '/book/diatres/martina-y-la-carta-del-monje-yukio.pdf',
                    imgCaratula: "/image/imgbooks/diatres/martina-monje-yukio.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'Temple Teyuna, el infierno verde',
                    description: 'Desde pequeña, Temple ha tenido dos sueños: conocer a su padre y tener una gran aventura. Ahora, con 15 años, está a punto de cumplir ambos. Un viaje inesperado la llevará a reencontrarse con su padre y a internarse en la sierra colombiana para descubrir la ciudad Teyuna. Sin embargo, Temple comprenderá que cumplir sus deseos no es gratuito y que, en este caso, vivir una aventura implica arriesgar lo que ella más ama.',
                    alt: 'Temple Teyuna, el infierno verde',
                    url: '/book/diatres/temple.pdf',
                    imgCaratula:"/image/imgbooks/diatres/tapa-temple.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'Fuera de norma',
                    description: 'Reúne los más importantes artículos , cartas y ensayos referentes a los derechos de las mujeres y a los movimientos feministas en Hispanoamérica desde el siglo XVII hasta mediados del siglo XX. Sor Juana Inés de la Cruz, Emilia Pardo Bazán, Gabriela Mistral y Victoria Ocampo son algunas de las once mujeres que contribuyeron a la reflexión y a la discusión de género en diferentes países de habla hispana.',
                    alt: 'Fuera de norma',
                    url: '/book/diatres/fuera-de-norma.pdf',
                    imgCaratula: "/image/imgbooks/diatres/fuera-de-norma.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'Rompecabezas',
                    description: 'Mora es una chica de once años que vive con su abuela y su gata. Tiene un grupo de amigas llamadas “Las Chicas de Siberia” con las que comparte horas de clase, juegos y charlas. También están Juan, su primo inseparable, y Dani, el chico de sus sueños, con quienes ella descubre la aventura y el rock. Pero su historia se ve atravesada por secretos y ausencias. Algunas piezas no encajan en el rompecabezas de su vida.',
                    alt: 'Rompecabezas',
                    url: '/book/diatres/rompecabezas.pdf',
                    imgCaratula: "/image/imgbooks/diatres/rompecabezas.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'Cuando Hitler robó el conejo rosa',
                    description: 'La llegada de Hitler al poder va a cambiar radicalmente la vida de Anna y su familia. En su huida del horror nazi deberán abandonar su país y dejar atrás muchas cosas queridas, como su conejo de peluche. Con él también quedará su infancia.',
                    alt: 'Cuando Hitler robó el conejo rosa',
                    url: '/book/diatres/cuando-hitler-robo-el-conejo-rosa.pdf',
                    imgCaratula: "/image/imgbooks/diatres/cuando-hitler.jpg",
                    eventHover: false,
                },
            ]
        },
        mounted() {
            /* this.intervalClock = setInterval( () => {
                this.initClock();
            }, 1000); */
            this.intervalClock = setInterval( () => {
                this.changeBackgroudPage();
            }, 30000);
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
        //background-image: url("/image/background-day-three.jpg");
        background-image: url("/image/imgbackground/secundaria.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
    }
    .main-background-book {
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

    /* BEGIN: estilos para libros */
    .class-position {
        position: absolute;
        //border: 1px solid red;
        cursor: pointer;
    }


    div#book-1 {
        top: 17%;
        left: 4%;
        height: 11%;
        width: 9%;
    }
    div#book-2 {
        top: 28.6%;
        left: 4%;
        height: 12%;
        width: 10%;
    }
    div#book-3 {
        top: 16%;
        left: 45.6%;
        height: 9.5%;
        width: 7.5%;
    }
    div#book-4 {
        top: 25.7%;
        left: 45.5%;
        height: 8.5%;
        width: 7%;
    }
    div#book-5 {
        top: 34.7%;
        left: 45.5%;
        height: 9%;
        width: 7%;
    }
    div#book-6 {
        top: 45%;
        left: 9%;
        height: 11%;
        width: 8%;
    }
    div#book-7 {
        top: 45%;
        left: 20%;
        height: 11%;
        width: 8.5%;
    }
    div#book-8 {
        top: 45.8%;
        left: 31%;
        height: 10%;
        width: 8%;
    }
    div#book-9 {
        top: 46%;
        left: 40.4%;
        height: 10%;
        width: 7%;
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
        left: 47.3%;
        height: 11.2%;
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
        width: auto;
        height: 100%;
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
            background-image: url("/image/imgbackground/movil/secundaria-1.png");
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
            top: 16%;
            left: 0%;
            height: 12%;
            width: 11%;
        }
        div#book-2 {
            left: 0%;
            height: 13%;
            width: 11%;
        }
        div#book-3 {
            top: 15%;
            left: 44%;
            height: 9.5%;
            width: 9%;
        }
        div#book-4 {
            left: 44%;
            width: 9%;
        }
        div#book-5 {
            left: 44%;
            width: 9%;
        }
        div#book-6 {
            top: 44%;
            left: 5%;
            height: 12%;
            width: 10%;
        }
        div#book-7 {
            top: 44%;
            left: 17%;
            height: 12%;
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
            left: 54.77%;
            height: 10.7%;
            width: 10%;
        }
        div#book-13 {
            top: 59%;
            left: 71%;
            height: 10.3%;
            width: 10%;
        }
        div#book-14 {
            top: 63.5%;
            left: 47.3%;
            height: 13%;
            width: 9%;
        }
        div#book-15 {
            top: 63%;
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
            background-image: url("/image/imgbackground/movil/secundaria-2.png");
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
    @media (min-width: 1400px) {

    }
</style>
