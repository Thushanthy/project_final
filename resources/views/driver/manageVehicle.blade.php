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
        <a class="nav-link" href="/notification">Notifications</a>
      </li>
      <li class="nav-item">
      <a href="{{ url('/signin') }}" class="nav-link">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
<hr>

<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="card">
          <div class="card-body">
          <div class="card-title"><h3>Manage My vehicles</h3></div>
                <a class="btn btn-primary btn-sm" href="{{ route('drivervehicle.create') }}"> Add new vehicle</a>
          </div>
        </div>
        </div>
    </div>
    <hr>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   <!--printing table records -->
   <div class="jumbotron">
   <div class="row">
    @foreach ($vehicles as $vehicle)
    <div class="card" style="width:300px;height:200px;">
      <div class="card-body">
        VEHICLE NO : <strong>{{ $vehicle->number }}</strong><br/>
        VEHICLE TYPE: <strong>{{ $vehicle->type }}</strong><br/>
        MODEL: <strong>{{ $vehicle->model }}</strong><br/><br/>

        
        <form action="{{ route('drivervehicle.destroy',$vehicle->id) }}" method="POST">
  <!-- Edit button-->
        <a class="btn btn-primary" style="background:blueviolet;" href="{{ route('drivervehicle.edit',$vehicle->id) }}">Edit</a>
<!-- Delete -->
        @csrf
        @method('DELETE')

        <button type="submit" onclick="clicked();" class="btn btn-danger">Delete</button>
        </form>
</div>
</div>
        @endforeach
        </div>
</div>
  <!-- printing table records finish -->
    
      
<script type="text/javascript">
    function clicked() {
       if (confirm('Do you want to delete?')) {
           yourformelement.submit();
       } else {
           return false;
       }
    }

</script>