<?php
                               include 'db.php';
                               $cartID = $_GET['cartID'];
                               $sql = "DELETE FROM cart Where cart_id  = '{$cartID}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                               header("location:http://localhost/DeccanOverseasOrder/cart.php");
                            ?>