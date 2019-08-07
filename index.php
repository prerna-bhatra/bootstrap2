<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Login</title>
	<style type="text/css">
			#log-body #ins
			{

				padding:55px 55px 55px 55px;
			}
		@media only screen and (max-width: 600px) 
		{
			#log-body
			{
				margin-top:2px;
			}
			#log-body #ins
			{
				width:85%;
				padding:2px 2px 2px 2px;
				margin-left:20px;
				border-radius:20px;

			
			}
  			#log-body h1
  			{
  				font-size: 25px;
  				text-align: left;
  			}
  			#log-body h2
  			{
  				font-size:20px;
  				text-align: left;
  			}
  			#log-body ol li
  			{
  				font-size:12px;
  			}
  			#log-body #login
			{
				width:85%;
				padding:0px 0px 0px 0px;
				margin-left:20px;
				border-radius:20px;
				height:300px;
			
			}
  			#log-body #login input
  			{
  				margin-left:0px;
  				width:150px;
  				height:30px;
  			}
  			#log-body #login label
  			{
  				font-size:15px;
  			}
  			#log-body form
			{
				margin: 2px 2px 2px 30px;
			}
		}
	</style>
</head>
<body style="background-color:#363868;">
<nav class="navbar navbar-default" style="background-color:" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Novous</a>
  </div>
</nav>
<div class="container">
	<div class="row" id="log-body">
		<div class="col-xs-6 " style="background-color:#8766ff;border-top-left-radius: 25px;border-bottom-left-radius: 25px;" id="ins">
			<center><h1>The Quest</h1></center>
			<center><h2>Instructions</h2></center>
			<ol start="1" >
				<li>Round1:Everyone is allowed.</li>
				<li>Round2:only to 40% get to play.</li>
				<li>Round3:only to 6 teams get to play.</li>
			</ol>
		</div>
		<div class="col-xs-6" id="login" style="background-color: white;border-top-right-radius: 25px;border-bottom-right-radius: 25px;">
			<form>
				<header><center><label>Login</label></center></header>
				<hr>
				<div class="form-group">
					<label>username</label>
					<input type="text" name="name" placeholder="someone kapoor" class="form-group form-control">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="pass" class="form-group form-control" >
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-md">Log In</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>