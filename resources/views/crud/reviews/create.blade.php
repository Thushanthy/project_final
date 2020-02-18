@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add review</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('reviews.store') }}">
          @csrf
          <input type="hidden" name="parking_id" value="{{ $parking_id }}" />
          <div class="form-group">
            <label for="review">Review</label>
            <textarea name="review" class="form-control"></textarea>
          <button type="submit" class="btn btn-primary-outline">Add review</button>
      </form>
  </div>
</div>
</div>
@endsection
