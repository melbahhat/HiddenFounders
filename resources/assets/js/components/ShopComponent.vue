<style>
.container { 
display: flex;
flex-wrap: wrap;
}
.card{

margin-top:7% ;

padding:13%;
width: 20rem;
border: none;
border-radius: .5rem;
box-shadow: 0 1px 3px 0 #d4d4d5,0 0 0 1px #d4d4d5;


}



</style><template>

<div class="container">


<div v-for="shop in shops">

<!-- component child defined in app.js  -->

<child :name="shop.name" :picture="shop.picture" @like="like(shop.id)"  ></child>

</div>
<router-view></router-view>


</div>

</template>

<script>
export default {

data() {
return {
shops:[],
shop:[],
 

} },




mounted() {

 
this.axios.get("http://localhost:8000/api/shop?api_token="+token).then((response) => {

this.shops = response.data;
 





});
},

methods: {
like(id){
 

 this.axios.post("http://localhost:8000/api/Preshop?api_token="+token,{

user_id:user,
shop_id:id}).then((response) => {

window.location.reload();



})
.catch(function (error) {
console.log(error.response)  });





}


}

}

</script>
