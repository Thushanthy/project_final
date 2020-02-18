<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FFE87C;">
  <a class="navbar-brand" href="#">Parking Driver Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="driverDashboard">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('drivervehicle.index') }}">Manage My-Vehicles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notifications</a>
      </li>
    </ul>
  </div>
</nav>
<hr>
<div class="container">
 <div class="card">
 <div class="card-body">
    <div class="card-title">Confirmed requests</div>
@foreach($notification as $v)
    @if($v->confirmed == 't')
   <div class="alert alert-success">Your request for <strong>{{$v->parkingId}}</strong> parking slot on <strong>{{$v->bookingDate}}</strong> at <strong>{{$v->bookingTime}}</strong> has been <strong>confirmed!</strong></div>
    @endif
@endforeach
 </div>
 </div>
</div>
<hr>
<div class="container">
 <div class="card">
 <div class="card-body">
    <div class="card-title">My requests</div>
@foreach($notification as $v)
    @if($v->confirmed == 'f')
   <div class="alert alert-danger">You have been requested for <strong>{{$v->parkingId}}</strong> parking slot on <strong>{{$v->bookingDate}}</strong> at <strong>{{$v->bookingTime}}</strong></div>
    @endif
@endforeach
 </div>
 </div>
</div>

