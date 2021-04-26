<template>
    <div>
        <div class="container-fluid main-view">

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-one">
                        <!-- STAR: posición de los libros -->
                        <div>
                        <div class="class-position" id="book-1">

                        </div>
                        <div class="class-position" id="book-2">

                        </div>
                        <div class="class-position" id="book-3">

                        </div>
                        <div class="class-position" id="book-4">

                        </div>
                        <div class="class-position" id="book-5">

                        </div>
                        <div class="class-position" id="book-6">

                        </div>
                        <div class="class-position" id="book-7">

                        </div>
                        <div class="class-position" id="book-8">

                        </div>
                        <div class="class-position" id="book-9">

                        </div>
                        <div class="class-position" id="book-10">

                        </div>
                        <div class="class-position" id="book-11">

                        </div>
                        <div class="class-position" id="book-12">

                        </div>
                        <div class="class-position" id="book-13"
                            @click="clickShowViewInfoBook(slides[0])"
                            @mouseover="slides[0].eventHover = true"
                            @mouseleave="slides[0].eventHover = false">
                            <img v-if="slides[0].eventHover" :src="slides[0].src" alt="slides[0].alt">
                        </div>
                        <div class="class-position" id="book-14">

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
                                            @click="eventShowIframeBook(slides[0])"
                                            src="/image/books/book-1.jpg" alt="img">
                                    </div>
                                    <div class="col-7">
                                        <h3>Título del libro</h3>
                                        <p>Año xx/xx/xxxx</p>
                                        <p>
                                            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                                        </p>
                                        <div class="text-right">
                                            <button id="btn-info-book"
                                                @click="eventShowIframeBook(slides[0])"
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
            }
        },
        methods: {
            clickShowViewInfoBook( book ) {
                this.active = true
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
            /* clickButtonAnimate( data ) {
                this.imgGif = true;
                this.urlBook = data.url;
                this.initBurstVue()

                setTimeout( () => {
                    this.openPDF = !this.openPDF;
                    this.imgGif = false;
                }, 2000);
            }, */
            initBurstVue() {
                // ammount to add on each button press
                const confettiCount = 20
                const sequinCount = 10

                // "physics" variables
                const gravityConfetti = 0.3
                const gravitySequins = 0.55
                const dragConfetti = 0.075
                const dragSequins = 0.02
                const terminalVelocity = 3

                // init other global elements
                const button = document.getElementById('button')
                const canvas = document.getElementById('canvas')
                const ctx = canvas.getContext('2d')
                canvas.width = window.innerWidth
                canvas.height = window.innerHeight
                let cx = ctx.canvas.width / 2
                let cy = ctx.canvas.height / 2

                // add Confetto/Sequin objects to arrays to draw them
                let confetti = []
                let sequins = []

                // colors, back side is darker for confetti flipping
                const colors = [
                    { front : '#7b5cff', back: '#6245e0' }, // Purple
                    { front : '#b3c7ff', back: '#8fa5e5' }, // Light Blue
                    { front : '#5c86ff', back: '#345dd1' }  // Darker Blue
                ]

                // helper function to pick a random number within a range
                let randomRange = (min, max) => Math.random() * (max - min) + min

                // helper function to get initial velocities for confetti
                // this weighted spread helps the confetti look more realistic
                let initConfettoVelocity = (xRange, yRange) => {
                    const x = randomRange(xRange[0], xRange[1])
                    const range = yRange[1] - yRange[0] + 1
                    let y = yRange[1] - Math.abs(randomRange(0, range) + randomRange(0, range) - range)
                    if (y >= yRange[1] - 1) {
                        // Occasional confetto goes higher than the max
                        y += (Math.random() < .25) ? randomRange(1, 3) : 0
                    }
                    return {x: x, y: -y}
                }

                // Confetto Class
                function Confetto() {
                    this.randomModifier = randomRange(0, 99)
                    this.color = colors[Math.floor(randomRange(0, colors.length))]
                    this.dimensions = {
                        //x: randomRange(5, 9),
                        x: randomRange(7, 9),
                        //y: randomRange(8, 15),
                        y: randomRange(11, 15),
                    }
                    this.position = {
                        x: randomRange(canvas.width/2 - button.offsetWidth/4, canvas.width/2 + button.offsetWidth/4),
                        y: randomRange(canvas.height/2 + button.offsetHeight/2 + 8, canvas.height/2 + (1.5 * button.offsetHeight) - 8),
                    }
                    this.rotation = randomRange(0, 2 * Math.PI)
                    this.scale = {
                        x: 1,
                        y: 1,
                    }
                    this.velocity = initConfettoVelocity([-9, 9], [6, 11])
                }
                Confetto.prototype.update = function() {
                    // apply forces to velocity
                    this.velocity.x -= this.velocity.x * dragConfetti
                    this.velocity.y = Math.min(this.velocity.y + gravityConfetti, terminalVelocity)
                    this.velocity.x += Math.random() > 0.5 ? Math.random() : -Math.random()

                    // set position
                    this.position.x += this.velocity.x
                    this.position.y += this.velocity.y

                    // spin confetto by scaling y and set the color, .09 just slows cosine frequency
                    this.scale.y = Math.cos((this.position.y + this.randomModifier) * 0.09)
                }

                // Sequin Class
                function Sequin() {
                    this.color = colors[Math.floor(randomRange(0, colors.length))].back,
                    this.radius = randomRange(1, 2),
                    this.position = {
                        x: randomRange(canvas.width/2 - button.offsetWidth/3, canvas.width/2 + button.offsetWidth/3),
                        y: randomRange(canvas.height/2 + button.offsetHeight/2 + 8, canvas.height/2 + (1.5 * button.offsetHeight) - 8),
                    },
                    this.velocity = {
                        x: randomRange(-6, 6),
                        y: randomRange(-8, -12)
                    }
                }
                Sequin.prototype.update = function() {
                    // apply forces to velocity
                    this.velocity.x -= this.velocity.x * dragSequins
                    this.velocity.y = this.velocity.y + gravitySequins

                    // set position
                    this.position.x += this.velocity.x
                    this.position.y += this.velocity.y
                }

                for (let i = 0; i < confettiCount; i++) {
                    confetti.push(new Confetto())
                }
                for (let i = 0; i < sequinCount; i++) {
                    sequins.push(new Sequin())
                }

                let render = () => {
                    ctx.clearRect(0, 0, canvas.width, canvas.height)

                    confetti.forEach((confetto, index) => {
                        let width = (confetto.dimensions.x * confetto.scale.x)
                        let height = (confetto.dimensions.y * confetto.scale.y)

                        // move canvas to position and rotate
                        ctx.translate(confetto.position.x, confetto.position.y)
                        ctx.rotate(confetto.rotation)

                        // update confetto "physics" values
                        confetto.update()

                        // get front or back fill color
                        ctx.fillStyle = confetto.scale.y > 0 ? confetto.color.front : confetto.color.back

                        // draw confetto
                        ctx.fillRect(-width / 2, -height / 2, width, height)

                        // reset transform matrix
                        ctx.setTransform(1, 0, 0, 1, 0, 0)

                        // clear rectangle where button cuts off
                        if (confetto.velocity.y < 0) {
                        ctx.clearRect(canvas.width/2 - button.offsetWidth/2, canvas.height/2 + button.offsetHeight/2, button.offsetWidth, button.offsetHeight)
                        }
                    })

                    sequins.forEach((sequin, index) => {
                        // move canvas to position
                        ctx.translate(sequin.position.x, sequin.position.y)

                        // update sequin "physics" values
                        sequin.update()

                        // set the color
                        ctx.fillStyle = sequin.color

                        // draw sequin
                        ctx.beginPath()
                        ctx.arc(0, 0, sequin.radius, 0, 2 * Math.PI)
                        ctx.fill()

                        // reset transform matrix
                        ctx.setTransform(1, 0, 0, 1, 0, 0)

                        // clear rectangle where button cuts off
                        if (sequin.velocity.y < 0) {
                        ctx.clearRect(canvas.width/2 - button.offsetWidth/2, canvas.height/2 + button.offsetHeight/2, button.offsetWidth, button.offsetHeight)
                        }
                    })

                    // remove confetti and sequins that fall off the screen
                    // must be done in seperate loops to avoid noticeable flickering
                    confetti.forEach((confetto, index) => {
                        if (confetto.position.y >= canvas.height) confetti.splice(index, 1)
                    })
                    sequins.forEach((sequin, index) => {
                        if (sequin.position.y >= canvas.height) sequins.splice(index, 1)
                    })

                    window.requestAnimationFrame(render)
                }

                // kick off the render loop
                render()
            }
        },
        created() {
            /* Lista de libros */
            this.slides = [
                {
                    title: 'book No. 1',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola1',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/book-color.png",
                    eventHover: false,
                },
                {
                    title: 'book No. 2',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'hola2',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-2.png",
                    eventHover: false,
                },
                {
                    title: 'book No. 3',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.',
                    alt: 'hola3',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-3.jpg",
                    eventHover: false,
                },
                { title: 'book No. 4',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola4',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-4.jpg",
                    eventHover: false,
                },
                {
                    title: 'book No. 5',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'hola5',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-5.jpg",
                    eventHover: false,
                },
                {
                    title: 'book No. 6',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.',
                    alt: 'hola6',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-6.jpg",
                    eventHover: false,
                },
                {
                    title: 'book No. 7',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola7',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-7.png",
                    eventHover: false,
                },
            ]
        }
    }
</script>

<style scoped lang="scss">
    /* Start estilos para el cursor */
    /* * {
        cursor: url(https://cur.cursors-4u.net/cursors/cur-2/cur196.ani),
        url(https://cur.cursors-4u.net/cursors/cur-2/cur196.png),
        auto !important;
    } */ /* End estilos para el cursor */


    .main-view {
        background-image: url("/image/backgraund-diy-one.jpg");
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
        height: 80%;
    }

    /* STAR: estilos para libros */
    .class-position {
        position: absolute;
        border: 1px solid red;
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
        top: 25.3%;
        left: 46%;
        height: 8.5%;
        width: 6.3%;
    }
    div#book-4 {
        top: 34.7%;
        left: 46%;
        height: 8%;
        width: 6.4%;
    }
    div#book-5 {
        top: 46%;
        left: 10.5%;
        height: 10%;
        width: 7%;
    }
    div#book-6 {
        top: 46.5%;
        left: 20.5%;
        height: 9%;
        width: 7.6%;
    }
    div#book-7 {
        top: 47.3%;
        left: 31.2%;
        height: 8%;
        width: 7%;
    }
    div#book-8 {
        top: 47.8%;
        left: 40.6%;
        height: 7.6%;
        width: 6.5%;
    }
    div#book-9 {
        top: 47%;
        left: 49.4%;
        height: 8.5%;
        width: 6.3%;
    }
    div#book-10 {
        top: 60%;
        left: 41.4%;
        height: 11.2%;
        width: 8.5%;
    }
    div#book-11 {
        top: 60.2%;
        left: 54.77%;
        height: 10.7%;
        width: 8.5%;
    }
    div#book-12 {
        top: 60.2%;
        left: 54.77%;
        height: 10.7%;
        width: 8.5%;
    }
    div#book-13 {
        top: 63.5%;
        left: 47.6%;
        height: 11.7%;
        width: 8.5%;
    }
    div#book-14 {
        top: 63%;
        left: 62.3%;
        height: 11.2%;
        width: 8.5%;
    }
    /* END: estilos para libros */


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
        margin: 20% 0 0 0;
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
