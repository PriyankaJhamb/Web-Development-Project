<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Settings | Boxes, Baskets and Bins Store</title>
        <?php
        include "includes/links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container" style="text-align:centre;">
            <h2 style="font-size:bold">Change Password</h2>
            <form action="settings_script.php" method="POST">
                <div class="form-group">
                        <input class="form-control" type="password" name="oldPassword" placeholder="Old Password">
                    </div>
                <div class="form-group">
                        <input class="form-control" type="password" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="newPasswordRe" placeholder="Re-type New Password">
                    </div>
                    <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                <br><br>
                        <button role="button" class="btn btn-primary">Change</button>
                   
                    
                   
            </form>
        </div>
        <?php 
        include "includes/footer.php";
        ?>
    </body>
</html>