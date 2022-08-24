    <?php
       include 'db.php';
       $empdid = $_GET['empdid'];
       $sql = "DELETE FROM employees Where emp_id  = '{$empdid}'";
       $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                              
       header("location:http://localhost/DeccanOverseasOrder/admin/EmpShow.php");
    ?>