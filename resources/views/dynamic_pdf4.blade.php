<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstap.min.js"></script>
  <style type="text/css">
      .box{
        width:600px;
        margin:0 auto;
      }
  </style>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-md-7" align="right">
          <h4>Report for Reviews by the users of the system</h4>
        </div>
        <div class="col-md-5" align="right">
          <a href="{{ url('dynamic_pdf4/pdf4') }}" class="btn btn-danger ">Converting into PDF</a>
        </div>
    </div>
    <br />
  <div class="table-responsive">
      <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th >id</th>
              <th >Park_id</th>
              <th >review</th>
              <th >received time</th>
            </tr>
          </thead>
          <tbody>
    @foreach($customer_data as $customer)
    <tr>
      <td>{{$customer->driver_id }}</td>
      <td>{{$customer->parking_space_id }}</td>
      <td>{{$customer->review}}</td>
      <td>{{$customer->created_at}}</td>
      
    </tr>
    @endforeach
  </tbody>
      </table>
</div>
</div>
</body>
</html>