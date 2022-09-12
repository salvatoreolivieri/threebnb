// Importo vue
import Vue from 'vue';

// Importo il router
import VueRouter from 'vue-router';

// Dico a Vue di usare VueRouter
Vue.use(VueRouter);

// Importo i componenti delle rotte
import HomePage from './components/pages/HomePage.vue';
import ApartmentPage from './components/pages/ApartmentPage.vue';
import DashboardPage from './components/pages/DashboardPage.vue';
import SearchPage from './components/pages/SearchPage.vue';

// Creo il Router
const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',

    routes:[
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/dettaglio-appartamento/:id',
            name: 'apartment',
            component: ApartmentPage
        },
        {
            path: '/profilo-utente',
            name: 'dashboard',
            component: DashboardPage
        },
        {
            path: '/ricerca',
            name: 'search',
            component: SearchPage
        },
    ]
});
// Lo esporto per importarlo poi dentro front.js che inizializza vue
export default router;
