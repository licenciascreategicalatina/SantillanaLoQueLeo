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
                               <!--  <embed :src="urlBook"
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
                                    <a id="pdf-download" href="/book/pdf-programa.pdf" download="Programa">
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
                                   <!--  <iframe id="iframe-video" width=""
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
                                        allowfullscreen>
                                    </iframe>
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
                                :src="urlChat"
                                :class="{'content-chat-opacity' : openChatIcon}"
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
                    title: 'Perro callejero',
                    description: 'En la calle vive un perro abandonado. Un perro rojo ira, rojo sangre. Un día, se encuentra con una niña que quiere jugar con él. No lo persigue ni le tira piedras, como hacen los otros. El perro no reacciona, pero, con el paso del tiempo, extraña a la niña y al sonido de la pelota, y anhela que vuelva. Entonces, un día oye el rebote de una pelota. No duda en seguir el sonido instintivamente, corre y corre y atraviesa la ciudad, el bosque, y llega por fin donde está la niña, quien no tuvo miedo de él, quien vio más allá de su color rojo y su rabia, quien es como él, de pelo rojo.',
                    alt: 'Perro callejero',
                    url: '/book/diados/perro-callejero.pdf',
                    imgCaratula:"/image/imgbooks/diados/perro-callejero.jpg",
                    eventHover: false,
                },
                {
                    id: 2,
                    title: 'Una idea toda azul',
                    description: '“Este es el primer conjunto de cuentos maravillosos que escribió Marina Colasanti cuando descubrió el don de entender la vida a través de la lengua de las hadas y creó un universo poético inconfundible. Desde su publicación en Brasil, en 1978, este libro fascinó a los lectores de todas las edades y se convirtió en un clásico de la literatura infantil contemporánea”.',
                    alt: 'Una idea toda azul',
                    url: '/book/diados/idea-toda-azul.pdf',
                    imgCaratula: "/image/imgbooks/diados/idea-toda-azul.jpg",
                    eventHover: false,
                },
                {
                    id: 3,
                    title: 'Los gatos (y gatitos) del señor Petersand',
                    description: 'Isla Luciérnaga está llena de gatos que el Señor Petersand cuida todo el año y que a los veraneantes les encanta adoptar durante las vacaciones.Después de una visita al médico de la ciudad el señor Petersand regresa a la isla y no encuentra ni un solo gato. ¿Dónde están los gatos (y gatitos) del señor Petersand?',
                    alt: 'Los gatos (y gatitos) del señor Petersand',
                    url: '/book/diados/los-gatos-del-señor-petersand.pdf',
                    imgCaratula: "/image/imgbooks/diados/petersand.jpg",
                    eventHover: false,
                },
                {
                    id: 4,
                    title: 'Flor de Luna y el centavo de oro',
                    description: 'Una pequeña niña china trabaja cargando paquetes en la bahía de Hong Kong. Un día una misteriosa anciana le da un centavo de oro por su ayuda. Ni Flor de Luna, ni su madre conocen el valor de la extraña moneda, pero la buena suerte apenas comienza. Una conmovedora historia sobre la fortuna que acompaña a los corazones honestos.',
                    alt: 'Flor de Luna',
                    url: '/book/diados/flor-de-luna.pdf',
                    imgCaratula: "/image/imgbooks/diados/flor-de-luna.jpg",
                    eventHover: false,
                },
                {
                    id: 5,
                    title: 'El búho que no podía dormir',
                    description: 'Louis Slobodkin nos cuenta la historia de un pequeño búho con insomnio. Sus amigos del bosque le sugieren todo tipo de poses para poder dormir, pero nada parecer ayudar al pobre búho a conciliar el sueño.',
                    alt: 'El búho que no podía dormir',
                    url: '/book/diados/el-buho-que-no-podia-dormir.pdf',
                    imgCaratula:"/image/imgbooks/diados/buho-dormir.jpg",
                    eventHover: false,
                },
                {
                    id: 6,
                    title: 'Los fantasmas huelen a vainilla',
                    description: 'Hay días en que el mundo se pone de cabeza, se quema el horno y papá se queda sin trabajo. En esta segunda entrega de las historias de Manuela nuestra protagonista se enfrenta a unas vacaciones de lo más extrañas. Aldo, nuestro amigo fantasma, no contesta. Trueno parece haber desaparecido y Xavier y Elvira se han inscrito a una academia que resulta no ser lo  que aparenta.',
                    alt: 'Los fantasmas huelen a vainilla',
                    url: '/book/diados/los-fantasmas-huelen-a-vainilla.pdf',
                    imgCaratula: "/image/imgbooks/diados/los-fantasmas-huelen-a-vainilla.jpg",
                    eventHover: false,
                },
                {
                    id: 7,
                    title: 'Diario de un suplente',
                    description: 'El fútbol es un asunto muy importante en la vida de los hermanos Daniel y Joaquín;es una dicha que corpanten y gozan juntos. \nUn día, en un partido en la cancha del barrio, Joaquín cae al piso y no se levanta. Ocurre un terrible accidente que cambia sus vidas.La unión familiar, el amor y el fútbol, serán las herramientas para superar la tragedia y volver a sonreír.',
                    alt: 'Diario de un suplente',
                    url: '/book/diados/diario-de-un-suplente.pdf',
                    imgCaratula: "/image/imgbooks/diados/diario-de-un-suplente.jpg",
                    eventHover: false,
                },
                {
                    id: 8,
                    title: 'El perfume del viento',
                    description: 'Entre el perfume del viento y el recuerdo de esas tardes eternas que son patrimonio de la infancia y la vejez, Triunfo Arciniegas, uno de los autores más versátiles de la literatura colombiana, propicia un encuentro entre generaciones alrededor de esas preguntas difíciles que alguna vez todos tenemos que hacer. Y el ilustrador Juan Camilo Mayorga se une a la conversación para situar ese universo poético en un lugar donde es posible escudriñar nuevos detalles, historias y emociones.',
                    alt: 'El perfume del viento',
                    url: '/book/diados/el-perfume-del-viento.pdf',
                    imgCaratula: "/image/imgbooks/diados/viento-triunfo.jpg",
                    eventHover: false,
                },
                {
                    id: 9,
                    title: 'Sobre un rayo de luz',
                    description: 'Un niño avanza rápidamente en su bicicleta por el campo. Pero en su mente, se ve viajando sobre un rayo de luz a una velocidad inimaginable. Esta mente brillante dará al mundo algunas de las ideas más revolucionarias que se hayan concebido. Desde su infancia hasta su vida adulta como el genio reconocido por haber iluminado la manera en que comprendemos el Universo, Jennifer Berne y Vladimir Radunsky invitan al lector a viajar junto con Albert Einstein en un recorrido por la curiosidad, la risa y el descubrimiento científico.',
                    alt: 'Sobre un rayo de luz',
                    url: '/book/diados/un-rayo-de-luz.pdf',
                    imgCaratula:"/image/imgbooks/diados/un-rayo-de-luz.jpg",
                    eventHover: false,
                },
                {
                    id: 10,
                    title: 'Querido Bill',
                    description: 'Durante todo un año escolar, un intercambio de cartas se instaló entre dos niños que viven en las antípodas. Oscar, la pequeña hormiga y Bill, el pulpo. A pesar de sus diferencias físicas y de origen, se convierten en verdaderos amigos. El encanto, la sencillez y la veracidad de su correspondencia nos hacen participar de su vida con un verdadero placer... ¡hasta el momento de la sorpresa final!',
                    alt: 'Querido bill',
                    url: '/book/diados/querido-bill.pdf',
                    imgCaratula: "/image/imgbooks/diados/querido-bill.jpg",
                    eventHover: false,
                },
                {
                    id: 11,
                    title: 'Allá y Aquí',
                    description: '"Érase una vez una casa. Mi casa..." La escritora Carolina Moreyra puso en palabras una experiencia difícil y el ilustrador Odilon Moraes la reinventó con imágenes. Así, con dos voces y dos lenguajes, estos autores brasileños construyen un lugar seguro para refugiarse cuando algo se rompe en la casa.',
                    alt: 'Allá y Aquí',
                    url: '/book/diados/alla-y-aqui.pdf',
                    imgCaratula: "/image/imgbooks/diados/alla-y-aqui.jpg",
                    eventHover: false,
                },
                {
                    id: 12,
                    title: 'Marcial y la venganza de los lagartillos',
                    description: 'El gran sueño de Marcial es subirse al tranvía. Un día descubre a un lagartijo y lo amarra a los rieles hasta que el tren pasa y lo mata. Pronto esto se vuelve un pasatiempo. Los lagartijos acuden a la Policía de los lagartos y nombran a Cristian Saurio Verdoso y Lucas Crestas Pintadas como los líderes de la misión para darle una lección a Marcial. Mágicamente, los lagartos toman tamaño humano y se disfrazan para que Marcial comprenda que ellos son sus amigos.',
                    alt: 'marcial y la venganza de los lagartillos',
                    url: '/book/diados/marcial-y-la-venganza-de-los-lagartijos.pdf',
                    imgCaratula: "/image/imgbooks/diados/marcial-y-la-venganza-de-los-lagartijos.jpg",
                    eventHover: false,
                },
                {
                    id: 13,
                    title: 'El corazón del árbol',
                    description: 'Una poeta y un artista plástico se unen en las páginas de este libro para darle forma a la música y textura a las palabras. Rindiéndole homenaje a un poema de Óscar Hahn, los versos de Piedad Bonnett se enredan como raíces en imágenes de Daniel Gómez para demostrarnos que el universo puede estar contenido en la madera de un árbol.',
                    alt: 'El corazón del árbol',
                    url: '/book/diados/corazon-del-arbol.pdf',
                    imgCaratula:"/image/imgbooks/diados/corazon-del-arbol.jpg",
                    eventHover: false,
                },
                {
                    id: 14,
                    title: 'La gata sola',
                    description: '"¿Qué emociones suscita la aparición de una gata en un pueblo que nunca ha visto gatos? La escritora Carolina Sanín parece inventar una nueva lengua para nombrarlas, y el ilustrador Santiago Guevara dibuja el tono y la atmósfera de esos paisajes por los que quizás todos hemos transitado. Una fábula, en el sentido más profundo y actual, que nos conmueve con su belleza, incluso en medio del dolor".',
                    alt: 'La gata sola',
                    url: '/book/diados/la-gata-sola.pdf',
                    imgCaratula: "/image/imgbooks/diados/la-gata.jpg",
                    eventHover: false,
                },
                {
                    id: 15,
                    title: 'Cuentos de Tomás',
                    description: '¿Cuál podrá ser el miedo más grande de Tomás? ¿Qué lo atrapen los niños del conjunto cerrado? ¿Qué por vivir ahora lejos de la casa de Susana no la vaya a volver a ver nunca? ¿Qué sus compañeros de colegio descubranque es pésimo jugador de fútbol, a pesar de su estatura?',
                    alt: 'Cuentos de Tomás',
                    url: '/book/diados/cuentos-de-tomas.pdf',
                    imgCaratula: "/image/imgbooks/diados/cuentos-de-tomas.jpg",
                    eventHover: false,
                }
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
        //background-image: url("/image/background-day-two.jpg");
        background-image: url("/image/imgbackground/primaria.jpg");
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

    /* STAR: estilos para libros */
    .class-position {
        position: absolute;
        //border: 1px solid red;
        cursor: pointer;
    }

    div#book-1 {
        top: 18%;
        left: 4%;
        height: 10%;
        width: 9%;
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
        width: 7%;
    }
    div#book-4 {
        top: 25.7%;
        left: 46%;
        height: 8%;
        width: 7%;
    }
    div#book-5 {
        top: 34.5%;
        left: 46%;
        height: 8.5%;
        width: 7%;
    }
    div#book-6 {
        top: 44%;
        left: 9%;
        height: 12%;
        width: 9%;
    }
    div#book-7 {
        top: 44%;
        left: 20%;
        height: 12%;
        width: 9%;
    }
    div#book-8 {
        top: 46%;
        left: 31%;
        height: 10%;
        width: 8%;
    }
    div#book-9 {
        top: 46%;
        left: 40%;
        height: 10%;
        width: 8%;
    }
    div#book-10 {
        top: 46%;
        left: 49%;
        height: 10%;
        width: 7%;
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
    /* img#img-info-book {
        width: 60%;
        cursor: pointer;
        max-height: 350px;
    } */
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
        top: -8%
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
    @media (min-width: 1400px) {

    }
</style>
