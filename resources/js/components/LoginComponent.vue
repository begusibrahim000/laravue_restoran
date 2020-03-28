<template>
    <div class="row justify-content-center">
        <div class="col-md-6 offset-md-6 mt-5">
            <div class="card">
                <div class="card-header">Login untuk pembeli</div>

                <div class="card-body">
                 <!-- Form Login -->
                    <form action="/login" method="GET">
                      <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" name="email" v-model="email" v-bind:class="{'is-invalid' : validasiEmail }" id="email" placeholder="Ketik email anda disini :)">
                      </div>
                      <small id="email" class="form-text text-muted">Inputan harus berupa format email</small>
                      <div class="form-group mt-3">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" name="password" v-model="password" v-bind:class="{'is-invalid' : validasiPassword }" id="password" placeholder="Ketik password anda disini :)">
                        <small id="email" class="form-text text-muted">Inputan tidak boleh lebih dari 4 karakter</small>
                      </div>
                      <button type="submit" name="login" class="btn btn-primary">Log In</button>
                    </form>
                <!-- Form Login -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: ''
            }
        },

        computed: {
            // JIKA VALIDASI INI SEMUA BERHASIL LOLOS MAKA DIARAHKAN KE route::get('/login')
            validasiEmail() {
                var codeFormatEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                // jika format email benar atau cocok maka error tidak di tampilkan
                if(codeFormatEmail.test(this.email) || this.email.length === 0) {
                    return false;
                }

                return true;
            },

            validasiPassword() {
                // jika panjang carakter password lebh dari sama dengan 5 maka munculkan error
                if(this.password.length >= 5) {
                    return true;
                }

                return false;
            }
        }
    }
</script>
