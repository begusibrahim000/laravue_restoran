<template>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah Opsi</strong>
                    <a href="/logout" v-on:click="swalLogout()" class="btn btn-danger" style="margin-left:78%;">Logout</a>
                </div>

                <div class="card-body">
                    <!-- Isi Content Restoran -->
                     <form @submit.prevent="tambahOpsi()" method="POST">
                         <div class="from-group">
                             <label for="Nama Set"><strong>Nama Set</strong></label>
                             <input type="text" value="Budi" class="form-control" id="Nama Set" readonly>
                         </div>
                         <div class="from-group mt-5">
                                <strong>Outlet</strong>
                                <hr>
                                <input type="checkbox" id="1" value="1" v-model="form.idOutlet">
                                <label for="1">Outlet 1</label> <br>
                                <input type="checkbox" id="2" value="2" v-model="form.idOutlet">
                                <label for="2">Outlet 2</label> <br>
                                <input type="checkbox" id="3" value="3" v-model="form.idOutlet">
                                <label for="3">Outlet 3</label>
                                <br>
                                <span>Outlet {{  form.idOutlet }}</span>
                         </div>
                         <div class="from-group mt-5">
                                <select v-model="form.idModif" multiple>
                                    <option>Kerupuk Bawang</option>
                                    <option>Kerupuk Udang</option>
                                    <option>Kerupuk Sambal</option>
                                </select>
                            <br>
                            <span>Nama Produk: {{ form.idModif }}</span>
                         </div>
                         <div class="from-group mt-2">
                             <button type="submit" class="btn btn-primary">Tambahkan</button>
                         </div>
                     </form>
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
                form: {
                    "arrModifGrpResult": { // 1
                        "idModifGrp": 1,
                        "nmModifGrp": "Kerupuk",
                        "arrModifOutlet": {
                            "idModifOutlet": "1",
                            "idOutlet": "1"
                        },
                        "arrModifProduct": [
                            {
                                "idModifProduct": "1",
                                "idProduct": "1"
                            },
                            {
                                "idModifProduct": "4",
                                "idProduct": "2"
                            }
                        ],
                        "arrModif": [
                            {
                                "idModif": "1",
                                "nmModif": "Kerupuk Bawang",
                                "priceModif": "1000"
                            },
                            {
                                "idModif": "2",
                                "nmModif": "Kerupuk Udang",
                                "priceModif": "2000"
                            },
                            {
                                "idModif": "3",
                                "nmModif": "Kerupuk Sambal",
                                "priceModif": "3000"
                            }
                        ]
                    },
                    "arrOutlet": { // 2
                        "idOutlet": "1",
                        "nmOutlet": "Abra Warteg Bekasi"
                    },
                    "arrProduct": [ // 3
                        {
                            "idProduct": "1",
                            "idProductOutlet": "1",
                            "nmProduct": "Nasi Goreng",
                            "priceModif": "10.000"
                        },
                        {
                            "idProduct": "2",
                            "idProductOutlet": "1",
                            "nmProduct": "Nasi Campur",
                            "priceModif": "15.000"
                        }
                    ],
                    "idAccount": "1", // 4
                    "token": "2d820eb4de58f6799d98a865ca206bae", // 5
                    "Code": 200, // 6
                    "Type": "Success", // 7
                    "Message": "The request has succeeded", // 8
                    "Description": "HTTP_OK", // 9
                    idModif: [], // 10
                    idOutlet: [] // 11
                }
            }
        },

        methods: {
            tambahOpsi() {
                axios.post('http://localhost:3000/response', this.form)
                .then(() => {
                    this.berhasilTambahOpsi();
                    window.location.href = "/restoran";
                })
                .catch(error => {
                    // this.gagalTambahOpsi()
                    console.log(`Tambah Opsi : ${error}`)
                })
            },
            berhasilTambahOpsi() {
                Swal.fire({
                    title: 'Berhasil menambahkan opsi',
                    icon: 'success'
                });
            },

            gagalTambahOpsi() {
                Swal.fire({
                    title: 'Gagal menambahkan opsi',
                    icon: 'error'
                });
            }
        },

        computed: {
            
        }

    // akhir instan
    }
</script>
