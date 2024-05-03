<?php
session_start();
    if(isset($_POST['total'])){
        $total=$_POST['total'];
        $country=$_POST['country'];
        $state=$_POST['state'];
        $postalcode=$_POST['postalcode'];
        $useremail=$_SESSION['email'];
        require_once("connectDB.php");
		$r=$con->query("INSERT INTO payments VALUES(null,'$useremail','$country','$state','$postalcode','$total')");
		if($r==true){
			echo"<script>alert('payment has done !!')</script>";
            header('location: home.php');

		}else {
			echo"<script>alert('some thing went wrong pleas try again!!')</script>";
            header('location: cart.php');
        }
    }else{
        echo"<script>alert('some thing went wrong please try again!!')<script>";
        header('location: cart.php');
    }    
?>
