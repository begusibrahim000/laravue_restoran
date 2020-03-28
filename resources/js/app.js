require('./bootstrap');

window.Vue = require('vue');
// font awesome
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
 
library.add(faUserSecret)
 
Vue.component('font-awesome-icon', FontAwesomeIcon);
// akhir fonst awesome

// component buatan
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('restoran-component', require('./components/RestoranComponent.vue').default);
Vue.component('tambah-opsi-component', require('./components/TambahOpsiComponent.vue').default);
Vue.component('tambah-ke-produk-component', require('./components/TambahKeProdukComponent.vue').default);
Vue.component('sidebar-component', require('./components/SidebarComponent.vue').default);
// akhir component buatan

const restoran = new Vue({
    el: '#restoran'
});
