<!DOCTYPE html>
<html>
	<head>
		<title>ABOUT PAGE</title>

			
					<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>

	</head>

	<body>
		<ul>
			<li><a href='/'>HOME</a></li>
			<li><a href='about'>ABOUT</a></li>
			<li><a href='contact'>CONTACT</a></li>
		</ul>
		@yield('content')
		<footer>COPYRIGHT SECRET </footer>
	</body>
</html>