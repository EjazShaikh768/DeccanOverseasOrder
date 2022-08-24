<?php
                               include 'db.php';
                               $wishID = $_GET['wishID'];
                               $sql = "DELETE FROM wishlist Where wishList_id = '{$wishID}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                               header("location:http://localhost/DeccanOverseasOrder/wishlist.php");
                            ?>