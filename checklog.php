<?php
session_start();
    if(isset($_POST['email'])==true){
        $email=$_POST['email'];
        $password=$_POST['password'];
        require_once("connectDB.php");

        $r=$con->query("SELECT firstname,lastname,password,userrule FROM users WHERE email='$email';");
		if($r->num_rows == 0){
			echo'
				<div style="margin:40px auto;position:relative;width:fit-content;">
					<div style="font-size:150%;width:fit-content;margin:10px 0px">This Email doesn\'t exists</div>
					<center><div style="font-size:130%;width:fit-content;"> <a href="index.php">Return to login</a></div></center>
				</div>
				
			';
		}
        while($x=$r->fetch_array(MYSQLI_ASSOC)){
            if($x['password']==$password){
                $_SESSION['email']=$email;
                $_SESSION['firstname']=$x['firstname'];
                $_SESSION['lastname']=$x['lastname'];
                $_SESSION['userrule']=$x['userrule'];
                $_SESSION['cartcounter']=0;

                if($x['userrule']=='admin'){
                    header('location: add_product.php');
                }else if($x['userrule']=='user'){
                    $z=$con->query("SELECT * FROM cart WHERE cartuser='$email';");
                    while($y=$z->fetch_array(MYSQLI_ASSOC)){
                        $_SESSION['cartcounter']+=1;
                    }
                    header('location: home.php');
                }
            }else{
                echo"<script>alert('wrong password');
                             window.location.href='index.php   ';
                </script>";
            }
        }

    }
?>