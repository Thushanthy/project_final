@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a landowner</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('landowners.update', $landowner->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" required value="{{$landowner->first_name}}"/>
            </div>
  
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" required value="{{$landowner->last_name}}"/>
            </div>
  
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" required value="{{$landowner->email}}"/>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio" class="form-control" name="gender" value="Male" {{$landowner->gender=='Male'?'checked':''}}/>Male
                <input type="radio" class="form-control" name="gender" value="Female" {{$landowner->gender=='Female'?'checked':''}}/>Female
            </div>
            
            <div class="form-group">
                <label for="job_title">nic:</label>
                <input type="text" class="form-control" name="nic" required  value="{{$landowner->nic}}"/>
            </div>
            <div class="form-group">
                <label for="country">contact_no:</label>
                <input type="text" class="form-control" name="contact_no" required value="{{$landowner->contact_no}}"/>
            </div>
             <div class="form-group"> 
                <label for="country">Username:</label>
                <input type="text" class="form-control" name="username" required  value="{{$landowner->username}}"/>
            </div>
            <div class="form-group">
                <label for="country">Password:</label>
                <input type="password" class="form-control" name="password" required value="{{$landowner->password}}"/>
            </div> 
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
