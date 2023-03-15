<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!--fontawesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>FoodShades.admin</title>
    <style type="text/css">
      body{
        background-color: #bcbec2;
      }
      .a-log{
        display: block;
        margin: auto;
        margin-top: 10%;
        background-color: #D3E4CD;
        padding: 20px;
        border-radius: 5px;
      }
      .form-group{
        position: relative;
      }
      .form-group i{
        position: absolute;
        right: 10px;
        top: 45px;
        visibility: hidden;
      }
      .form-group input{
        /*border-color: #DD4A48;*/  /*for red*/
        /*border-color: #95CD41;*/  /*for green*/
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12 a-log">
          <h3 class="text-center pb-3">LOGIN</h3>
        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="emailinput" onkeyup="emailvd(this.value)" aria-describedby="emailHelp" name="email" required>
            <i id="success" class="fa fa-check-circle" style="color:#95CD41;" data-toggle="tooltip" data-placement="top" title="Valid Email"></i>
            <i id="error" class="fa fa-exclamation-circle" style="color:#DD4A48;" data-toggle="tooltip" data-placement="top" title="Invalid Email"></i>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
            <i class="fa fa-check-circle" style="color:#95CD41;"></i>
            <i class="fa fa-exclamation-circle" style="color:#DD4A48;"></i>
          </div>
          <button type="submit" class="btn btn-primary" name="a-login-btn">Submit</button>
        </form>
        <?php
          include 'connection.php';
          if(isset($_POST['a-login-btn'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];

            $sql="select * from admin where email='$email' && password='$pass'";
            $table=mysqli_query($conn,$sql);
            if(mysqli_num_rows($table) > 0){
              $row=mysqli_fetch_assoc($table);
              if($row['email']==$email && $row['password']==$pass){
              session_start();
              $_SESSION['email']=$row['email'];
             
            
              header("location:products/prodadd.php");
              }
            }else{
              echo '<div class="alert alert-danger text-center" role="alert">';
              echo "Invalid uername or password!";
              echo "</div>";
            }


            }




        ?>
      </div>
      
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    <script>
      function emailvd(data){
        const regex=/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/;
        if(regex.test(data)){
          document.getElementById('success').style.visibility="visible";
          document.getElementById('emailinput').style.borderColor="#95CD41";
          document.getElementById('error').style.visibility="hidden";

        }else{
          document.getElementById('error').style.visibility="visible";
          document.getElementById('emailinput').style.borderColor="#DD4A48";
          document.getElementById('success').style.visibility="hidden";


        }
      }
    </script>
  </body>
</html>
