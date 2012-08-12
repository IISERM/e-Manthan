@layout('template.default')
@section('body')
	<div class="two-third">
		<div class="heading_bg">
			<h2>
				{{ $title }}
			</h2>
		</div>
		<h4>
			Author : 
				<?php $i = 0; ?>
 				@foreach ($authors as $author)
				    @if($i == 0)
				    	{{ $author->name }}
				    	<?php $i += 1 ?>
					@else
				 		{{ ", ".$author->name }}
				 	@endif
				@endforeach

		</h4>
		@if($issues != null)
			<h4>
				Issue : 
				@foreach($issues as $issue)
					{{ $issue->issue }}
				@endforeach
			</h4>
		@endif
		<p>
			{{ $content }}
		</p>
		@if($categories != null)
			<h5>
				Categories : 
				@foreach($categories as $category)
					{{ $category->category }}
				@endforeach
			</h5>
		@endif
	</div>
	<?php $i = 0; ?>
	@foreach ($authors as $author)
		<div class="one-third last">
			<div class="heading_bg">
				<h2>
			    	{{ $author->name }}
				</h2>
				<h4>
			    	{{ $author->affiliation }}
				</h4>
			</div>
			<center>
			    <img src = {{ "\"".URL::base()."/img/".$author->img.".jpg\"" }} width = 280>
			</center>
			<p>
		    	{{ $author->description }}
			</p>
	    	<?php $i += 1 ?>
		</div> 
	@endforeach
@endsection