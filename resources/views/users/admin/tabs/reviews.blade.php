    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Parking Space" id="search1"> <span class="input-group-btn">
    </div>
<br>
<br>
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">driver_id</th>
      <th scope="col">parking name</th>
      <th scope="col">Address</th>
      <th scope="col">review</th>
      <th colspan = 2></th>
    </tr>
  </thead>
  <tbody id="review">
    @foreach($reviews as $review)
    <tr>
      <!-- <th scope="row">{{$review->id}}</th> -->
      <td>{{$review->driver_id}}</td>
      <td>{{DB::table('parking_spaces')->where('id',$review->parking_space_id)->value('name')}}</td>
      <td>{{DB::table('parking_spaces')->where('id',$review->parking_space_id)->value('address')}}</td>
      <td>{{$review->review}}</td>
      <td><form action="{{ route('reviews.destroy', $review->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Remove</button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container">
    <div class="row">
        <div class="col-md-5" align="right">
          <a href="{{ url('dynamic_pdf4') }}" class="btn btn-primary ">View as pdf</a>
  
        </div>
    </div>
</div>
<script type="text/javascript">
  $('#search1').on('keyup', function(){
    var value = $(this).val();
    $.ajax({
      type:'get',
      url:'{{URL::to('searchlandforreview')}}',
      data:{'q':value},
      success:function(data){
        $('tbody#review').html(data);
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
