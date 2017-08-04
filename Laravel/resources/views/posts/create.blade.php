<!DOCTYPE html>
<html>
	<head>
		<title>Blog Create</title>

		<style>
			
		</style>

	</head>

	<body>
		<form action="{{route('posts.store')}}" method='post'>
		{{ csrf_field() }}
			<div>

				<label>TITLE : </label><input type='text' id='title' name='title'>
				<label>BODY : </label><input type='text' id='body' name='body'>
				<input type='submit'>
			</div>
		</form>
	</body>




</html>