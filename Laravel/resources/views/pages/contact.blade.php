@extends('main')
<title>Contact Me</title>
@section('content')

	<div class="container">
  	<div class="row">
  		<form>
  		<h2>Contact Me!</h2>
  		<div class="form-group">
  			<label for='title'>Title :</label>
  			<input type="text" class="form-control" placeholder="Title">
  		</div>

  		<form>
  		<div class="form-group">
  			<label for='subject'>Subject :</label>
  			<input type="text" class="form-control" placeholder="What's your subject?">
  		</div>

  		<div class="form-group">
  			<label for='body'>Message :</label>
  			<textarea class="form-control" rows="3" placeholder="Type your message here..."></textarea>
  		</div>
  		<button type="submit" class="btn btn-success">Send message</button>	
  		</form>
  	</div>
  </div>
  
@endsection
