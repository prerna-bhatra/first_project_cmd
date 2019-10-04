@extends('layout.app')
@section('header')
<a href="#" class="btn" id="pre_cont_dev">Contact Me<a>
    <a href="#" id="pre_abt_dev">ABOUT</a>
@stop
@section('content')
	<div class="row" id="dev_data">
		@foreach ($dev_data as $dev_datas)
		<div  class="col-md-3" id="dev_block">
			<div class="row">
				<div class="col-md-4">
					<img src="alok.jpg">
				</div>
				<div class="col-md-8">
					<h2  >{{$dev_datas->name}}</h2>
					<h4><b>{{$dev_datas->skills}}</b></h>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4>{{$dev_datas->disc}}</h4>
				</div>
			</div>
		</div>
	@endforeach
	</div>

@stop
@section('footer')
<div id="wave"></div>
@stop;