<!-- z -->
<?php
 include 'connection.php';
 error_reporting(0);

session_start();
?>
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
	



	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
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


	<form action="" id="search-form">
		<input type="search" name="" id="search-box" placeholder="Search Your Food">
		<label for="search-box" class="fas fa-search"></label>
		<i class="fas fa-times" id="close"></i>
	</form>

	<!--navbar end-->


	<!--body starts-->
	<section class="home" id="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper wrapper">

				<div class="swiper-slide slide">
					<div class="content">
						<span>Our Dishes</span>
						<h3>Spicy Pizza</h3>
						<p>Spicy Pepperoni Pizza with cheese, mushrooms, ham, pepperoni salami and red hot chilly
							peppers.</p>
						<a href="#" class="btn">Order Now</a>
					</div>
					<div class="image">
						<img src="images/p1.jpg" alt="">
					</div>
				</div>


				<div class="swiper-slide slide">
					<div class="content">
						<span>Our Dishes</span>
						<h3>Spicy Pizza</h3>
						<p>Spicy Pepperoni Pizza with cheese, mushrooms, ham, pepperoni salami and red hot chilly
							peppers.</p>
						<a href="#" class="btn">Order Now</a>
					</div>
					<div class="image">
						<img src="images/p2.jpg" alt="">
					</div>
				</div>


				<div class="swiper-slide slide">
					<div class="content">
						<span>Our Dishes</span>
						<h3>Spicy Pizza</h3>
						<p>Spicy Pepperoni Pizza with cheese, mushrooms, ham, pepperoni salami and red hot chilly
							peppers.</p>
						<a href="#" class="btn">Order Now</a>
					</div>
					<div class="image">
						<img src="images/p3.png" alt="">
					</div>

				</div>

			</div>

			<div class="swiper-pagination"></div>

		</div>
	</section>

	<section class="icons-container ">

		<div class="icons">
			<i class="fas fa-shipping-fast"></i>
			<div class="content">
				<h3>free shipping</h3>
				<p>order over $50</p>
			</div>
		</div>

		<div class="icons">
			<i class="fas fa-lock"></i>
			<div class="content">
				<h3>secure payment</h3>
				<p>100 secure payment</p>
			</div>
		</div>

		<div class="icons">
			<i class="fas fa-redo-alt"></i>
			<div class="content">
				<h3>Early Delivary</h3>
				<p>within 45 miniutes</p>
			</div>
		</div>

		<div class="icons">
			<i class="fas fa-headset"></i>
			<div class="content">
				<h3>24/7 support</h3>
				<p>call us anytime</p>
			</div>
		</div>

	</section>




	

	<section class="dishes" id="dishes">
		

		<h2 class="heading"> Mughlai dishes </h2>

		<div class="box-container">
			<?php
         

          $sql="select * from products where pdesc='Mughlai'";
          $table=mysqli_query($conn,$sql);
          if(mysqli_num_rows($table)>0){
            while($row=mysqli_fetch_assoc($table)){
              ?>

				<div class="box">
				<form method="GET" action="cart.php">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-eye"></a>
				
				<img src="images/<?php echo $row['pimg'];?>" alt="">
				<h3><?php echo $row['pname'];?></h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<span style="text-decoration: line-through;color: grey;">₹<?php echo $row['pdisc'];?></span><span style="font-size: 20px" >₹<?php echo $row['pamount'];?></span><br>
				<div><input type="submit" value="ADD ITEM" name="add-item" class="btn"></div>
				<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="qty" value="1">
				<input type="hidden" name="pname" value="<?php echo $row['pname'];?>">
				<input type="hidden" name="pprice" value="<?php echo $row['pamount'];?>">
			</form>
			
    </div>
			<?php

		}
	}
	?>

			

		</div>   
   
	</section>

	<section class="dishes" id="dishes">

		<h2 class="heading"> Italian dishes </h2>

		<div class="box-container">
			<?php
         

          $sql="select * from products where pdesc='Italian'";
          $table=mysqli_query($conn,$sql);
          if(mysqli_num_rows($table)>0){
            while($row=mysqli_fetch_assoc($table)){
              ?>

				<div class="box">
				<form method="GET" action="cart.php">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-eye"></a>
				
				<img src="images/<?php echo $row['pimg'];?>" alt="">
				<h3><?php echo $row['pname'];?></h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<span style="text-decoration: line-through;color: grey;">₹<?php echo $row['pdisc'];?></span><span style="font-size: 20px" >₹<?php echo $row['pamount'];?></span><br>
				<div><input type="submit" value="ADD ITEM" name="add-item" class="btn"></div>
				<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="qty" value="1">
				<input type="hidden" name="pname" value="<?php echo $row['pname'];?>">
				<input type="hidden" name="pprice" value="<?php echo $row['pamount'];?>">
			</form>
			
    </div>
			<?php

		}
	}
	?>

			

		</div>   
   
	</section>

	<section class="dishes" id="dishes">

		<h2 class="heading"> Bengali dishes </h2>

		<div class="box-container">
			<?php
         

          $sql="select * from products where pdesc='Bengali'";
          $table=mysqli_query($conn,$sql);
          if(mysqli_num_rows($table)>0){
            while($row=mysqli_fetch_assoc($table)){
              ?>

				<div class="box">
				<form method="GET" action="cart.php">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-eye"></a>
				
				<img src="images/<?php echo $row['pimg'];?>" alt="">
				<h3><?php echo $row['pname'];?></h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<span style="text-decoration: line-through;color: grey;">₹<?php echo $row['pdisc'];?></span><span style="font-size: 20px" >₹<?php echo $row['pamount'];?></span><br>
				<div><input type="submit" value="ADD ITEM" name="add-item" class="btn"></div>
				<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="qty" value="1">
				<input type="hidden" name="pname" value="<?php echo $row['pname'];?>">
				<input type="hidden" name="pprice" value="<?php echo $row['pamount'];?>">
			</form>
			
    </div>
			<?php

		}
	}
	?>

			

		</div>   
   
	</section>

<section class="dishes" id="dishes">

		<h2 class="heading"> Chinese dishes </h2>

		<div class="box-container">
			<?php
         

          $sql="select * from products where pdesc='Chinese'";
          $table=mysqli_query($conn,$sql);
          if(mysqli_num_rows($table)>0){
            while($row=mysqli_fetch_assoc($table)){
              ?>

			<div class="box">
				<form method="GET" action="cart.php">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-eye"></a>
				
				<img src="images/<?php echo $row['pimg'];?>" alt="">
				<h3><?php echo $row['pname'];?></h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<span style="text-decoration: line-through;color: grey;">₹<?php echo $row['pdisc'];?></span><span style="font-size: 20px" >₹<?php echo $row['pamount'];?></span><br>
				<div><input type="submit" value="ADD ITEM" name="add-item" class="btn"></div>
				<input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="qty" value="1">
				<input type="hidden" name="pname" value="<?php echo $row['pname'];?>">
				<input type="hidden" name="pprice" value="<?php echo $row['pamount'];?>">
			</form>
			
    </div>
			<?php

		}
	}
	?>

			

		</div>   
   
	</section>



	<section class="deal">

		<div class="content">
			<h3>Today's Special</h3>
			<h1>upto 50% off</h1>
			<p>Spicy Pepperoni Pizza with cheese, mushrooms, ham, pepperoni salami and red hot chilly peppers.</p>
			<a href="#" class="btn">shop now</a>
		</div>

		<div class="image">
			<img src="images/p1.jpg" alt="">
		</div>

	</section>

	<section class="about" id="about">

		<h2 class="sub-heading">ABOUT US </h2>
		<h1 class="heading"> why choose us? </h1>

		<div class="row">

			<div class="image">
				<img src="images/p.png" alt="">
			</div>

			<div class="content">
				<h3>best food in the country</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat
					voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta
					odio corporis nihil!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque
					deleniti iste alias, eum natus.</p>
				<a href="#" class="btn">learn more</a>
			</div>
		</div>
	</section>



	<section class="contact" id="locate">

		<h1 class="heading"> <span>OUR</span> Location </h1>

		<div class="row">

			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.496098927975!2d88.4126879144318!3d22.447984243191446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02765321b3ac7b%3A0xdb539aeb641e2c8!2sInstitute%20of%20Hotels%20and%20Restaurant%20Management%20(IHRM)%7C%20Hotel%20Management%20College%20in%20South%20Kolkata%20%7C%20BHM%20College%7C%20IHRM%20Kolkata%7C%20Hospitality%20Mangement%20College%20in%20Kolkata%7C%20IHRM%7C!5e0!3m2!1sen!2sin!4v1633236109626!5m2!1sen!2sin"
				width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<div id="reg-log-div" class="col-md-12" style="display:block;">		
			<div class="col-md-12" style="display: none;" id="regdiv">
			<form action="" method="POST">
				<div id="contact">
					<h3>Contact Us</h3>
					<div class="inputBox">
						<span class="fas fa-user"></span>
						<input type="text" name="fname" placeholder="Enter First Name" required>
					</div>
					<div class="inputBox">
						<span class="fas fa-user"></span>
						<input type="text" name="lname" placeholder="Enter Last Name" required>
					</div>
					<div class="inputBox">
						<span class="fas fa-envelope"></span>
						<input type="email" name="email" placeholder="Enter Email" required>
					</div>
					<div class="inputBox">
						<span class="fas fa-eye"></span>
						<input type="password" name="password" placeholder="Enter Password" required>
					</div>
					<div class="inputBox">
						<span class="fas fa-phone"></span>
						<input type="number" name="phone" placeholder="Enter Phone Number" required>
					</div>
					<div class="inputBox">
						<span class="fas fa-home"></span>
						<input type="text" name="address" placeholder="Enter Address" required>
					</div>
					<input type="submit" value="Register" class="btn" name="register"><br>
					
					<!-- <input type="button" value="LogIn" class="btn">  -->
				</div>

			</form>
		</div>
      <div class="col-md-12" style="display:block;" id="logdiv">
			<form action="" method="POST">
				<div id="contact">
					
					<div class="inputBox">
						<span class="fas fa-envelope"></span>
						<input type="email" name="email" placeholder="Enter Registerd Email" required>
					</div> 
					<div class="inputBox">
						<span class="fas fa-eye"></span>
						<input type="password" name="password" placeholder="Enter Password" required>
					</div> 
					<input type="submit" value="LogIn" name="login-btn" class="btn">

					 <h2  style="margin-top:20px;">Not Registerd?</h2><button onclick="regfn()">Register Now!</button> 
				</div>


			</form>	
		</div>
	</div>




		<div style="  position: sticky; right: 100px; bottom: 0px;">
			<a href="#">
				<button type="button" class="btn1 btn-outline-primary"><i class="fa fa-arrow-up"
						aria-hidden="true" style="color: #fff;"></i></button>
			</a>
		</div>



	</section>



	<section class="footer">

		<div class="box-container">

			<div class="box">
				<h3>Locations</h3>
				<a href="#">Sonarpur</a>
				<a href="#">Narendrapur</a>
				<a href="#">Garia</a>
				<a href="#">New-Garia</a>
				<a href="#">Baliganj</a>
				<a href="#">Salt Lake</a>
				<a href="#">DumDum</a>
				<a href="#">Belgharia</a>
				<a href="#">Sodepur</a>
			</div>

			<div class="box">
				<h3>Quick Links</h3>
				<a href="INDEX.html">Home</a>
				<a href="#">Dishes</a>
				<a href="menu.html">Menu</a>
				<a href="#">About</a>
				<a href="contact.html">Contact</a>
			</div>

			<div class="box">
				<h3>Contact Info</h3>
				<a href="#">+91-8777395971</a>
				<a href="#">+111-222-3333</a>
				<a href="#">foodshades@gmail.com</a>
				
				<a href="#">kolkata, india - 400104</a>
			</div>

			<div class="box">
				<h3>Follow Us</h3>
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
				<a href="#">Linkedin</a>
			</div>

		</div>

		<div class="credit"> © 2022 FoodShades. All Rights Reserved. </div>

	</section>

	
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!--owl carocel jquery-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  

    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
    	<script src="script.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
<?php

   	
    if (isset($_POST['register'])) {
	
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];


        $sql1 = "select * from customer where email = '$email'";
        $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result1) > 0) {
            echo "<script>alert('Error!! Email Already Exsists..Use Different Email..')</script>";
        } else {
			

            $sql2 = "insert into customer ( fname, lname,  email, password, phone, address)
                      values('$fname', '$lname', '$email', '$password', '$phone', '$address')";

			  

		$query = mysqli_query($conn, $sql2);
            if ($query) {
            	
                echo "<script>alert ('Registered Successfully!')</script>";
                
      	
                
            } else {
                echo "<script>alert('Error! Query Failed..')</script>";
            }
        }
    }

  
    ?>

    <?php
     
     if (isset($_POST['login-btn'])) {
        
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql="select * from customer where email='$email' and password='$password'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
      	$row=mysqli_fetch_assoc($result);

      	echo "<script>alert('Successfully Login');</script>";
      	session_start();
      	$_SESSION['uname']=$row['fname']." ".$row['lname'];
      	$_SESSION['uid']=$row['cus_id'];
      	echo $_SESSION['uid'];
      	echo '<script>
	         
	     document.getElementById("reg-log-div").style.display ="none";
	  	
      	</script>';
      }
      else{
      	echo "<script>alert('Please give a valid user id or password');</script>";
      }

     }


?>