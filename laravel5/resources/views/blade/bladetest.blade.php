@extends("layouts.master")

@section("title")
Blade
@endsection

@section("body")
<div class="jumbotron">
        <h1>
		@if ($gender == "male")
			Male
		@elseif ($gender == "female")
			Female
		@else
			Unknown
		@endif
        </h1>
        <p class="lead">
        	@if (!empty($text))
        		{{ $text }}
        	@endif
        	<br>
        	@unless(empty($text))
        		{{ $text }}
        	@endunless
			<br>
			{{ isset($tex1t) ? $text : "Not defined" }}
			<br>
			{{ $text or "Not defined" }}
        </p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
@endsection