@extends('layout.app')
@section('content')

	<h1>Add Developer</h1>
	<!--{!!Form::open(['method'=>'POST','action'=>'add_developer_form@store','files'=>true]) !!
	}
	{{csrf_field()}}-->
	


<div class="row">
	<div class="col-md-12">
		<form method="POST" action="/submit_dev_data" enctype="multipart/form-data" >
			{{csrf_field() }}
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Developer Name *</label>
						<input type="text" name="name" class="form-control">
					</div>
				</div>
					<div class="col-md-4">
					<div class="form-group">
						<label>Developer Skills *</label>
						<input type="text" name="skills" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Developer Image *</label>
						<input type="file" name="img" class="form-control">
					</div>
				</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						
						<label>Discritption *</label>
						<textarea class="form-control" name="disc"></textarea>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="submit"  class="btn btn-dark" value="Submit Form">
					</div>
				</div>
			
		</div>
		</form>
	</div>
</div>

@stop

@section('footer')

<script type="text/javascript">
		//alert("hello");
s</script>

@stop