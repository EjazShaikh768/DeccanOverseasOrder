<?php
                               include 'db.php';
                               $catID = $_GET['DSid'];
                               $sql = "DELETE FROM sub_category Where subcat_id  = '{$catID}'";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
                header("location:http://localhost/DeccanOverseasOrder/admin/subCategoryShow.php");
                            ?>