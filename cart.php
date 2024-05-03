<?php
session_start();
$user=$_SESSION['email'];
$cartcounter=$_SESSION['cartcounter'];
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/cart.css" rel="stylesheet">
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/cart.js"></script>
 

        <?php
            if(isset($_SESSION['email'])){
                include('header.php');
                echo"
                    <form action=\"makepayment.php\" method=\"post\">
                        <div class=\"carttotals\">
                            <header>CART TOTALS</header>
                            <p class=\"subtotal\" id=\"subtotal\">Subtotal:<subtotal>  $<input id=\"endsubtotal\" value=\"0\" readonly/></subtotal></p>
                            <hr>
                            <div>
                                <div class=\"left\">
                                    <p>Shipping:</p>
                                </div>
                                
                                <div class=\"right\">
                                    <p>There are no shipping methods available. Please double check your address, or contact us if you need any help.</p>
                                    <h4>CALCULATE Shipping</h4>
                                    <input type=\"text\" id=\"country\" name=\"country\" placeholder=\"country\" required/>
                                    <input type=\"text\" id=\"state\" name=\"state\" placeholder=\"state\" required/> 
                                    <input type=\"text\" id=\"postalcode\" name=\"postalcode\" placeholder=\"postalcode\" required/>
                                </div>
                            </div>
                            <hr>
                            <p class=\"totalp\">Total:<total>  $<input id=\"endtotal\" name=\"total\" value=\"0\" readonly/></total></p>
                            <input type=\"submit\" value=\"make payment\"/>
                        </div>
                    </form>
                    </div>
                    
                ";        
                echo"
                    <div class=\"cartdetails\">
                        <div class=\"cartitems\">
                            <div class=\"cartitemsheader\">
                                <fcol><p>PRODUCT</p></fcol>
                                <scol><p>PRICE</p></scol>
                                <tcol><p>QUANTITY</p></tcol>
                                <focol><p>TOTAL</p></focol>
                            </div>

                ";

                require_once('connectDB.php');
                $r=$con->query("SELECT * FROM cart WHERE cartuser='$user';");
                while($x=$r->fetch_array(MYSQLI_ASSOC)){
                    $id=$x['productid'];
                    $name=$x['productname'];
                    $price=$x['productprice'];
                    $image=$x['productimg'];
                    $color=$x['productcolor'];
                    $size=$x['productsize'];
                    $quantity=$x['quantity'];
                    echo"   
                        <div class=\"item\" >
                            <fcol>
                            <div class=\"left\"> <img class=\"itemimg\" id=\"itemimg\" src=\"images/".$image."\"/></div><div class=\"right\"><p class=\"itemname\" id=\"itemname\">".$name."</p></div>
                            </fcol>
                            <scol>
                                <span>$</span>
                                <input class=\"itemprice\" id=\"itemprice".$id."\" value=\"".$price."\" readonly/>
                            </scol>
                            <tcol>
                                <div class=\"quantityadjust\">
                                    <div class=\"left\" onclick=\"dropone('quantity".$id."','itemprice".$id."','totalitemprice".$id."');\"><p>-</p></div>
                                    <div class=\"quantity\" ><input id=\"quantity".$id."\" value=\"".$quantity."\" readonly/></div>
                                    <div class=\"right\" onclick=\"addone('quantity".$id."','itemprice".$id."','totalitemprice".$id."');\" ><p>+</p></div>
                                </div>
                            </tcol>
                            <focol>
                                <div class=\"total\" id=\"totalitemprice".$id."\">$0</div>
                            </focol>
                        </div> 
                        
                    ";
                    echo"<script>
                            x=document.getElementById('quantity".$id."').value;
                            p=document.getElementById('itemprice".$id."').value;
                            document.getElementById('totalitemprice".$id."').innerHTML='$'+(p*x);
                            var r=p*x;
                            subtotal=document.getElementById(\"endsubtotal\").value;
                            endtotal=document.getElementById(\"endtotal\").value
                            
                            document.getElementById('endsubtotal').value=subtotal-(-r);
                            document.getElementById('endtotal').value=endtotal-(-r);
                        </script>
                    ";
                }
                echo"</div></div>
                ";
                include('footer.php');

            }else{
                header('location: proceed.php');
            }
            

            
        ?>


    </head>

    <body>
                
               
                
                

                
           
    </body>
</html>