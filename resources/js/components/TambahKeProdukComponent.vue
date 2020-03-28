<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Produk / Detail</strong>
                    <a href="/logout" v-on:click="swalLogout()" class="btn btn-danger" style="margin-left:65%;">Logout</a>
                </div>

                <div class="card-body">
                    <!-- Isi Content Restoran -->
                   <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Opsi</th>
                          <th scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(resto,index) in restoran.arrProduct">
                          <th>{{index + 1}} .</th>
                          <td>{{resto.nmProduct}}</td>
                          <td ref="harga" v-if="resto.nmProduct === 'Nasi Goreng'">10.000</td>
                          <td ref="harga" v-if="resto.nmProduct === 'Nasi Campur'">15.000</td>
                        </tr>
                        <tr v-for="(resto2, index) in restoran.idModif">
                            <td>{{index + 3 }}</td>
                            <td>{{resto2}}</td>
                            <td ref="harga" v-if="resto2 === 'Kerupuk Bawang'">1000</td>
                            <td ref="harga" v-if="resto2 === 'Kerupuk Udang'">2000</td>
                            <td ref="harga" v-if="resto2 === 'Kerupuk Sambal'">3000</td>
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
                restoran: []
            }
        },

        mounted() {
            this.getDataRestoran();
        },

        methods: {
            getDataRestoran() {
                axios.get('http://localhost:3000/response')
                .then(response => this.restoran = response.data)
                .catch(error => console.log(`getDataRestoran : ${error}`));
            }
        }
    }
</script>
