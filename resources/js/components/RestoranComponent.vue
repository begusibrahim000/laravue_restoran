<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Restoran</strong>
                    <a href="/logout" v-on:click="swalLogout()" class="btn btn-danger" style="margin-left:78%;">Logout</a>
                </div>

                <div class="card-body">
                    <!-- Isi Content Restoran -->
                    <div class="row">
                        <div class="col-md-5">
                            <a href="/tambahOpsi" class="btn btn-primary">Tambah Opsi Tambahan</a>
                        </div>
                        <div class="col-md-7">
                            <div v-if="restoran.idOutlet">
                                <div v-if="restoran.idOutlet[0] > 0">
                                    <ul v-for="(outlet, index) in restoran.idOutlet">
                                        <li v-if="outlet === '1'">Outlet 1 : Abra Warteg Bekasi</li>
                                        <li v-if="outlet === '2'">Outlet 2 : Indah Warteg Bandung</li>
                                        <li v-if="outlet === '3'">Outlet 3 : Andi Warteg Yogyakarta</li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <br><br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Nama Set</th>
                          <th scope="col">Opsi Tambahan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                            <td v-if="restoran.idAccount == 1">
                                Budi
                            </td>
                            <td>
                                <div v-for="resto in restoran.arrProduct">
                                    {{resto.nmProduct}},
                                </div>
                                <div v-for="im in restoran.idModif">
                                    {{im}},
                                </div>
                                <a href="/tambahkanKeProduk" class="btn btn-success">Tambahkan ke Produk</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>    
                    <!-- Akhir Isi Content Restoran -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                restoran: [],
            }
        },

        mounted() {
            this.getDataRestoran()
        },

        methods: {
            getDataRestoran() {
                axios.get('http://localhost:3000/response')
                .then(response => this.restoran = response.data)
                .catch(error => console.log(`getDataResotran : ${error}`));
            }
        },

        computed: {
            swalLogout() {
                Swal.fire({
                    title: 'Anda yakin mau keluar ? ',
                    icon: 'warning',
                    showCloseButton: true
                });
            }
        },
    }
</script>
