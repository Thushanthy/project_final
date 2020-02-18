@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Request Parking Space Update</h1>

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
        <form method="post" action="{{ route('parking_spaces.update', $parking_space->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name"> Name:</label>
                <input type="text" class="form-control" name="name" value={{ $parking_space->name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Location:</label>
                <input type="text" class="form-control map-input" id="address-input" name="address" value={{ $parking_space->address }} />
            </div>
            <div class="form-group">
            <label for="lattitude">Lattitude:</label>
            <input type="text" class="form-control map-input" name="latitude" id="address-latitude" value="{{ $parking_space->latitude }}" />
            </div>
            <div class="form-group">
            <label for="longitude">Longitude:</label>
            <input type="text" class="form-control map-input" name="longitude" id="address-longitude" value="{{ $parking_space->longitude }}" /></div>
            <div id="address-map-container" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>
            <div class="form-group">
                <label for="email">Description:</label>
                <input type="text" class="form-control" name="description" value={{ $parking_space->description }} />
            </div>
            <div>
               <label for="city">Open on:</label><br>
              <input type="checkbox" name="opentime1" value="1" {{$parking_space->poya==1 ? 'checked' : ''}}> Poya days
              <input type="checkbox" name="opentime2" value="1" {{$parking_space->public==1 ? 'checked' : ''}}> Public Holidays
              <input type="checkbox" name="opentime3" value="1" {{$parking_space->bank==1 ? 'checked' : ''}} > Bank Holidays<br><small>Thesse will be displayed for the users of the application</small><br><br>
          </div>
          <div> 
               <label for="city">Open Time:</label><br>
               <table style="width:100%">
                <tr>
              <td><label for="nothing"></label></td>
              <th> <label for="openfrom">Open from:</label></th>
              <th><label for="opentill">Open Till:</label></th>
            </tr>
                <tr>
               <th><label for="monday">Monday</label></th>
               <td><input type="time" class="form-control" name="open_from_monday"/></td>
              <td><input type="time" class="form-control" name="open_till_monday"/> </td>
            </tr>
            <tr>
              <th><label for="tuesday">Tuesday</label></th>
              <td><input type="time" class="form-control" name="open_from_tuesday"/></td>
              <td><input type="time" class="form-control" name="open_till_tuesday"/></td>
            </tr>
             <tr>
              <th><label for="wednesday">Wednesday</label></th>
              <td><input type="time" class="form-control" name="open_from_wednesday"/></td>
              <td><input type="time" class="form-control" name="open_till_wednesday"/></td>
            </tr>
             <tr>
              <th><label for="thursday">Thursday</label></th>
              <td><input type="time" class="form-control" name="open_from_thursday"/></td>
              <td><input type="time" class="form-control" name="open_till_thursday"/></td>
            </tr>
             <tr>
              <th><label for="friday">Friday</label></th>
              <td><input type="time" class="form-control" name="open_from_friday"/></td>
              <td><input type="time" class="form-control" name="open_till_friday"/></td>
            </tr>
             <tr>
              <th><label for="saturday">Saturday</label></th>
              <td><input type="time" class="form-control" name="open_from_saturday"/></td>
              <td><input type="time" class="form-control" name="open_till_saturday"/></td>
            </tr>
             <tr>
              <th><label for="sunday">Sunday</label></th>
              <td><input type="time" class="form-control" name="open_from_sunday"/></td>
              <td><input type="time" class="form-control" name="open_till_sunday"/></td>
            </tr>
          </table>
          <br>
          </div> 

          <div class="form-group">
          <label for="reservation">Select property image?</label></br>
            <input type="file" name="image" class="form-control">
          </div>
          <br/>
            
           <div class="form-group">
               <label for="reservation">Is reservation allowed?</label></br>
              <input type="radio"  name="reservation_status" value=1> Allowed<br>
              <input type="radio"  name="reservation_status" value=0 checked> Not allowed<br>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
  <script src="{{ asset('assets/js/mapInput.js') }}"></script>
@endsection
