@extends('layout.admin_base')

@section('content')
	@parent
	<section class="content">
		<div class="box box-primary">
			<form method="post" action="{{url($indexUrl)}}">
				<div class="box-body">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="name">名称</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="请输入名称" value="{{old('name')}}">
					</div>
				</div>
				@include('layout.data_footer')
			</form>
    	</div>
	</section>
@endsection