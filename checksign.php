<?php
        if(isset($_POST["first_name"])==true){
            $first_name=$_POST['first_name']; 
            $last_name=$_POST['last_name']; 
            $phone_num=$_POST['phone_num'];
            $email=$_POST['email'];
            $password=$_POST['password']; 
            $re_password=$_POST['re_password'];
            $found=0;
            require_once("connectDB.php");
            $r=$con->query("SELECT email FROM users WHERE 1;");
            while($x=$r->fetch_array(MYSQLI_ASSOC)){
                if($x['email']==$email){
                    $found=1;
                    break;
                }
            }
            if($found!=1){
                $r=$con->query("INSERT INTO users VALUES(null,'$first_name','$last_name','$phone_num','$email','$password','user');");
                if($r==true){
                    session_start();
                    $_SESSION['email']=$email;
                    $_SESSION['firstname']=$x['firstname'];
                    $_SESSION['lastname']=$x['lastname'];
                    $_SESSION['userrule']=$x['userrule'];
                    $_SESSION['cartcounter']=0;
                    header('location: home.php');
                }else {
                    echo"<script>alert('some thing went wrong!!');</script>";
                }
            }else{
                header('location: sign up.php');
            }
        }
    ?>