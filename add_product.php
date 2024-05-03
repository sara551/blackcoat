<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Product</title>
	<script src="js/jquery-3.6.0.js"></script>
	<link href="css/navbar.css" rel="stylesheet">
	<script src="js/navbar.js"></script>
	<script src="js/add_product.js"></script>
	<link href="css/add_product.css" rel="stylesheet">
	
	<script>
		$(document).ready(function(){
			w = $(window).width();
			h = $(window).height();
			containerHeight = $(".container").height();
			
			$(".container").css("margin-top",(((h-containerHeight)/2)+120));
		});
		
		
	</script>
</head>

<body>
	<?php
		if($_SESSION['userrule']=='admin'){

			if(isset($_POST['productname'])){
				$productname=$_POST['productname'];
				$details=$_POST['details'];
				$price=$_POST['price'];
				$category=$_POST['category'];

				$ok=true;
				if(($_FILES['img1']['size']>10*1000*1000) || ($_FILES['img2']['size']>10*1000*1000) || ($_FILES['img3']['size']>10*1000*1000)){
					$ok=false;
					echo"<script>alert('product images size is very high!!')</script>";

				}
				if( (file_exists($_FILES['img1']['name'])) || (file_exists($_FILES['img2']['name'])) || (file_exists($_FILES['img3']['name'])) ){
					$ok=false;
					echo"<script>alert('product img is allredy exists!!')</script>";
				}
				if($ok==true){
					move_uploaded_file($_FILES['img1']['tmp_name'],"images/productimages/".$_FILES['img1']['name']);
					move_uploaded_file($_FILES['img2']['tmp_name'],"images/productimages/".$_FILES['img2']['name']);
					move_uploaded_file($_FILES['img3']['tmp_name'],"images/productimages/".$_FILES['img3']['name']);

					$fimgname=$_FILES['img1']['name'];
					$simgname=$_FILES['img2']['name'];
					$timgname=$_FILES['img3']['name'];

					require_once("connectDB.php");
					$r=$con->query("INSERT INTO products VALUES('','$productname','$price','$fimgname','$simgname','$timgname','$details','$category')");
					if($r==true){
						echo"<script>alert('product saved!!')</script>";
					}else {
						echo"<script>alert('product not saved!!')</script>";
					}

				}else{
					echo"failed";
				}
			}
			echo"
				<header class=\"header\">          
					<navbar class=\"navbar\" >
						<div class=\"logo\">
							<img style=\"width: 60%;height: 100%;margin-left:15%;\" src=\"images/finalblackcoatlogo.png\"/>
						</div>
						<div class=\"links\">
							<div style=\"width:200px;\"><a href=\"add_product.php\">add product</a></div>
							<div><a href=\"messages.php\">messages</a></div>
							<div style=\"margin-left:100px\"><a href=\"logout.php\">logout</a></div>

						</div>
						<div class=\"options\">
							<div class=\"optionsbtn\">
								<hr>
								<hr>
								<hr>
							</div>
						</div>
					</navbar>
				</header>
				<div class=\"optionslider\">
					<img class=\"exit\" src=\"images/exit_64.png\"/>
					<div class=\"optionlinks\">
						<ul>
							<li><a  href=\"addproduct.php\">add product</a></li>
							<li><a  href=\"messages\">messages</a></li>
							<li><a  href=\"logout.php\">logout</a></li>
							
						</ul>
					</div>
				</div>

				<div class=\"container\">
					<div class=\"content\">
						<h2>Add Product</h2>
						<div class=\"divContent\">
							<form action=\"add_product.php\" method=\"post\" enctype=\"multipart/form-data\">
								<table>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Name</td>
										<td><input type=\"text\" placeholder=\"Name\" name=\"productname\" id=\"productName\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Details</td>
										<td><input type=\"text\" placeholder=\"Details\" name=\"details\" id=\"details\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Price</td>
										<td><input type=\"text\" placeholder=\"Price\" name=\"price\" id=\"price\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Category</td>
										<td><input type=\"text\" placeholder=\"Category\" name=\"category\" id=\"category\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">First Image</td>
										<td><input type=\"file\" id=\"img1\" name=\"img1\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Second Image</td>
										<td><input type=\"file\" id=\"img2\" name=\"img2\"></td>
									</tr>
									<tr class=\"divItems\">
										<td class=\"divTitle\">Third Image</td>
										<td><input type=\"file\" id=\"img3\" name=\"img3\"></td>
									</tr>
								</table>
								<div class=\"divItemsbutton\"><a href=\"#\" id=\"ref\"><input type=\"button\" id=\"submitButton\" onClick=\"verifyAll()\" value=\"Add Product\"></a></div>
							</form>
						</div>
					</div>
				</div>
			";
		}else{
			header('location: proceed.php');
		}
	?>
	
	
</body>
</html>
