@extends("layouts.app")

@section("content")
	<div class="row">
		@forelse ($articles as $article)
		
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<span>Parminder Singh</span>
						<span class="pull-right">{{ $article->created_at->diffForHumans()}}</span>				
					</div>
				
					<div class="panel-body">
						{{ $article->shortContent }}

						<a href="/articles/{{ $article->id }}">read more</a>
					</div>

					
					<div class="panel-footer clearfix" style="background-color: white">
						
						@if ($article->user_id == Auth::id()) 
							<form class="pull-right" style="margin-left:25px;" action="articles/{{ $article->id }}" method="post">
								{{ csrf_field() }}
								{{ method_field("delete") }}
								<button class="btn btn-danger btn-sm">Delete</button>
								
							</form>

						@endif

						<i class="fa fa-heart pull-right"></i>
					</div>
				</div>
			</div>
		

		@empty
			No articles

		@endforelse
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{{ $articles->links() }}
		</div>
	</div>
	
@endsection