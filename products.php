<?php
session_start();
?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>products</title>
	<link href="css/products.css" rel="stylesheet">
	<script src = "js/jquery.min.js"></script>
	<script src="js/products.js"></script>
	<script src="js/jquery-3.6.0.js"></script>
	</head>
	
	<body id="myLink">
		<?php
			if(isset($_SESSION['email'])){	
				include("header.php");
				echo"
						<div class=\"productNav\">
						<div><a href=\"#AllProducts\" id=\"all\" class=\"all\">All Products</a></div>
						<div><a href=\"#Women\" id=\"women\">Women</a></div>
						<div><a href=\"#Men\" id=\"men\">Men</a></div>
						<div><a href=\"#Bags\" id=\"bags\">Bags</a></div>
						<div><a href=\"#Accessories\" id=\"accessories\">Accessories</a></div>
						<div><a href=\"#Watches\" id=\"watches\">Watches</a></div>
						<div><a href=\"#Belts\" id=\"belts\">Belts</a></div>
					</div>
					<div>
				";

				if(isset($_POST['id'])){
						$id=$_POST['id'];
						$color=$_POST['color'];
						$size=$_POST['size'];
						$quantity=$_POST['quantity'];
						$cartuser=$_SESSION['email'];
						$image1=null;
						$price=0;
						$name=null;
						require_once("connectDB.php");
						$a = $con->query("SELECT * FROM products WHERE id='$id'");
						if($a){
							while($x = $a->fetch_array(MYSQLI_ASSOC)){
								$name=$x['name'];
								$price=$x['price'];
								$image1=$x['image1'];
							}
						}
						$z = $con->query("SELECT * FROM cart WHERE productid='$id'");
						if($z){
							$found=0;
							while($y = $z->fetch_array(MYSQLI_ASSOC)){
								if($y['productid']==$id&&$cartuser==$y['cartuser']){
									$found=1;
								}
							}
							if($found==1){
								echo"<script>alert('product is already added to cart!!')</script>";
							}else{
								$r=$con->query("INSERT INTO cart VALUES('$id','$cartuser','$name','$price','$image1','$quantity','$size','$color')");
								if($r==true){
									echo"<script>alert('product added to cart!!')</script>";
									$_SESSION['cartcounter']+=1;

								}else {
									echo"<script>alert('some thing went wrong !!')</script>";
								}
							}
						}


				}

				require_once("connectDB.php");
				$a = $con->query("SELECT * FROM products WHERE 1");
				if($a){
					while($x = $a->fetch_array(MYSQLI_ASSOC)){
						echo"<div class=\"card ".$x['category']."\" >
							<div class=\"card-image\">
								<img src=".'images/productimages/'.$x['image1']." width=\"100%\" alt=".$x['name']." height=\"100%\" onMouseOver=\"buttonHover('image".$x['id']."','button".$x['id']."')\" id='image".$x['id']."' onMouseOut=\"buttonHidden('image".$x['id']."','button".$x['id']."')\">
								<div class=\"button\" id='button".$x['id']."'>
									<input type=\"button\" value=\"Quick View\" onMouseOver=\"buttonHover('image".$x['id']."','button".$x['id']."')\" id='image".$x['id']."')\" onClick=\"buttonHidden('image".$x['id']."','button".$x['id']."');openProduct('".$x['image1']."','".$x['image2']."','".$x['image3']."');text('".$x['name']."','".$x['price']."','".$x['details']."','".$x['id']."')\">
								</div>
							</div><br>
							<div class=\"details\">
								<div class=\"item-name\">
									<a href=\"\">".$x['name']."</a>
								</div>
								<div class=\"item-price\" id=\"item-price\">$".$x['price']."</div>
							</div>
						</div>
						";
					}

				}

				echo"
					</div>
					<section id=\"product\">
						<form action=\"products.php\" method=\"post\">
							<div class=\"view\">
								<div class=\"small-image small-image0\"><img src=\"\" width=\"100%\" height=\"100%\" id=\"product-img1\" onClick=\"change('product-img1')\"></div>
								<div class=\"small-image small-image1\"><img src=\"\" width=\"100%\" height=\"100%\" id=\"product-img2\" onClick=\"change('product-img2')\"></div>
								<div class=\"small-image small-image2\"><img src=\"\" width=\"100%\" height=\"100%\" id=\"product-img3\" onClick=\"change('product-img3')\"></div>
								<div class=\"productImg\"><img src=\"\" width=\"45%\" height=\"90%\" id=\"productImage\"></div>
								<div class=\"close\" onClick=\"closeProduct()\">X</div>
								<div class=\"productDetails\">
									<div id=\"productName\"></div>
									<div class=\"detail\" id=\"productPrice\"></div>
									<div class=\"description\" id=\"details\">
										Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
									</div>
									<div>
										<div class=\"size\">
											<span class=\"sizeTitle\">Size</span>
											<select name=\"size\" class=\"sizeOptions\" required>
												<option value=\"\"disabled selected hidden>Choose an option</option>
												<option>Size XS</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
										</div>
										<div class=\"size\">
											<span>Color</span>
											<select name=\"color\" class=\"sizeOptions\" required>
												<option value=\"\" disabled selected hidden>Choose an option</option>
												<option>Red</option>
												<option>Black</option>
												<option>Yellow</option>
												<option>White</option>
											</select>
										</div>
									</div>
									<div class=\"carts\">
										<input class=\"minus\" value=\"-\" type=\"button\" onClick=\"counterdown()\">
										<input name=\"quantity\" value=\"1\" type=\"text\" class=\"value\" id=\"itemsNumber\">
										<input class=\"minus\" value=\"+\" type=\"button\" onClick=\"counterup()\">
										<input type=\"submit\" value=\"ADD TO CART\" class=\"add\">
										<input style=\"visibility:hidden;\" id=\"productid\" value=\"\" name=\"id\"/>
									</div>
								</div>
							</div>
						</form>
					</section>
				";

				include('footer.php');



			}else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>
