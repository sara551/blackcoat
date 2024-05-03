
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>header</title>
	<link href="css/navbar.css" rel="stylesheet">
	<script src = "js/jquery.min.js"></script>
	<script src="js/navbar.js"></script>
</head>

<body>
	<header  class="header">          
            <navbar class="navbar" >
                <div class="logo">
					<img style="width: 60%;height: 100%;margin-left:15%;" src="images/finalblackcoatlogo.png"/>
				</div>
                <div class="links" id="links">
                    <div><a href="home.php">home</a></div>
                    <div><a href="products.php">shop</a></div>
                    <div><a href="about.php">about</a></div>
                    <div><a href="contact.php">contact</a></div>
                    <div><a href="logout.php">logout</a></div>

                </div>
                <div class="options">
                    <div class="optionsbtn">
                        <hr>
                        <hr>
                        <hr>
                    </div>
                </div>
                <div class="cart">
                    <?php echo"<div class=\"cartcounter\">".$_SESSION['cartcounter']."</div>"; ?>
                    <img onclick="gotocart();" src="images/cart_64.png"/>
                </div>
            </navbar>
        </header>
        <div class="optionslider">
            <img class="exit" src="images/exit_64.png"/>
            <div class="optionlinks">
                <ul>
                    <li><a href="home.php">home</a></li>
                    <li><a href="products.php">shop</a></li>
                    <li><a href="about.php">about</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="logout.php">logout</a></li>

                </ul>
            </div>
        </div>
</body>
</html>
