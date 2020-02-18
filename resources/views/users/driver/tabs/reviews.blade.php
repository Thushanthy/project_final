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
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <!-- <td>{{$reservation->id}}</td> -->
                <td>{{DB::table('parking_spaces')->where('id',$reservation->parking_space_id)->value('name')}}
              </td>
                <td>{{$reservation->duration_from}}</td>
                <td>{{$reservation->duration_to}}</td>
                <td>{{$reservation->vehicle_type}}</td>
                <td>
                    <a href="{{ route('reviews.edit', $reservation->parking_space_id)}}">
                      <button class="btn btn-success" type="submit">Add review</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
