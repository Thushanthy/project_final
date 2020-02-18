<div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search for messages by name " id="search1"> <span class="input-group-btn">
    </div>
<br>
<br>
<table class="table">
  <caption>List of Reviews</caption>
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <!-- <th scope="col">first_name</th> -->
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone_no</th>
      <th scope="col">description</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <!-- <th scope="row">{{$contact->id}}</th> -->
      <!-- <td>{{$contact->first_name}}</td> -->
      <td>{{$contact->first_name}} {{$contact->last_name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->phone_no}}</td>
      <td>{{$contact->description}}</td>
      <td>{{$contact->created_at}}</td>
      <td><form action="{{ route('contact_us.destroy', $contact->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Remove</button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
<script type="text/javascript">
  $('#search1').on('keyup', function(){
    var value = $(this).val();
    $.ajax({
      type:'get',
      url:'{{URL::to('search1')}}',
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
