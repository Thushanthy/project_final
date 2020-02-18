<div class="container" style="background:black">
  <a href="{{ route('parking_spaces.create')}}" ><button class="btn btn-outline-success" >Create new Parking Space</button></a>
  <a href="{{ url('dynamic_pdf2') }}" class="btn btn-outline-success ">    View as pdf   </a>
  <br><br>

  @foreach($landowner_parking_spaces as $parking_space)
  <table style="width:100%; color:black;">
  <tr>
  <th style="width:50%;">
  <div class="row">
    <div class="col">
      <div class="">
        <main>
          <h1 style="color:blue;">{{$parking_space->name}}</h1>
          <p style="color:black; font-size:15px;"> {{$parking_space->description}}</p><p style="color:black; font-size:15px;"> {{$parking_space->address}} </p>
          @if($parking_space->is_reservation_on)
          <button class="btn btn-success">Resevation Allowed</button>
          @else
          <button class="btn btn-danger">Resevation Not Allowed</button>
          @endif
          <br>
          <div> 
               <label for="city">Open Time:</label><br>
               <table style="width:100%; color:black;">
                <tr>
                  <td><label for="nothing"></label></td>
                  <th> <label for="openfrom">Open from:</label></th>
                  <th><label for="opentill">Open Till:</label></th>
                </tr>
                <tr>
                  <th><label>Monday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Tuesday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Tuesday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Tuesday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Wednesday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Wednesday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Wednesday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Thursday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Thursday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Thursday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Friday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Friday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Friday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Saturday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Saturday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Saturday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
                <tr>
                  <th><label>Sunday</label></th>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Sunday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_from : '-' }}</label></td>
                  <td><label>{{App\Parking_space::find($parking_space->id)->opentimes()->where('date','Sunday')->first() ? App\Parking_space::find($parking_space->id)->opentimes()->where('date','Monday')->first()->open_till : '-' }}</label></td>
                </tr>
          </table>
          </div> 
           <br>
            <a href="/images">Read full article</a>
          </main>
          <nav>
            <!-- <button class="button button2" href="#">View</button> -->
            <!-- <button class="button button2" href="#">Request Update</button> -->
            <!-- <button type="button" href="#">Request Delete</button> -->
            {{-- <form action="/landDetails" method="GET" role="search">
              <input type="hidden" value="{{$parking_space->id}}" name="landDetails_id">
              <button class="btn btn-outline-success" type="submit">View</button>
            </form> --}}
              @if($parking_space->latitude && $parking_space->longitude)
              <a href="http://maps.google.com/maps?q={{ $parking_space->latitude}},{{ $parking_space->longitude }}&ll={{ $parking_space->latitude}},{{ $parking_space->longitude }}&z=17" target="_blank">
                <button class="btn btn-outline-success">View</button>
              </a>
              @endif
            <!-- <button type="button" class="btn btn-outline-success">Request Update</button> -->
            <form action="/landEdit" method="GET" role="search">
              <input type="hidden" value="{{$parking_space->id}}" name="landEdit_id">
              <button class="btn btn-outline-success" type="submit">Request Update</button>
            </form>
            <form action="/landDelete" method="GET" role="search">
              <input type="hidden" value="{{$parking_space->id}}" name="landDelete_id">
              <button class="btn btn-outline-danger" type="submit"> Delete</button>
            </form>

          </nav>
        </div>
      </div>

    </div>
    </th>
    <th style="width:50%;">
      <div class="row">
        <div class="col">
          <main>
            <img src="images/{{ $parking_space->image_url }}" height="auto" width="100%">
            <br>
            <table style="width:100%; color:black;">
                <tr>
                  <td><label for="nothing"></label></td>
                  <th> <label for="openfrom">Total Vehicles:</label></th>
                  <th><label for="opentill">Parked Vehicles:</label></th>
                  <th><label for="opentill">Reserved Vehicles:</label></th>
                  <th><label for="opentill">Amount:</label></th>
                </tr>
                @foreach(App\Parking_space::find($parking_space->id)->parking_vehicle_types as $parking_vehicle_type)
                <tr>     
                      <th align="left"><label>{{$parking_vehicle_type->vehicle_type}}: </label></th>
                      <td align="center"><label>{{$parking_vehicle_type->total_no_of_vehicles}}</label></td>
                      <td align="center"><label>{{$parking_vehicle_type->no_of_vehicles_parked}}</label></td>
                      <td align="center"><label>{{$parking_vehicle_type->number_reserved}}</label></td>
                      <td align="center"><label>Rs. {{$parking_vehicle_type->amount_per_hour}}</label></td>
                </tr>
                @endforeach
            </table>
          </main>
        </div>
      </div>
    </th>
    </tr>
    </table>
    <hr>
@endforeach
  </div>