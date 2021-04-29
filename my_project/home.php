<?php
require "includes/common.php";

?>
<html>
    <head>
        <title>Home | Boxes, Baskets and Bins Store </title>
        <?php
        include "includes/links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes/header.php";
        include 'includes/check-if-added.php';
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
        ?>
        <div class="container">
            <div class="jumbotron">
                <div style="float:center;">
                <?php
                echo "<h1>Welcome</h1>";
                ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            #1
                        </div>
                        <div class="panel-body">
                            <img src="images/1.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>VP STORES Bamboo Charcoal Practical Foldable Clothing Storage Bag Box Clothes Closet Organizer 65L</p>
                            <p>Price=Rs.400</p> 
                            <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#2</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/3.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>Yellow Weaves™ Undergarments Organizer / Foldable Storage Box with Lid for Drawers , Color - Multi</p>
                            <p>Price=Rs.284</p> 
                              <?php if(check_if_added_to_cart(2)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#3</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/2.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>MeRaYo Linen Fabric Foldable Cloth Storage Organizer Box with Lid and Handles – Grey Color</p>
                            <p>Price=Rs.649</p> 
                              <?php if(check_if_added_to_cart(3)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#4</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/4.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>Amazon Brand - Solimo Fabric Foldable Storage Organiser, Black</p>
                            <p>Price=Rs.247</p> 
                              <?php if(check_if_added_to_cart(4)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#5</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/5.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>HomeStorie Canvas Storage Box with Lids, Large(Grey) - Pack of 2</p>
                            <p>Price=Rs.984</p> 
                             <?php if(check_if_added_to_cart(5)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#6</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/6.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>Cutting EDGE Turkish Basket with Lid for Kitchen | Vegetables | Toys | Books | Office | Stationery | Utility | Cosmetics | Accessories | Closet | Wardrobe | (41.7X32.7X25.5) cm (9 Litres) | Large (Set of 2, Cream color)</p>
                            <p>Price=Rs.449</p> 
                             <?php if(check_if_added_to_cart(6)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#7</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/7.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>LXOICE Linen Fabric Foldable Cloth Storage Boxes with Lid, Handles, Removable Divider (Grey)</p>
                            <p>Price=Rs.400</p> 
                              <?php if(check_if_added_to_cart(7)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#8</p>
                        </div>
                        <div class=" panel-body">
                            <img src="images/8.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>AmazonBasics Foldable Storage Cubes - 6-Pack, Black</p>
                            <p>Price=Rs.884</p> 
                              <?php if(check_if_added_to_cart(8)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#9</p>
                        </div>
                        <div class="panel panel-body">
                            <img src="images/9.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel panel-footer">
                            <p>Kuber Industries Plastic 3 Pieces Small Size Multipurpose Solitaire Storage Basket with Lid (Multi)(Size:25x19x10.5cm)-CTLTC010898</p>
                            <p>Price=Rs.669</p> 
                              <?php if(check_if_added_to_cart(9)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#10</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/10.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>VP STORES Bamboo Charcoal Practical Foldable Clothing Storage Bag Box Clothes Closet Organizer 65L</p>
                            <p>Price=Rs.4890</p> 
                              <?php if(check_if_added_to_cart(10)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre">
                        <div class="panel-heading">
                            <p>#11</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/11.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>NISUN Classic Big Handy File Cloths Storage Bag Organizer for Books Magazine - (Green, 44.4x25.4x30.4 cm)</p>
                            <p>Price=Rs.264</p> 
                              <?php if(check_if_added_to_cart(11)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-centre"t>
                        <div class="panel-heading">
                            <p>#12</p>
                        </div>
                        <div class="panel-body">
                            <img src="images/12.jpg" class="img-thumbnail">
                        </div>
                        <div class="panel-footer">
                            <p>Siva Naturals. Plastic Storage Box with Lack and Wheel, 16 L(Transparent)</p>
                            <p>Price=Rs.6498</p> 
                              <?php if(check_if_added_to_cart(12)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>