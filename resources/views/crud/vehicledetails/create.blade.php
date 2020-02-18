@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add vehicledetail</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('vehicledetails.store') }}">
          @csrf
          <input type="hidden" name="id" value="{{ $id }}" />
          <div class="form-group">
                <label for="vehiclename">Vehiclename:</label>
                <input type="text" class="form-control" name="vehiclename" value={{ $vehicledetail->vehiclename }} />
          </div>
          <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" name="type" value={{ $vehicledetail->type }} />
            </div>

            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" name="company" value={{ $vehicledetail->company }} />
            </div>
            <div class="form-group">
                <label for="registeredprovince">Registeredprovince:</label>
                <input type="text" class="form-control" name="registeredprovince" value={{ $vehicledetail->registeredprovince }} />
            </div>
            <div class="form-group">
                <label for="coderange">Coderange:</label>
                <input type="text" class="form-control" name="coderange" value={{ $vehicledetail->coderange }} />
            </div>

          <button type="submit" class="btn btn-primary-outline">Add vehicledetail</button>
      </form>
  </div>
</div>
</div>
@endsection
