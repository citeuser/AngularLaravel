@extends('main')


@section('content')
  

	
  <div class="container">
  	<div class="row">
  		<form data-parsley-validate method="POST" action="{{ route('posts.store') }}">
      {{ csrf_field() }}
  		<h1>Create your own post</h1>
  		<div class="form-group">
  			<label for='title'>Title :</label>
  			<input type="text" class="form-control" name="title" required maxlength="255">
  		</div>
  		<div class="form-group">
  			<label for='body'>Body :</label>
  			<textarea class="form-control" rows="3" name="body" required></textarea>
  		</div>
  		<button type="submit" class="btn btn-success" style="width: 100%;height: 50px;">Submit</button>	
  		</form>
  	</div>
  </div>


@endsection

