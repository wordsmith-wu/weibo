@if ($transfeed_items->count()>0)
	<ul class="list-unstyled">
		@foreach ($transfeed_items as $translation)
			@include('translations._translation',['user'=>$translation->user])
		@endforeach		
	</ul>
	<div class="mt-5">
		{!! $transfeed_items->render() !!}
	</div>
@else
	<p>没有数据！</p>
@endif