
 <link rel="stylesheet" href="{{ URL::asset('assets/myAccount.css') }}">

<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
        		<img src="{{ asset('images/icon/logo.png') }}" class="img" height="80" />
      		</a>
		</div>
	</div>
</nav>
<main class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="text-center">
				<img src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" class="img-circle">
				<h3>{{ $id->username }}</h3>
				<a href="{{ route('admins.edit',Session::get('adminid')) }}"><button class="btn btn-primary">Edit details</button></a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="content">
				<h1>{{ $id->first_name }} {{ $id->last_name }}</h1>
                 <p><i class="fa fa-phone"></i> {{ $id->contact_no }}</p>
                 <p><i class="fa fa-home"></i> {{ $id->username }}</p>

                 {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eum consequuntur alias quibusdam, pariatur fugiat iusto fugit totam minus architecto eligendi provident neque id aspernatur quisquam! Doloribus cupiditate, qui dolores.
                 </p> --}}
			</div>
		</div>
	</div>
</main>