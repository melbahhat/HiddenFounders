    
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <title> HiddenFigure</title>




 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head>

 <body>
  <div id="app">
    <div class="container">
      <ul class="nav nav-pills">
                     <!-- link to nearby shop 
      <li>  <router-link class="nav-item nav-link active"  to="/Shops">NearBy</router-link></li>
                      link to preferred 

        <li><router-link  class="nav-item nav-link " to="/Pshop">preferred shops</router-link></li>-->
        <li>
          <a href="{{ route('logout') }}"onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>

    <router-view></router-view>

  </div>   </div>  </body>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

          <!-- <script    src="{{ asset('js/script.js') }}"></script>
          -->

          <script src="{{asset('js/app.js')}}"></script>
                 >


          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGxQAdfgXVht5KD5vKPlq8eLt1os4uSBc&libraries=places"
          ></script>
             <!-- google map api url+API key -->
          </html>
