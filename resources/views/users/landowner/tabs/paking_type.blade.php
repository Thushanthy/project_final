<!DOCTYPE html>
<html>
 <head>

  <style type="text/css">


  .value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 20px;
  text-align: center;
  vertical-align: middle;
  padding: 11px 0;
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input#number {
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
 </head>
 <body>
<div class='widget'>
  <div id='evening' class="tab-content">
    <table class="group-table">
      
      <thead>
        <tr>
          <th>Parking Space Name</th>
          <th>vehicle Type</th>
          <th>Amount per Hhour</th>
          <th>Total no of Vehicles</th>
          <th colspan = 3>No of Vehicles Parked</th>
          
         
        </tr>
      </thead>
      <tbody>
          @foreach($parking_types as $parking_type)
          <tr>
              <!-- <td>{{$parking_type->parking_space_id}}</td> -->
              <td><?php
                $name = DB::table('parking_spaces')->where('id',$parking_type->admin_id)->value('name');
                echo $name;
              ?></td>
              <td>{{$parking_type->vehicle_type}}</td>
              <td>{{$parking_type->amount_per_hour}}</td>
              <td>{{$parking_type->total_no_of_vehicles}}</td>
             <!--  <td>{{$parking_type->no_of_vehicles_parked}}</td> -->
            <td> <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
            <td><input type="number" id="number" value= {{$parking_type->no_of_vehicles_parked}} /></td></td>
  
              <!-- <td>{{$parking_type->no_of_vehicles_parked}}</td>
 -->
            <td><div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div></td>
              <!-- <td>{{$parking_type->no_of_vehicles_parked}}</td> -->
            
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
  function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
</body>