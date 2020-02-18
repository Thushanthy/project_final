<div class='widget'>
    <div id='evening' class="tab-content">
      <table class="group-table">
        <caption>Reservations</caption>
        <thead>
          <tr>
            <th>Parking Space Name</th>
            <th>Duration - from</th>
            <th>Duration - to</th>
            <th>vehicle type</th>
            <th colspan = 2>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <!-- <td>{{$reservation->id}}</td> -->
                <td><?php
                  $name = DB::table('parking_spaces')->where('id',$reservation->parking_space_id)->value('name');
                  echo $name;
                ?>
                <form action="/landDetails" method="GET" role="search">
                  <input type="hidden" value="{{$reservation->parking_space_id}}" name="landDetails_id">
                  <button class="btn btn-outline-success btn-sm" type="submit">View</button>
                </form>
              </td>
                <td>{{$reservation->duration_from}}</td>
                <td>{{$reservation->duration_to}}</td>
                <td>{{$reservation->vehicle_type}}</td>
                <td>
                    <!-- <a href="{{ route('reservations.edit',$reservation->id)}}" class="btn btn-primary">Accept</a> -->
                    <button class="btn btn-danger" type="submit">Accept</button>
                </td>
                <td>
                    <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <br>
<br>
<div class="input-group">
  <input type="text" class="form-control" name="q" placeholder="Search : Land Space Name Or Address" id="search"> <span class="input-group-btn">
      <!-- <a href="/adminrefresh" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Refresh</a> -->
  </span>
</div>

<table class="table">
<caption>List of users</caption>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Park Name</th>
<th scope="col">Address</th>
<th scope="col">Landowner Name</th>
<th scope="col">Verified</th>
<th></th>
<th></th>

</tr>
</thead>
<tbody id="parking">
@foreach($parking_spaces as $parking_space)
<tr>
<th scope="row">{{$parking_space->id}}</th>
<td>{{$parking_space->name}}</td>
<td>{{$parking_space->address}}</td>
<td>{{DB::table('landowners')->where('id',$parking_space->landowner_id)->value('first_name')}}</td>
<td>{{$parking_space->verified=='1'?'Yes':'No'}}</td>
<td>
  @if($parking_space->latitude && $parking_space->longitude)
  <a href="http://maps.google.com/maps?q={{ $parking_space->latitude}},{{ $parking_space->longitude }}&ll={{ $parking_space->latitude}},{{ $parking_space->longitude }}&z=17"  target="_blank">
    <button class="btn btn-success">View</button>
  </a>
  @endif
</td>
<td>
  <a href="{{ route('reservations.edit',$parking_space->id) }}">
    <button class="btn btn-success">Add reservation</button>
  </a>
</td>
</tr>
@endforeach
</tbody>
</table>
<script type="text/javascript">
$('#search').on('keyup', function(){
var value = $(this).val();
$.ajax({
type:'get',
url:'{{URL::to('searchlandfordriver')}}',
data:{'q':value},
success:function(data){
  $('tbody#parking').html(data);
}
});
});
$.ajaxSetup({
headers: {
'csrftoken' :'{{ csrf_token() }}'
}
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>