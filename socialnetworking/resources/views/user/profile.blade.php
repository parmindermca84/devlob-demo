@extends("layouts.app")

<style type="text/css">
	.profile-img {
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>
@section("content")
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body text-center">
					<img class="profile-img" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRe2n0dQjseCRehcrwOlUBRRWUoi3jk1lcsLmYKOZcg3t3iQUPoyw">

					<h1>{{ $User->name }}</h1>
					<h5>{{ $User->email }}</h5>
					<h5>{{ $User->dob->format('l j F Y') }} ({{ $User->dob->age }} years old)</h5>

					<button class="btn btn-success">Follow</button>
				</div>
			</div>
		</div>
	</div>

@endsection