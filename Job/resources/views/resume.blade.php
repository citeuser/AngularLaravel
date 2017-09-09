<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create Your Resume</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/parsley.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			
					<form class="form-horizontal" data-parsley-validate>
					<h1><b>Personal Information </b></h1>
					  <div class="form-group">
					    <label for="firstname" class="col-sm-2 control-label">First Name : </label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="firstname" placeholder="Enter your first name" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="lastname" class="col-sm-2 control-label">Last Name : </label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="address" class="col-sm-2 control-label">Address : </label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="contact" class="col-sm-2 control-label">Contact # : </label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="contact" placeholder="Enter your contact #" required data-parsley-type="digits">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="email" class="col-sm-2 control-label">Email : </label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="email" placeholder="Enter your valid email address" required>
					    </div>
					  </div>
					   <div class="form-group">
					    <label for="gender" class="col-sm-2 control-label">Gender : </label>
					    	 <div class="col-sm-10">
					    	 <p>
						      M : <input type="radio" name="gender" id="genderM" value="M" required>
						      F : <input type="radio" name="gender" id="genderF" value="F">
						      </p>
					    	  </div>
					 </div>
					  <hr>

					  <h1><b>Educational Background</b></h1>
					  <div class="form-group">
					    <label for="firstname" class="col-sm-2 control-label">First Name : </label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="firstname" placeholder="Enter your first name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="lastname" class="col-sm-2 control-label">Last Name : </label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="lastname" placeholder="Enter your last name">
					    </div>
					  </div>
					  <hr>

					  <h1><b>Additional Skills</b></h1>
					  <div class="form-group">
					    <label for="firstname" class="col-sm-2 control-label">First Name : </label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="firstname" placeholder="Enter your first name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="lastname" class="col-sm-2 control-label">Last Name : </label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="lastname" placeholder="Enter your last name">
					    </div>
					  </div>
					  <hr>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Sign in</button>
					    </div>
					  </div>
					</form>
    		</div>
    	</div>
    </div>

    <!--Form Javascript validation-->
    <script src="/js/jquery.js"></script>
    <script src="/js/parsley.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>