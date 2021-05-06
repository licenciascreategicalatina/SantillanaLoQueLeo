<template>
    <div>
        <div class="row pt-2">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-success p-50 mb-1">
                            <div class="avatar-content">
                                <i data-feather="eye" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">{{ userOnLine }}</h2>
                        <p class="card-text">Usuarios Online</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-success p-50 mb-1">
                            <div class="avatar-content">
                                <i data-feather="users" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">{{ totalUser }}</h2>
                        <p class="card-text">Usuarios Registrados</p>
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
                totalUser: 0,
                userOnLine: 0,
                interval: '',
                intervalData: '',
            }
        },
        methods: {
            getTotalUser() {
                axios.get('/total-user')
                    .then( resp => {
                        this.totalUser = resp.data.totalUser;
                    })
                    .catch( error => {
                        console.log('error.')
                    });
            },
            getUserOnLine() {
                axios.get('/user-online')
                    .then( resp => {
                        this.userOnLine = resp.data.userOnline;
                    })
                    .catch( error => {
                        console.log('error.')
                    });
            },
        },
        created() {
            this.getTotalUser()
            this.getUserOnLine()
        },
        mounted() {
            this.interval = setInterval( () => {
                console.log('online...')
                this.getUserOnLine()
                loadTableUserOnline();
            }, 35000);

            this.intervalData = setInterval( () => {
                console.log('data...')
                loadTable();
                loadTableBooksSelected();
            }, 60000);
        }
    }
</script>
