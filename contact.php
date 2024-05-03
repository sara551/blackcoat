<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css//contact.css">
    <link rel="stylesheet" href="css//navbar.css">
    <link rel="stylesheet" href="css//footer.css"> 
    <script src="js//navbar.js"></script>
    <?php
        if(isset($_SESSION['email'])){
            include('header.php');
            if(isset($_POST["email"])){
                require_once("connectDB.php");
                $email=$_POST["email"];
                $message=$_POST["message"];
                $r=$con->query("INSERT INTO messages VALUES(null,'$email','$message');");
                if($r==true){
                    echo"<script>alert('message has benn send !!');
                    </script>";
                }else {
                    echo"failed";
                }
            }
            echo"
                <section class=\"a\">
                    <h2 style=\"background-image: url(images//bg-01.jpg);\">Contact</h2>
                </section>

                <section class=\"flex\">
                    <div class=\"left\">
                        <form action=\"contact.php\" method=\"post\">
                            <h4>Send Us A Message</h4>
                            <div class=\"left-top\">
                                <img class=\" a\" src=\"images//icon-email.png\" alt=\"img\" style=\"position: absolute; top: calc(50% - -100px);left: 202px;\">
                                <input class=\"b\" type=\"text\" name=\"email\" id=\"email\" size=\"48\" maxlength=\"30\" onkeyup=\"fun1();\" placeholder=\"Your Email Address\" style=\"outline: none; border:none; width:100%;\" >
                                
                            </div>
                            <div class=\"left-bottom\">
                                <textarea class=\"c\" name=\"message\" placeholder=\"How Can We Help ?\" id=\"message\" cols=\"30\" rows=\"10\"></textarea>
                            </div>
                            <button id=\"submit\" onclick=\"send();\">Submit</button>
                        </form>

                    </div>
                    <div class=\"right\">
                        
                        <div class=\"right-top\">     
                            <div class=\"rti\">
                                <img src=\"images//icon-address.png\" alt=\"img\">
                                <h5> Address </h5>
                            </div>      
                        
                            <p>Blackcoat store at the 2nd floor, 38 faisal str, Giza, Egypt</p>
                        </div>
                        
                        <div class=\"right-center\">   
                            <div class=\"rci\">
                                <img src=\"images//icon-call.jpg\" alt=\"img\">
                            <h5>Lets Talk</h5>
                            </div>     
                            <p> 
								<a href=\"tel:01553017722\">
                                	01553017722
                                </a>
							</p>
                        </div>
                        <div class=\"right-bottom\">
                            <div class=\"rbi\">
                                <img src=\"images//icon-email.png\" alt=\"img\">
                                <h5>Sale Support</h5>
                            </div>
                            
                            <p>
                                <a href=\"mailTo:zeiadAhmed33@gmail.com\">
                                	zeiadAhmed33@gmail.com
                                </a> 
                            </p>

                        </div>


                    </div>
                </section>
            ";
            include('footer.php');

        }else{
            header('location: proceed.php');
        }
        
    ?>
    <script>
        var oksend=false;
        function fun1(){
            p=document.getElementById('email').value;
            y=/^[\w]{3,20}([\d]{1,4})?@[\w]{3,10}([\d]{1,10})?[\w]?(.[\w]{3,10}$){1,8}/;
            if (y.test(p)==true) {
                document.getElementById('email').style.border='1px solid green';
                oksend=true;
                document.getElementById('submit').style.visibility='visible';

            } else {
                document.getElementById('email').style.border='1px solid red';
                oksend=false;
            }

        }
    </script>
</head>
<body>
        
        

</body>
</html>