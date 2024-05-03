<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="css//sign up.css">

    <script>
        
        var fname=false;
        var lname=false;
        var phone=false;
        var password=false;
        var repassword=false;
        var email = false;
        function showbtn(){
             if(fname&&lname&&phone&&email&&password&&repassword)
             {
                document.getElementById('submit').style.visibility="visible";
             }else{
                document.getElementById('submit').style.visibility="hidden";
             }
            }
           function fun1(){
             m=document.getElementById('first_name').value ;
             x=/^([A-Z][\w]{2,20}[\s]?){1,10}$/;
             if (x.test(m)!=true) {
                document.getElementById('first_name').style.border="1px solid red";
                 fname = false;
                }
                else{
                document.getElementById('first_name').style.border="1px solid green";
                fname=true;showbtn();
             } 
           }
           function fun2(){
             q=document.getElementById('last_name').value ;
             e=/^([A-Z][\w]{2,20}[\s]?){1,10}$/;
             if (e.test(q)!=true) {
                document.getElementById('last_name').style.border="1px solid red";
                 lname = false;
             } else{
                document.getElementById('last_name').style.border="1px solid green";
                lname=true;
                showbtn();
             }
            }
            function fun3(){
             p=document.getElementById('phone_num').value;
             y=/^([0][0][2][0][2]|[+][2][0][2]|[0][2]|[0][1][0]|[0][1][1]|[0][1][2]|[0][1][5])?[\d]{8}$/;
             if (y.test(p)!=true) {
                document.getElementById('phone_num').style.border="1px solid red";
                phone = false;
             }else{
                document.getElementById('phone_num').style.border="1px solid green";
                phone=true;
                showbtn();
             }
            }
 
            function fun4(){
             r=document.getElementById('email').value;
             t=/^[\w]{3,20}([\d]{1,4})?@[\w]{3,10}([\d]{1,10})?[\w]?(.[\w]{3,10}$){1,8}/;
             if (t.test(r)!=true) {
                document.getElementById('email').style.border="1px solid red";
                 email = false;
             }else{
                document.getElementById('email').style.border="1px solid green";
                email=true;
                showbtn();
             }
            }
            function fun5(){
             s=document.getElementById('password').value;
             c=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$/
             if (c.test(s)!=true) {
                document.getElementById('password').style.border="1px solid red";
                pssword = false;
            }else{
                document.getElementById('password').style.border="1px solid green";
                password=true;
                showbtn();
             } 
            }
            function fun6(){
             pass1=document.getElementById('password').value;
             pass2=document.getElementById('re_password').value;
             
             if (pass1!=pass2) {
                document.getElementById('re_password').style.border="1px solid red";
                repassword = false;
             }else{
                document.getElementById('re_password').style.border="1px solid green";
                repassword=true;
                showbtn();
             } 
            }
            
     
 
    </script>
    <script  src="js//Untitled-1.js">
			$(".txtb input").on("focus",function(){
				$(this).addClass("focus");
				
			});
			
			$(".txtb input").on("blur",function(){
				if($(this).val()=="")
				$(this).removeClass("focus");
				
			});
		</script>
    <style>

        input{
            color:#FFF;
        }

    </style>
</head>
<body  style="background-image: url(images/pexels-brand-&-palms-768975.jpg);">
<form action="checksign.php" method="post" class="login-form">
    <div class="logo">
		<img style="width: 60%;margin-left:19%;" src="images/finalblackcoatlogo.png"/>
	</div>
    <h1>sign up</h1>
			
			<div class="txtb">
				<input type="text" placeholder="First Name" id="first_name"name="first_name" onkeyup="fun1();"  required />
				<!-- <span data-placeholder="First_name"></span> -->
                <!-- The first letter must be a captain -->
			</div>

			<div class="txtb">
				<input type="text" placeholder="Last Name"  id="last_name"name="last_name" onkeyup="fun2();" required/>
				<!-- <span data-placeholder="Last_name"></span> -->
                <!-- The first letter must be a captain -->
			</div>
            <div class="txtb">
				<input type="text" placeholder="Phone Number" id="phone_num"name="phone_num" onkeyup="fun3();" required />
				<!-- <span data-placeholder="Phone_number"></span> -->
                <!-- The phone number must be Egyptian -->
			</div>
            <div class="txtb">
				<input type="text"  placeholder="Email" id="email" name="email" onkeyup="fun4();" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
				<!-- <span data-placeholder="Email"></span> -->
			</div>
            <div class="txtb">
				<input type="password" placeholder="Password" id="password"name="password" onkeyup="fun5();" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"/>
				
                <!--
                    Password must contain at least one digit [0-9].
                    Password must contain at least one lowercase Latin character [a-z].
                    Password must contain at least one uppercase Latin character [A-Z].
                    Password must contain at least one special character like ! @ # & ( ).
                    Password must contain a length of at least 8 characters and a maximum of 20 characters.
                -->
			</div>
            <div class="txtb">
				<input type="password" placeholder="Re Password" id="re_password" name="re_password" onkeyup="fun6();" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" />
				<!-- <span data-placeholder="Re_password"></span> -->
			</div>
			<input type="submit" style="visibility:hidden;" id="submit" class="logbtn" value="sign up" />
			
			<div class="bottom-text">
				hava an account?<a href="index.php">login</a>
				
			</div>
 
            
     
    </form>
    

</body>

</html>