@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add reservation</h1>

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
        <form method="post" action="{{ route('reservations.store') }}">
            @csrf
            <input type="hidden" name="parking_id" value="{{ $parking_id }}" />
            <div class="form-group">
                <label for="vehicle_type">Vehicle type:</label>
                <select name="vehicle_type" class="form-control">
                    @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->vehicle_type }}">{{ $vehicle->vehicle_type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="duration_from">Duration(from):</label>
                <input type="datetime-local" class="form-control" name="duration_from" id="DatetimeField1"/>
            </div>

            <div class="form-group">
                <label for="duration_to">Duration(to):</label>
                <input type="datetime-local" class="form-control" name="duration_to" id="DatetimeField2"/>
            </div>
            <button type="submit" class="btn btn-primary-outline">Add reservation</button>
        </form>
    </div>
</div>
<script type="text/javascript">
window.addEventListener("load", function() {
    var now = new Date();
    var utcString = now.toISOString().substring(0,19);
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var day = now.getDate();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var localDatetime1 = year + "-" +
                      (month < 10 ? "0" + month.toString() : month) + "-" +
                      (day < 10 ? "0" + day.toString() : day) + "T" +
                      (hour < 10 ? "0" + hour.toString() : hour) + ":" +
                      (minute < 10 ? "0" + minute.toString() : minute);
    var localDatetime2 = year + "-" +
                      (month < 10 ? "0" + month.toString() : month) + "-" +
                      (day < 10 ? "0" + day.toString() : day) + "T" +
                      (hour < 10 ? "0" + (hour+1).toString() : (hour+1)) + ":" +
                      (minute < 10 ? "0" + minute.toString() : minute);
    var datetimeField1 = document.getElementById("DatetimeField1");
    var datetimeField2 = document.getElementById("DatetimeField2");
    datetimeField1.value = localDatetime1;
    datetimeField2.value = localDatetime2;
});
</script>
@endsection
