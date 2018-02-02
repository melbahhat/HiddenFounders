import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import ShopComponent from "./components/ShopComponent.vue";// import components:


import Pshop from "./components/PshopsComponent.vue";



import axios from 'axios';
Vue.use(VueAxios, axios);
Vue.component('paginate', require('vuejs-paginate'));

Vue.component('shop-component', require('./components/ShopComponent.vue'));
// deslare child component

Vue.component('child', {
 props:["name","picture","id"],

 data(){


 	return {
 		IsVisible:true



 	};
 },
 methods:{

  like(id){


    this.$emit('like',id)
  },

  

  hide(){
   this.IsVisible= false;





 }

},


template: `  <div class="card" v-show="IsVisible" >
<h4 class="card-title"> {{name}}</h4>
<img class="card-img-top" :src="picture" alt="Card image cap">
<div class="card-block">
<h4 class="card-title"></h4>


<center><button class = "btn btn-success"  @click="like(id)"> like
</button> | <button class = "btn btn-danger"  id="deletesuccess" @click="hide()"  >dislike </button>



</center>


</div>
</div>`

});


const router = new VueRouter({
  // declare routes


  routes: [

  { path: '/Shops', component: ShopComponent, name:"Shops" },
  { path: '/Pshop', component: Pshop, name:"Pshop" },

  ]
});
const app = new Vue({
  el: '#app',

  router
});

