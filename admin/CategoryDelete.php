<?php
                               include 'db.php';
                               $catID = $_GET['Did'];
                               $sql = "DELETE FROM category Where category_id = '{$catID}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                               header("location:http://localhost/DeccanOverseasOrder/admin/CategoryShow.php");
                            ?>