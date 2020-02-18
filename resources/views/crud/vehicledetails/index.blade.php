@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Vehicle Details</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('vehicledetails.create')}}" class="btn btn-primary">New Vehicle</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Vehiclename</td>
          <td>Type</td>
          <td>Company</td>
          <td>Registeredprovince</td>
          <td>Coderange</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicledetails as $vehicledetail)
        <tr>
            <td>{{$vehicledetail->id}}</td>
            <td>{{$vehicledetail->vehiclename}}</td>
            <td>{{$vehicledetail->type}}</td>
            <td>{{$vehicledetail->company}}</td>
            <td>{{$vehicledetail->registeredprovince}}</td>
            <td>{{$vehicledetail->coderange}}</td>
            <td>
                <a href="{{ route('vehicledetails.edit',$vehicledetail->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('vehicledetails.destroy', $vehicledetail->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>


<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
@endsection
