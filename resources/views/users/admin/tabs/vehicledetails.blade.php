    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Parking Space" id="search1"> <span class="input-group-btn">
    </div>
<br>
<br>
<table class="table">
  <caption>vehicle details</caption>
  <thead>
    <tr>
       <th scope="col">#</th> 
      <th scope="col">vehiclename</th>
      <th scope="col">type</th>
      <th scope="col">company</th>
      <th scope="col">registeredprovince</th>
      <th scope="col">coderange</th>
      <th colspan = 2></th>
    </tr>
  </thead>
  <tbody id="vehicledetail">
    @foreach($vehicledetails as $vehicledetail)
    <tr>
      <td>{{$vehicledetail->vehiclename}}</td>
      <td>{{$vehicledetail->type}}</td>
      <td>{{$vehicledetail->company}}</td>
      <td>{{$vehicledetail->registeredprovince}}</td>
      <td>{{$vehicledetail->coderange}}</td>
      <td><form action="{{ route('vehicledetails.destroy', $vehicledetail->id)}}" method="post">
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
        $('tbody#vehicledetails').html(data);
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
