<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Messages</title>
		<script src="js/jquery-3.6.0.js"></script>
		<link href="css/navbar.css" rel="stylesheet">
		<script src="js/navbar.js"></script>
		<link href="css/messages.css" rel="stylesheet">
	</head>
	<body>
		<?php
			if($_SESSION['userrule']=='admin'){
				echo"<div class=\"profileDetails\">
						<img src=\"images/img_202755.png\" width=\"80\" height=\"80\" class=\"profileImg\">
						<span>".$_SESSION['firstname']." ".$_SESSION['lastname']."</span>
						<a class=\"email\" href=\"mailTo:".$_SESSION['email']."\">".$_SESSION['email']."</a>
					</div>
				";
				require_once("connectDB.php");
				$r = $con->query("SELECT * FROM messages WHERE 1");
				if($r){
					while($x = $r->fetch_array(MYSQLI_ASSOC)){
						echo"
						<div class=\"messageBox\">
							<img src=\"images/th (5).jfif\" width=\"50\" height=\"50\" class=\"userProfile\">
							<span class=\"username\">".$x['email']."</span>
							<div class=\"message\" dir=\"ltr\">".$x['message']."</div>
						</div>";
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
								<div><a style=\"margin-left:100px\" href=\"logout.php\">logout</a></div>
			
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
							</ul>
						</div>
					</div>
				";


			}else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>