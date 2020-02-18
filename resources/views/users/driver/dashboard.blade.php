<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<div class="row">
    <div class="col-md-8">
    <div id="map"></div>
    </div>
    <div class="col-md-4">

    <div class="jumbotron" style="background-color:#ffffff;">
  <hr>
  <form action="/searchbylocation" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Search parking spaces by location :</label>
    <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter location">
  </div>
    <button type="submit" class="btn btn-sm btn-warning">Search by location</button>
  </form>

  <hr>
  <form action="/searchbytype" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Search parking spaces by vehicle type :</label>
    <input type="text" class="form-control" name="type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter vehicle type">
  </div>
    <button type="submit" class="btn btn-sm btn-warning">Search by vehicle type</button>
  </form>


  <form action = "/driverRequest" method="POST">
    @csrf
  <div class="form-group">
    <label for="parkingspace">Parking Space ID :</label>
    <select class="form-control" name="parkingspace" id="parkingspace">
    @foreach($parkingslots as $parking)
      <option>{{$parking->name}}</option>
    @endforeach
    </select>
    <small id="parkingspace" class="form-text text-muted">You should provide the parking id you decided to request.</small>
  </div>

<input type="hidden" name="parkingId" value="{{$parking->id}}">

  <div class="form-group">
    <label for="vehicles">Vehicle ID :</label>
    <select class="form-control" name="vehicles" id="vehicles">
    @foreach($vehicle as $vehicles)
      <option>{{$vehicles->number}}</option>
    @endforeach
    </select>
    <small id="vehicles" class="form-text text-muted">You should provide the vehicles number you decided to request.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Request Date and Time :</label>
    <input type="datetime-local" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter parking space id">
  </div>

  <button type="submit" class="btn btn-primary" name="time" style="background-color:blueviolet;border-color:blueviolet;">Request Parking Space</button>
</form>


    <img src="{{ URL::asset('images/cars.jpeg')}}" width="450px" height="250px">
    </div>

  
    </div>
</div>

      
<script>
      //creating a variable for map
      var map;
      //initializing a map
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.93194, lng: 79.84778},
          zoom: 13
        });

      //creating markers array
      var markers = <?php echo json_encode($parkingslots); ?>; 

      //calling addMarker function for each Map object
      for(var i = 0;i<markers.length;i++)
      {
        addMarker(markers[i])
      }

      //addMarker function definition
       function addMarker(props){
        var marker = new google.maps.Marker({
        position: {lat:parseFloat(props.latitude),lng:parseFloat(props.longitude)},
        map:map
       });
       if(props.content){
        var InfoWindow = new google.maps.InfoWindow({
         content:'<h1>'+props.content+'</h1><br/><h3>slot-Id :'+props.id+'</h3>'
       });
       }

       marker.addListener('click', function(){
         InfoWindow.open(map,marker);
       });

       }

       

      

       
      }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVdaNjUFDqG-DOafEfbz7q9aOVhpYVD4k&callback=initMap" async defer></script>