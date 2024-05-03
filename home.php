<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/home.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/home.js"></script>
    </head>
    <body>       
        <?php
            if(isset($_SESSION['email'])){
                include("header.php");

                echo"
                    <div id=\"slider\" class=\"slider\">
                        <img id=\"sliderimg1\" src=\"images//slide-01.jpg\"/>
                        <img id=\"sliderimg2\" src=\"images//slide-02.jpg\"/>
                        <img id=\"sliderimg3\" src=\"images//slide-03.jpg\"/>
                        <img id=\"sliderimg4\" src=\"images//slide-04.jpg\"/>
                    </div>
                    <form action=\"home.php\" method=\"post\">
						<div class=\"banners\">
                        <div onclick=\"gotoshoppingWomen();\" class=\"ban1\" onmouseenter=\"changebannercolorw('h31','p1');\" onmouseleave=\"changebannercolorb('h31','p1');\">
                            <div   class=\"bannnerbackground\">
                            </div>
                            <div  class=\"promo\">
                                <h3 id=\"h31\" >Women</h3>
                                <p id=\"p1\">Spring 2021</p>
                            </div>
                        </div>
                        <div onclick=\"gotoshoppingMen();\" class=\"ban2\" onmouseenter=\"changebannercolorw('h32','p2');\" onmouseleave=\"changebannercolorb('h32','p2');\">
                            <div class=\"bannnerbackground\">
                            </div>
                            <div class=\"promo\">
                                <h3 id=\"h32\">Men</h3>
                                <p id=\"p2\">Spring 2021</p>
                            </div>
                        </div>
                        <div onclick=\"gotoshoppingBelts();\" class=\"ban3\" onmouseenter=\"changebannercolorw('h33','p3');\" onmouseleave=\"changebannercolorb('h33','p3');\">
                            <div class=\"bannnerbackground\">  
                            </div>
                            <div class=\"promo\">
                                <h3 id=\"h33\">Belts</h3>
                                <p id=\"p3\">New Trend</p>
                            </div>
                        </div>
                        <div onclick=\"gotoshoppingBags();\" class=\"ban4\" onmouseenter=\"changebannercolorw('h34','p4');\" onmouseleave=\"changebannercolorb('h34','p4');\">
                            <div class=\"bannnerbackground\">  
                            </div>
                            <div class=\"promo\">
                                <h3 id=\"h34\">Bags</h3>
                                <p id=\"p4\">New Trend</p>
                            </div>
                        </div>
                        <div onclick=\"gotoshoppingWatches();\" class=\"ban5\" onmouseenter=\"changebannercolorw('h35','p5');\" onmouseleave=\"changebannercolorb('h35','p5');\">
                            <div class=\"bannnerbackground\">  
                            </div>
                            <div class=\"promo\">
                                <h3 id=\"h35\">whatces</h3>
                                <p id=\"p5\">New Trend</p>
                            </div>
                        </div>
                        <div onclick=\"gotoshoppingAccessories();\" class=\"ban6\" onmouseenter=\"changebannercolorw('h36','p6');\" onmouseleave=\"changebannercolorb('h36','p6');\">
                            <div class=\"bannnerbackground\">  
                            </div>
                            <div class=\"promo\">
                                <h3 id=\"h36\">Accessories</h3>
                                <p id=\"p6\">New Trend</p>
                            </div>
                        </div>
                    </div>
		</form>
                ";

                include('footer.php'); 
            }else{
                header('location: proceed.php');
            }

            
        ?>
        
    </body>
</html>