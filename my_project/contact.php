<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Contact Us |Boxes, Baskets and Bins Store</title>
        <?php
        include "includes/links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>LIVE SUPPORT</h4>
                <h6>24 hours | 7 days a week | 365 days a year Live Technical Support</h6>
                <p>It is long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of uisng Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you needto be sure there is not embarrassing hidden in the middle of text.</p>
            </div>
            <div class="col-md-3">
            <img class="img-responsive" src="images/man.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2>CONTACT US</h2>
                
                <form action="#" method="post">
                    <div class="form-group">
                        <label for ="name">Name</label>
                        <input type="text" class="form-control" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text area" class="form-control" name="message" rows="6" required>
                    </div>
                    <div class="form-group">
                        <button type="Submit" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <h1>Company Information:</h1>
                <p>500 Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)222666444<br>Fax:(000)00000000<br>Email:info@mycompany.com<br>Folow on: Facebook, Twitter</p>
            </div>
        </div>
           <?php
           include "includes/footer.php";
           ?>
    </body>
</html>