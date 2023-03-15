<?php include 'connection.php' 
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    *{
      padding: 0;
      margin: 0;


    }
    .leftdiv{
      width: 30%;
      height: 100%;
      position: fixed;
      background-color: #343536;
    }
    .li{
    text-decoration: none;
    list-style: none;
    margin: 10px 50px 20px 50px;
}
.li{
  /*background-color: white;*/
  width: 300px;
  margin: 50px;
  font-size: 30px;
}
/*.li:hover{
  background-color: #fff;
}*/
.li a{
    width: 250px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 30px;
     margin: 80px 50px 20px 50px; 
    border-radius: 7px;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 10px;
    padding-bottom: 10px;
    transition: all 0.3s;
}
.li a:hover{
    cursor: pointer;
    background-color: #b3b4b5;
    /*color: #00092C;*/
   /* text-decoration: underline;*/
}
    #subnav{
     display: none;
     height: 0px!important;
     width: 100%!important;
     margin-left: -55px!important;
     margin-top: 7px!important;
     margin-bottom: 50px!important;
 } 
 .products:hover #subnav{
     display: block;
     position: absolute;
     /*background:#b3b4b5 ;*/
 } 
 .subli{
    
     list-style: none;
     display: block;
 }
 .subli a{
      margin: 0px 5px 0px -25px!important;
      width: 50px !important;
      border-radius:0px!important;
      text-decoration: none!important;
      color: #fff!important;
      display:flex!important;
      font-size: 20px!important;

      
 }
 .subli a:hover{
  background: none!important;
 }
 #subnav ul{
     display: flex!important;
 }
 .picdiv img{
  border-radius: 50%;

 }

  </style>
</head>
<body>
  <div class="leftdiv">
  
  <div class="picdiv">
    
           
    <img width="80px" height="80px" src="images/admin.png">
    <h3 style="color:#fff; margin-left:10px;"></h3>
          
   
  </div>

  <div class="subleft">
    <ul>
      <li class="li"><a href="">HOME</a></li>
      <li class="products li" onclick="opensubnav()"><a href="">PRODUCTS</a>

<div id="subnav">
  <ul>
    <li class="subli"><a href="products/prodadd.php">ADD</a></li>
    <li class="subli"><a href="">REMOVE</a></li>
    <li class="subli"><a href="">VIEW</a></li>
  </ul>
</div>
      </li>
      <li class="li"><a href="">CUSTOMER</a></li>
       
      
     
    </ul>
  </div>
</div>
</body>
<script >
  function opensubnav(){
    document.getElementById("subnav").style.height ="50px";
  }
</script>
</html>

