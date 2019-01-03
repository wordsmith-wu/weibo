@extends('layouts.default')
@section('title',$user->name)

@section('content')
<div class="row">
  <div class="offset-md-2 col-md-8">
    <section class="user_info">
      @include('shared._user_info', ['user' => $user])
    </section>
    <section class="status">
    	@if ($translations->count()>0)
    		<ul class="list-unstyled">
    			@foreach ($translations as $translation)
    				@include('translations._translation')
    			@endforeach
    		</ul>
    		<div class="mt-5">
    			{!! $translations->render() !!}
    		</div>
    	@else
    		<p>暂时有翻译数据！</p>
    	@endif
    </section>
  </div>
</div>
@stop