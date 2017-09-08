@extends('main')


@section('content')
@if (Session::has('success'))

<div class="container">
  	<div class="row">
  		<div class="col-md-12">
  		<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span><strong> Well done!</strong> You successfully submit your post!</div>
  			<h1>{{$display->title}}</h1>
  			<p class="lead">{{$display->body}}</p>
  		</div>
  	</div>
</div> 



@endif
@endsection