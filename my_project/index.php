<?php
require "includes/common.php";
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<html>
    <head>
        <title>Boxes, Baskets and Bins Store</title>
        <?php
        include "includes/links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
         <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell boxes, baskets and bins.</h1>
                            <p>Flat 40% OFF on special items</p>
                            <br/>
                            <a  href="signup.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="home.php" >
                            <div class="thumbnail">
                                <img src="images/boxes.jpg" alt="">
                                <div class="caption">
                                    <h3>Boxes</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php" >
                            <div class="thumbnail">
                                <img src="images/bg.jpg" alt="">
                                <div class="caption">
                                    <h3>Baskets</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php" >
                            <div class="thumbnail">
                                <img src="images/bins.jpg" alt="">
                                <div class="caption">
                                    <h3>Bins</h3>
                                    <p>Our exquisite collection of bins.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!--Item categories listing end-->
        </div>
      
        <?php        
        include "includes/footer.php";
        ?>
    </body>
</html>