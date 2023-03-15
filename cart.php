<?php
session_start();
error_reporting(0);
include 'connection.php';
include 'head.php';
$userid= $_SESSION['uid'];
if(isset($_GET['add-item'])){
	 $pid=$_GET['product_id'];
	 $qty=$_GET['qty'];
	 $pname=$_GET['pname'];
	 $pprice=$_GET['pprice'];
$sql="INSERT INTO `cart`( `cus_id`, `pid`, `qty`, `pname`, `price`) VALUES ('$userid','$pid','$qty','$pname','$pprice')";
$cart=mysqli_query($conn,$sql);
if($cart){
	// echo "<script>alert('Successfully inserted');</script>";
	echo "<script>window.location.href = 'cart.php'</script>";
}

}

?>


<div class="container-fluid my-5" style="position: absolute;top:100px;">
	<h1>Your Cart Items</h1>
	<!-- <div style="float: right; margin-bottom: 10px; margin-right: 50px;">
		<form action="index.php">
			<i class="fa fa-home"><input style="height: 50px; padding: 10px;"  class=" btn btn-success" type="submit" name="back" value="Dasboard"></i>
			<button type="submit" name="back" style="height: 50px; padding: 10px;"  class=" btn btn-success"><i class="fa fa-home"> Dashboard</i></button>
		</form>
	</div> -->
	
     <table class="table table-hover " style="font-size:20px;">
  <thead>

    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  	<?php
  	$c=0; 
  	$p=0;
    $sql="select * from cart where cus_id='$userid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    	while($row=mysqli_fetch_assoc($result)){
    		$c+=1;
    		$p+=$row['price']*$row['qty'];
    		?>
    <tr>
      <th scope="row"><?php echo $c;?></th>
      <td><?php echo $row['pname']; ?></td>
      <td>
      <form method="POST">
      <input style="width:50px;"type="number"value="<?php echo $row['qty']; ?>" name="upqty">
      <button class="btn btn-success " type="submit" name="update_qty">Update</button>
	  <input type="hidden" name="pid_no" value="<?php echo $row['pid'];?>">
	</form>
	<?php
	    if(isset($_POST['update_qty'])){
			$qty=$_POST['upqty'];
			$pid=$_POST['pid_no'];
			$sql="UPDATE cart SET qty='$qty' where pid='$pid'";
			$table=mysqli_query($conn,$sql);
			if(!$table){
				echo 'faild update';
			}else{
				echo "<script>window.location.href = 'cart.php'</script>";
			}
		}


	?>
  </td>
      <td>₹<?php echo $row['price']*$row['qty'];?></td>
      <td>
      	<form method="POST">
      	<button class="fa fa-trash btn btn-danger " type="submit" name="delitm" style="background-color: #e6746c;"></button>
      	<input type="hidden" name="pid_no" value="<?php echo $row['pid'];?>">
        </form>  
        <?php
			if(isset($_POST['delitm'])){
				$pid=$_POST['pid_no'];
				$sql="DELETE FROM cart WHERE pid=$pid";
				$table=mysqli_query($conn,$sql);
				if(!$table){
				    echo 'faild delete';
				}else{
				    echo "<script>window.location.href = 'cart.php'</script>";
				    }
				
			}
 		?>
      </td>
    </tr>
    <?php
    }
}
else{
	echo '
				<tr>
				<th colspan="5" style="font-size:27px;font-weight: bold;text-align:center;">No Items Found</th>
				</tr>';
}

  ?>
  <tr>
  	<td></td>
  	<td></td>
  	<th style="font-size:27px;font-weight: bold;">Total Amount:</th>
  	<th style="font-size:27px;font-weight: bold;">₹<?php echo $p;?></th>
  </tr>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>