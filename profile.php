<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;

		}
		body:before{
			content: '';
			position: fixed;
			width: 100vw;
			height: 100vh;
			background-image: url(images/b.jpeg);
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			-webkit-filter: blur(5px);
			-moz-filter: blur(5px);

		}
		.contact-form{
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%,-50%);
			
			width: 350px;
			height: 450px;
			padding: 80px 40px;
			background: rgb(0, 0, 0,0.6);
			border-radius: 25px;
		}
		.contact-form h3{
			margin: 0;
			padding: 0 0 20px;
			color: #fff;
			text-align: center;
			text-transform: uppercase;

		}
		.contact-form p{
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: #fff;
		}
		.contact-form input{
			width: 100%;
			margin-bottom: 20px;

		}
		.contact-form input[type=Username],
		.contact-form input[type=Password]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 35px;
			color: #fff;
			font-size: 15px;
		}
		.contact-form input[type=submit]{
			height: 30px;
			color: #fff;
			font-size: 15px;
			background: red;
			cursor: pointer;
			border-radius: 25px;
			border: none;
			outline: none;
			margin-top: 15%;
		}
		input[type=checkbox]{
			width: 20%;
		}
		a{
			color: white;
		}
		a:hover{
			color: red;
		}
		




		
	</style>
</head>
<body>

	<div class="contact-form">
		
		<h3>Log in </h3>
		<form action="">
			<p>Username</p>
			<input type="Username" placeholder="Enter Username ">
			<p>Password</p>
			<input type="Password" placeholder="Enter Password">
			<input type="submit" value="Log In">
			<p><input type="checkbox">Remember me</p>
			<p>Don't have an Account!<a href="#">Click Here</a></p><br><br>
			<a href="INDEX.html">Back to Home</a>
		</form>
	</div>

</body>
</html>