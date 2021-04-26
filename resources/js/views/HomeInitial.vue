<template>
    <div>
       <!--  <video autoplay muted loop id="myVideo">
            <source src="/video/library-rigth.mp4" type="video/mp4">
        </video> -->

        <div class="container-fluid main-view">
            <!-- Animación de aves volando -->
            <div class="container-ave">
                <div class="bird-container bird-container--one">
                    <div class="bird bird--one"></div>
                </div>

                <div class="bird-container bird-container--two">
                    <div class="bird bird--two"></div>
                </div>

                <div class="bird-container bird-container--three">
                    <div class="bird bird--three"></div>
                </div>

                <div class="bird-container bird-container--four">
                    <div class="bird bird--four"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="view-iframe-one">
                        <canvas id="canvas"></canvas>

                        <div class="vertical-center">
                            <div class="card card-view">
                                <div class="card-body-text text-center">
                                    <h1 class="text-title animate__animated animate__backInDown animate__slow">Los mejores libros para hoy</h1>
                                    <p class="text-subtitle animate__animated animate__backInLeft animate__slower">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.
                                    </p>

                                    <div class="animate__animated animate__zoomIn animate__slower">
                                        <splide :options="options" has-slider-wrapper>

                                            <splide-slide v-for="slide in slides" :key="slide.src">
                                                <div id="button"><!-- @click="clickButtonAnimate" -->
                                                    <vs-tooltip shadow>
                                                        <vs-card class="main-card" @click="clickButtonAnimate(slide)" type="2">
                                                            <template #title>
                                                                <h3>{{ slide.title }}</h3>
                                                            </template>
                                                            <template #img>
                                                                <img :src="slide.src" alt="slide.alt">
                                                            </template>
                                                            <!-- <template #text>
                                                                <p style="text-align: justify;">{{ slide.title }}</p>
                                                            </template> -->
                                                        </vs-card>

                                                        <template #tooltip>
                                                            <div class="content-tooltip">
                                                                <h4>{{slide.title}}</h4>
                                                                <p style="text-align: justify;">{{slide.description}}</p>
                                                            </div>
                                                        </template>
                                                    </vs-tooltip>
                                                </div>
                                            </splide-slide>
                                        </splide>
                                    </div>
                                </div>

                                <div id="image-gif" v-if="imgGif"
                                    class="animate__animated animate__zoomIn animate__slower">
                                    <img src="/image/book-image.gif" alt="image gif">
                                </div>

                                <div v-if="openPDF" @click="closeIframeBook" id="close-pdf-read"
                                    class="animate__animated animate__fadeInTopLeft animate__slower">
                                    <span class="close-pdf">X</span>
                                </div>
                                <div v-if="openPDF" @click="closeIframeBook" id="pdf-read"
                                    class="animate__animated animate__fadeInTopLeft animate__slower">
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

                    <!-- <div class="bubbles-container">
                        <svg class="bubbles" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 701 1024" style="overflow: visible;">

                            <g class="bubbles-large" stroke-width="7">
                                <g>
                                    <g transform="translate(10 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(373 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(408 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(621 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(179 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                            </g>

                            <g class="bubbles-small" stroke-width="4">
                                <g>
                                    <g transform="translate(147 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(255 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(573 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(429 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(91 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(640 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(321 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(376 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(376 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(497 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                            </g>

                        </svg>
                    </div> -->
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

                    <!-- <div class="bubbles-container">
                        <svg class="bubbles" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 701 1024" style="overflow: visible;">

                            <g class="bubbles-large" stroke-width="7">
                                <g>
                                    <g transform="translate(10 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(373 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(408 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(621 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(179 940)">
                                        <circle cx="35" cy="35" r="35"/>
                                    </g>
                                </g>
                            </g>

                            <g class="bubbles-small" stroke-width="4">
                                <g>
                                    <g transform="translate(147 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(255 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(573 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(429 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(91 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(640 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(321 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(376 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(376 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(497 984)">
                                        <circle cx="15" cy="15" r="15"/>
                                    </g>
                                </g>
                            </g>

                        </svg>
                    </div> -->
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
                listBook: [],
                options: {
                    //type        : 'loop',
                    rewind      : true,
                    perPage     : 3,
                    perMove     : 1,
                    gap         : '1rem',
                    //height      : '12rem',
                    //cover       : true,
                    //autoplay    : true,
                    //pauseOnHover: true,
                    arrows      : 'slider',
                },
                slides: [],
            }
        },
        methods: {
            closeIframeBook() {
                this.openPDF = !this.openPDF;
            },
            clickButtonAnimate( data ) {
                this.imgGif = true;
                this.urlBook = data.url;
                this.initBurstVue()

                setTimeout( () => {
                    this.openPDF = !this.openPDF;
                    this.imgGif = false;
                }, 2000);
            },
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
            this.listBook = [
                '/book/PFC_RogerGimeno.pdf',
                '/book/reconocimiento en tiempo real.pdf',
            ]

            this.slides = [
                {
                    title: 'book No. 1',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola1',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-1.jpg"
                },
                {
                    title: 'book No. 2',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'hola2',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-2.png"
                },
                {
                    title: 'book No. 3',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.',
                    alt: 'hola3',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-3.jpg"
                },
                { title: 'book No. 4',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola4',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-4.jpg"
                },
                {
                    title: 'book No. 5',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.',
                    alt: 'hola5',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-5.jpg"
                },
                {
                    title: 'book No. 6',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos.',
                    alt: 'hola6',
                    url: '/book/reconocimiento en tiempo real.pdf',
                    src:"/image/books/book-6.jpg"
                },
                {
                    title: 'book No. 7',
                    description: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.',
                    alt: 'hola7',
                    url: '/book/PFC_RogerGimeno.pdf',
                    src:"/image/books/book-7.png"
                },
            ]
        }
    }
</script>

<style scoped lang="scss">
    /* Start https://www.cursors-4u.com */
    * {
        cursor: url(https://cur.cursors-4u.net/cursors/cur-2/cur196.ani),
        url(https://cur.cursors-4u.net/cursors/cur-2/cur196.png),
        auto !important;
    } /* End https://www.cursors-4u.com */

    /* Style backgroud video */
    /* #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    } */


    .vs-card-content.type-2 .vs-card:hover {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
        border: 1px solid red;
    }


    /* styles button animate */
    canvas {
        height: 100vh;
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 2;
    }
    /* styles button animate */




    .vs-card__img img {
        height: 250px;
    }


    /* Style content url("/image/buckled-book.jpg");*/
    .main-view {
        background-image: url("/image/buckled-book.png");
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
    .card-view {
        background-color: #fff0;
        border: 1px solid rgb(0 0 0 / 0%);
    }
    .card-body-text {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }
    .text-title {
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
    }
    .text-subtitle {
        color: white;
        font-size: 1.1rem;
        text-align: justify;
        margin: 2rem 0;
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
        //background: rgba(0, 0, 255, 0.151);
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
        /* .vs-card__img img {
            height: 350px;
        } */
    }


    /* Aves volando */
.container-ave {
	z-index: 1;
	position: absolute;
    width: 98%;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 8rem;
	//background-blend-mode: soft-light;
    //padding: 2rem;
}

.bird {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/174479/bird-cells-new.svg);
	background-size: auto 100%;
	width: 88px;
	height: 125px;
	will-change: background-position;

	animation-name: fly-cycle;
	animation-timing-function: steps(10);
	animation-iteration-count: infinite;

	&--one {
		animation-duration: 1s;
		animation-delay: -0.5s;
	}

	&--two {
		animation-duration: 0.9s;
		animation-delay: -0.75s;
	}

	&--three {
		animation-duration: 1.25s;
		animation-delay: -0.25s;
	}

	&--four {
		animation-duration: 1.1s;
		animation-delay: -0.5s;
	}

}

.bird-container {
	position: absolute;
	top: -10%;
	left: -10%;
	transform: scale(0) translateX(-10vw);
	will-change: transform;

	animation-name: fly-right-one;
	animation-timing-function: linear;
	animation-iteration-count: infinite;

	&--one {
		animation-duration: 15s;
		animation-delay: 0;
	}

	&--two {
		animation-duration: 16s;
		animation-delay: 1s;
	}

	&--three {
		animation-duration: 14.6s;
		animation-delay: 9.5s;
	}

	&--four {
		animation-duration: 16s;
		animation-delay: 10.25s;
	}

}

@keyframes fly-cycle {

	100% {
		background-position: -900px 0;
	}

}

@keyframes fly-right-one {

	0% {
		transform: scale(0.3) translateX(-10vw);
	}

	10% {
		transform: translateY(2vh) translateX(10vw) scale(0.4);
	}

	20% {
		transform: translateY(0vh) translateX(30vw) scale(0.5);
	}

	30% {
		transform: translateY(4vh) translateX(50vw) scale(0.6);
	}

	40% {
		transform: translateY(2vh) translateX(70vw) scale(0.6);
	}

	50% {
		transform: translateY(0vh) translateX(90vw) scale(0.6);
	}

	60% {
		transform: translateY(0vh) translateX(110vw) scale(0.6);
	}

	100% {
		transform: translateY(0vh) translateX(110vw) scale(0.6);
	}

}

@keyframes fly-right-two {

	0% {
		transform: translateY(-2vh) translateX(-10vw) scale(0.5);
	}

	10% {
		transform: translateY(0vh) translateX(10vw) scale(0.4);
	}

	20% {
		transform: translateY(-4vh) translateX(30vw) scale(0.6);
	}

	30% {
		transform: translateY(1vh) translateX(50vw) scale(0.45);
	}

	40% {
		transform: translateY(-2.5vh) translateX(70vw) scale(0.5);
	}

	50% {
		transform: translateY(0vh) translateX(90vw) scale(0.45);
	}

	51% {
		transform: translateY(0vh) translateX(110vw) scale(0.45);
	}

	100% {
		transform: translateY(0vh) translateX(110vw) scale(0.45);
	}

}



/*
.container {
	position: relative;
	display: flex;
	align-content: center;
	justify-content: center;
	background: {
		image: linear-gradient(to bottom,  #00c9ff 0%, #92fe9d 100%), url(https://images.unsplash.com/photo-1502726299822-6f583f972e02);
		blend-mode: multiply;
		size: cover;
	}
	overflow: hidden;
} */

/* .bubbles-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    max-width: 15rem;
    transform: translateX(-50%);
	opacity: 0.75;
	overflow: visible;
}

.bubbles {
	width: 100%;
	height: auto;

	circle {
		stroke: white;
		fill: none;
	}

	> g > g:nth-of-type(3n) circle {
		stroke: #87f5fb;
	}

	> g > g:nth-of-type(4n) circle {
		stroke: #8be8cb;
	}

}

.bubbles-large {
	overflow: visible;

	> g {
		transform: translateY(2048px);
		opacity: 0;
		will-change: transform, opacity;
	}

	g:nth-of-type(1) {
		animation: up 6.5s infinite;

		g {
			transform: translateX(350px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(2) {
		animation: up 5.25s 250ms infinite;

		g {
			transform: translateX(450px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(3) {
		animation: up 6s 750ms infinite;

		g {
			transform: translateX(700px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(4) {
		animation: up 5.5s 1.5s infinite;

		g {
			transform: translateX(500px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(5) {
		animation: up 6.5s 4s infinite;

		g {
			transform: translateX(675px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

}

.bubbles-small {
	overflow: visible;

	> g {
		transform: translateY(2048px);
		opacity: 0;
		will-change: transform, opacity;
	}

	g circle {
		transform: scale(0);
	}

	g:nth-of-type(1) {
		animation: up 5.25s infinite;

		g {
			transform: translateX(350px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(2) {
		animation: up 5.75s infinite;

		g {
			transform: translateX(750px);
		}

		circle {
			animation: wobble 3s infinite ease-in-out;
		}

	}

	g:nth-of-type(3) {
		animation: up 5.25s 250ms infinite;

		g {
			transform: translateX(350px);
		}

		circle {
			animation: wobble 3s 250ms infinite ease-in-out;
		}

	}

	g:nth-of-type(4) {
		animation: up 5.75s 325ms infinite;

		g {
			transform: translateX(180px);
		}

		circle {
			animation: wobble 3s 325ms infinite ease-in-out;
		}

	}

	g:nth-of-type(5) {
		animation: up 6s 125ms infinite;

		g {
			transform: translateX(350px);
		}

		circle {
			animation: wobble 3s 250ms infinite ease-in-out;
		}

	}

	g:nth-of-type(6) {
		animation: up 5.13s 250ms infinite;

		g {
			transform: translateX(650px);
		}

		circle {
			animation: wobble 3s 125ms infinite ease-in-out;
		}

	}

	g:nth-of-type(7) {
		animation: up 6.25s 350ms infinite;

		g {
			transform: translateX(480px);
		}

		circle {
			animation: wobble 3s 325ms infinite ease-in-out;
		}

	}

	g:nth-of-type(8) {
		animation: up 7s 200ms infinite;

		g {
			transform: translateX(330px);
		}

		circle {
			animation: wobble 3s 325ms infinite ease-in-out;
		}

	}

	g:nth-of-type(9) {
		animation: up 6.25s 233ms infinite;

		g {
			transform: translateX(230px);
		}

		circle {
			animation: wobble 3s 275ms infinite ease-in-out;
		}

	}

	g:nth-of-type(10) {
		animation: up 6s 900ms infinite;

		g {
			transform: translateX(730px);
		}

		circle {
			animation: wobble 2s 905ms infinite ease-in-out;
		}

	}

}

@keyframes wobble {

	33% {
		transform: translateX(-50px);
	}

	66% {
		transform: translateX(50px);
	}

}

@keyframes up {

	0% {
		opacity: 0;
	}

	10%, 90% {
		opacity: 1;
	}

	100% {
		opacity: 0;
		transform: translateY(-1024px);
	}

} */
</style>
