<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Cart | Boxes, Baskets and Bins Store</title>
        <?php
        include "includes/links.php";
        ?>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
          <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum=0;
                        $user_id=$_SESSION['user_id'];
                        $select_query="SELECT items.price AS Price,items.id, items.name AS  Name FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id'and status='Added to cart'";
                        $select_query_result=mysqli_query($con,$select_query)
                                or
                                die($mysqli_error($con));
                        if(mysqli_num_rows($select_query_result)>=1)
                        {
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row=mysqli_fetch_array($select_query_result))
                            {
                                $sum+=$row["Price"];
                                $id="";
                                $id .=$row["id"] .",";
                                echo "<tr>
                                <td>" . "#" .$row["id"] ."</td>
                                <td>" .$row["Name"] ."</td>
                                <td>Rs " .$row["Price"] ."</td>
                                 <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                       </tr>";
                        }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2><br>Add items to the cart first!</h2><p><a href='home.php'>click here</a> to explore products</p></center>";
                        }
                        ?>
                        <?php
                       ?>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>