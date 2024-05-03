<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css//about.css">
    <link rel="stylesheet" href="css//navbar.css">
    <link rel="stylesheet" href="css//footer.css">
    <script src="js//navbar.js"></script>
</head>
<body>
        <?php
            if(isset($_SESSION['email'])){
                include("header.php");

                echo"
                    <main>
                        <section class=\"a\">
                            <h2 style=\"background-image: url(images//bg-01.jpg);\">About</h2>
                        </section>
                        <section class=\"top\">
                            <div class=\"d\">
                                <h3 class=\"b\"> Our Story </h3>
                                <p>
                                    The blackcoat group is one of the world's leading fashion companies – in addition to blackcoat, the group includes Other Stories, Cos, Ship Monday, Monki, Weekday and  blackcoat Home. All  blackcoat products are distinguished by their unique identity, united by their passion and aspiration for the world of fashion and fashion, and always strive to ensure the quality of their products and to present them in a sustainable way to its customers.
                                </p>

                                <p>
                                    We always strive to provide the best sustainable fashion to our customers, and the commitment of our employees is a key factor in our success. To achieve success, we are always keen to create a better future for fashion, and we are using our capabilities in the market to develop an ideal fashion industry environment around the world.
                                </p>

                                <p>
                                    Any questions? Let us know in store at 2nd floor,  38 faisal str, Giza, Egypt or call us on 0155 301 7722
                                </p>
                            </div>

                            <div class=\"e\">
                                <div class=\"img\">
                                    <img class=\"img-1\" src=\"images//about.jpg\" alt=\"img\">
                                </div>
                                
                            </div>
                        </section>
                        <section class=\"bottom\">
                            <div class=\"g\">
                                <div class=\"i\">
                                    <img class=\"img-2\" src=\"images//about-02.jpg\" alt=\"img\">
                                </div>
                            
                            </div>
                            <div class=\"f\">
                                <h3 class=\"c\">Our Mission</h3>
                                <p> We always strive to provide the best sustainable fashion to our customers, and the commitment of our employees is a key factor in our success. To achieve success, we are always keen to create a better future for fashion, and we are using our capabilities in the market to develop an ideal fashion industry environment around the world.</p>
                                <div class=\"h\">
                                <p>Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.</p>
                                <span>- steve's job</span>

                                </div>
                            </div>
                        </section>

                    </main>
                ";

                include('footer.php');
            }else{
                header('location: proceed.php');
            }
        ?>
    

    
</body>
</html>