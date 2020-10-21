import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Perfil from './components/Perfil.vue';
import Login from './components/Login.vue';
import Historico from './components/Historico.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Home },
        { path: '/perfil', component: Perfil },
        { path: '/login', component: Login },
        { path: '/historico', component: Historico }
    ]
});



new Vue({
    router,
    template: `
   
      <div>  
      <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li ><router-link to="/" >Home</router-link></li>
        <li ><router-link to="/historico"  >Histórico</router-link></li>
        <li ><router-link to="/perfil" >Perfil</router-link></li> 
        <li ><router-link to="/login" >Login</router-link></li>
        </ul>
      </div>
    </nav>
        
        <router-view class="view"></router-view>
      </div>
      
    `
}).$mount('#app');

export default {

}