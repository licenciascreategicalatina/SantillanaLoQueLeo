<template>
    <div class="container-fluid" style="background: #B18E61;">

        <h3 class="text-center color-white font-weight-bold pt-5 mb-3 color-white" style="font-size: 3rem;">
            PROGRAMA
        </h3>

        <p class="text-center">
            <img src="/image/line-book.png" alt="img dialog">
        </p>

        <div id="content-programa">
            <div class="row">
                <div class="col-4 text-center color-white">
                    <h1 class="font-weight-bold">3:30</h1>
                    <span>Bienvenida</span>
                </div>
                <div class="col-4 text-center">
                    <h1 class="font-weight-bold">4:30</h1>
                    <span>Conferencia magistral <br>Julieta Pinasco</span>
                </div>
                <div class="col-4 text-center color-white">
                    <h1 class="font-weight-bold">6:45</h1>
                    <span>Taller <br>Raquel Cuperman</span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-4 text-center">
                    <h1 class="font-weight-bold">3:35</h1>
                    <span>Cata de libros</span>
                </div>
                <div class="col-4 text-center color-white">
                    <h1 class="font-weight-bold">5:15</h1>
                    <span>Taller <br>Alejandra Jaramillo</span>
                </div>
                <div class="col-4 text-center">
                    <h1 class="font-weight-bold">7:30</h1>
                    <span>Cierre</span>
                </div>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col-4 text-center color-white">
                    <h1 class="font-weight-bold">4:15</h1>
                    <span>¿Qué pasó en la cata? <br>Los profesores lo cuentan</span>
                </div>
                <div class="col-4 text-center">
                    <h1 class="font-weight-bold">6:00</h1>
                    <span>Conferencia magistral <br>Eduardo Escallón</span>
                </div>
                <div class="col-4 text-center">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.color-white {
    color: #fff;
}
#content-programa {
    font-size: 1.8rem;
    font-weight: 600;
}

</style>
