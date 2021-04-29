<?php
require "includes/common.php";
if(isset($_SESSION['email']))
    {
        header('location:home.php');
    }
?>
<html>
            <head>
                <title>Sign UP | Boxes, Baskets and Bins Store</title>
                <?php
                include "includes/links.php";
                ?>
            </head>
            <body>
                <?php
                include "includes/header.php";
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/up.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6">
                        <h1>SIGN UP</h1>
                        <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input class="form-control" name="name" type="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="form-group"> 
                                <input class="form-control" name="contact" type="contact" placeholder="Contact"  required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="city" type="text" placeholder="City" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="address" type="text" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <button style="float:right" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                include "includes/footer.php";
                ?>
            </body>
</html>