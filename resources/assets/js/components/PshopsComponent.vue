


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

<preferred :name="shop.name" :picture="shop.picture" @supp="supp(shop.id)"></preferred>




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
info: {
name: '',
city: '',
type: '',
lat:'',
lng:'',
email:'',
picture:''

},



} },




mounted() {

this.axios.get("http://localhost:8000/api/Preshop?api_token="+token).then((response) => {

this.shops = response.data;




});
},

methods:{



supp(id){


this.axios.delete("http://localhost:8000/api/Preshop/"+id+"?api_token="+token).then((response) => {

window.location.reload();



})
.catch(function (error) {
console.log(error.response)  });






 }


}

}


</script>
