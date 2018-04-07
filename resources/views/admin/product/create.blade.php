@extends('layout.admin_base')

@section('content')
	@parent
	<section class="content">
		<div class="box box-primary">
			<form method="post" action="{{url($indexUrl)}}">
				<div class="box-body">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="category_id">类别</label>
						<select class="form-control" id="category_id" name="category_id">
							@foreach ($categories as $category)
							<option value="{{$category->id}}" {{old('category_id') && in_array($category->id, old('category_id')) ? 'selected' : ''}}>{{$category->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="category_id">名称</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="请输入名称" value="{{old('name')}}">
					</div>
					<div class="form-group">
						<label for="introduce">简介</label>
						<textarea id="introduce" name="introduce" class="form-control">{{old('introduce')}}</textarea>
					</div>
					<div class="form-group">
						<label>产品图片</label>
						<div class="upload-img"></div>
					</div>
				</div>
				@include('layout.data_footer')
			</form>
    	</div>
	</section>
@endsection