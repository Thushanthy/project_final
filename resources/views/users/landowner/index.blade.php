<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ParKing</title>
<link rel="shortcut icon" href="images/icon/logo.png" type="image/x-icon">
<link rel="icon" href="images/icon/logo.png" type="image/x-icon" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a0408e60a8.js" crossorigin="anonymous"></script>

@include('users.landowner.style_3')
@include('users.landowner.style_4')

@include('users.landowner.tabs.style_1')
@include('users.landowner.tabs.script_1')
</head>
<body>
    <div class="t-r links">
      <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">LOGOUT</a>
    </div>

  <h2>LandOwner Page</h2>
  <p>
    <span style="color: #ff9f43">Welcome</span>: {{$id->first_name}}
    &emsp;&emsp;&emsp;&emsp;
    <span style="color: #ff9f43">No of Lands</span>: {{$landowner_parking_spaces_count}}
    &emsp;&emsp;&emsp;&emsp;
    <span style="color: #ff9f43">No of Reservation</span>:  {{$reservations_count}}</p>



<button class="tablink" onclick="openPage('my_account', this, 'green')" >My Account</button>
<button class="tablink" onclick="openPage('my_lands', this, 'green')" id="defaultOpen">My Lands</button>
<button class="tablink" onclick="openPage('paking_type', this, 'green')">Parked Vehicles</button>
<button class="tablink" onclick="openPage('reservations', this, 'green')">Reservations</button>
<!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

<div id="my_account" class="tabcontent">
@include('users.landowner.tabs.account')
</div>

<div id="my_lands" class="tabcontent">
@include('users.landowner.tabs.lands')
</div>

<div id="paking_type" class="tabcontent">
@include('users.landowner.tabs.paking_type')
</div>

<div id="reservations" class="tabcontent">
@include('users.landowner.tabs.reservations')
</div>



<!-- <div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div> -->

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
