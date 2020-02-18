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
    </ul>
  </div>
</nav>

<hr>

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>  
<div class="container">
    <form action="{{ route('drivervehicle.update',$drivervehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <input type="hidden" name="email" value="sample@gmail.com">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicle Type:</strong>
                <input type="text" name="type" value="{{ $drivervehicle->type}}" class="form-control" placeholder="enter vehicle type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" class="form-control" name="model" value="{{ $drivervehicle->model}}" placeholder="enter model number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RegNo:</strong>
                <input type="text" class="form-control" name="number" value="{{ $drivervehicle->number}}" placeholder="enter vehicle number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" style="background-color:blueviolet;" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
    </div>