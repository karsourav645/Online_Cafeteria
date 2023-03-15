<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	 <!--jquery cdn css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<title>FoodShades.com</title>
	<link rel="icon" href="images/p10.png" type="image/gif" sizes="16x16">
	

<!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script> -->

	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <style type="text/css">
		.loginform a{
    text-decoration: none;
    color: black;
}
.loginform .bt1{
    background: transparent;
    font-size: 15px;
    border: 1px solid rgb(244, 32, 57);
    padding: 5px 10px;
	margin-right: 10px;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}
.loginform .bt1:hover{
    background: #f819e2;
    color: white;
    transition: all 0.5sec;
    padding: 5px 11px;
    border: none;
    text-align: center;
}
		button {
			align-content: center;
			color: white;
			background-color: var(--green);
			padding: 1rem;
			border-radius: 0.5rem;
			border-color: black;
			width: 10rem;
			border-right-color: rgb(0, 0, 0);
		}

		button a:hover {
			color: white;
		}
.icon{
	font-size:23px ;
	/*position: absolute;*/
	margin-right: 100px;
	font-family: 'Nunito', sans-serif;
}

.ic{

}
		
.ic ul {
	list-style: none;
	display: none;
	overflow: hidden;
	position: absolute;
	border: none;
	width: 250px;
	height: 250px;
	background-color: white;
	box-shadow: 5px 5px 5px #888888, -5px -3px 5px #888888;

}	
.ic ul a{
	margin-top: 10px;
	text-decoration: none;
	color: var(--green);
}	
.ic ul li:hover{

cursor: pointer;
background-color: #dedede;
	}

.navbar a{
	text-decoration: none;
}	
.burg{
 color: #666666;	
 background-color: #192A56;
 padding: 5px 10px;
 border-radius: 10px;
}

</style>
 -->




</head>

<body>

<?php
if(!isset($_SESSION['uid'])){

	?>
	<!--navbar starts-->
	<header>
		<a href="index.php" class="logo"><i class="fas fa-coffee"></i>&nbsp;FoodShades</a>
		<nav class="navbar">
			<a class="active" href="index.php">Home</a>
			<a href="#dishes">Dishes</a>
			<a href="menu.php">Menu</a>
			<a href="#about">About</a>
			<a href="#contact">SignIn</a>
		</nav>
	</header>

	
		<?php
	}
    else{
		?>

		<!--navbar starts-->
	<header>
		<a href="index.php" class="logo"><i class="fas fa-coffee"></i>&nbsp;FoodShades</a>
		<nav class="navbar">
			<a class="active" href="index.php">Home</a>
			<a href="#dishes">Dishes</a>
			<a href="#menu">Menu</a>
			<a href="#about">About</a>
			<a href="#contact">SignIn</a>
			</nav>

		
		<!-- <div class="icon">
			
			<a href="#" class="burg" onclick="usermenufn()"><i class="fas fa-bars " style="color:#fff;" id="menu-bars"></i></a>
		<div class="ic" >		
		  <ul id="usermenu">	
		  	<li><a href="profile.php" class="fas fa-user"><?php echo $_SESSION['uid']; ?></a></li> 
		  	<li><a href="#" class="fas fa-heart"> Favourite</a></li>
			<li><a href="#" class="fas fa-shopping-cart"> Cart</a></li>
				
			<li><a href="#"><i class="fas fa-search" id="search-icon"> Search</i></a></li>
			<li><a href="logout.php"><i class="fas fa-sign-out-alt"> Logout</i></a></li> -->
				<div class="dropdown">
  <button class="btn btn-secondary  fas fa-bars" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu" style="font-size:20px;" >
  	<a class="dropdown-item fas fa-user" href="#"> <?php echo $_SESSION['uname']; ?></a>
    <a class="dropdown-item fas fa-heart" href="#"> Favoutite</a>
    <a class="dropdown-item fas fa-shopping-cart" href="cart.php"> Cart</a>
    <a class="dropdown-item fa fa-archive " href="#"> Orders</a>
    <a class="dropdown-item fas fa-sign-out-alt" href="logout.php"> Logout</a>

  </div>
</div>
			
		</ul>
	  </div>
	</div>
	<?php 
	}

	?>
	</header>
