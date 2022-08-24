<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="">
    <title>Bootstrap demo</title>
    <style>
      
        body {
            background-color: #FFFFFF;
        }
        #sidebar{
            height: 100%;

        }
        #sidebar  li a{
            width: 100%;
            font-size: 25px;
            color: black;
            text-decoration: none;
            
        }
    </style>
</head>

<body>
   
    

<div class="container-fluid" style="margin-top:40px ;">
    <div class="row justify-content-around" >

    <div class="container-fluid">
    <div class="row ">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 " >
        <?php include 'includes/sidebar.php'; ?>
        </div>
      
    </div>
   </div>
        <div class=" col-sm-12 col-md-12 col-lg-12 "  style="height:100% ;padding-bottom: 50px;">
                <div class="row justify-content-center">
                <div class="col-sm-11  ">
                             <div class="col-sm-12"><center> <h1> EMPLOYEE  RECORDS</h1></center></div>
                            </div>
                        <div class="col-sm-1">
                        <a href="EmpAdd.php" class="btn btn-primary  my-2 ">ADD</a>
                        </div>
                     </div>
                      <table class="table  table-hover" id="myTable">
                        <thead class="" style="color:white; background-color: #100e0e; text-align: center;">
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col">NAME</th>
                              <th scope="col">IMAGE</th>
                              <th scope="col">NUMBER</th>
                              <th scope="col">AADHAR</th>
                              <th scope="col">ADDRESS</th>
                              <th scope="col">CITY</th>
                              <th scope="col">PINCODE</th>
                              <th scope="col">ROLE</th>
                              <th scope="col">DATE</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>

                          <tbody style="text-align:center;">
                            <?php
                               include 'db.php';
                               $sql = "SELECT * FROM  employees ";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                               if (mysqli_num_rows($result) > 0) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                              <th scope="row"><?php echo $row['emp_id']; ?></th>
                              <td><?php echo $row['emp_name']; ?></td>
                              <td> <img  src="upload/<?php echo $row['emp_image']; ?>" height="100px" width="150px"></td>
                              <td><?php echo $row['emp_phone']." / ".$row['emp_phone2']; ?></td>
                              <td><?php echo $row['emp_aadhar']; ?></td>
                              <td><?php echo $row['emp_address']; ?></td>
                              <td><?php echo $row['emp_city']; ?></td>
                              <td><?php echo $row['emp_pincode']; ?></td>
                              <td><?php  
                              if ($row['emp_role'] == 1) {
                                   echo 'FOUNDER';
                              }else if ($row['emp_role'] == 2) {
                                   echo 'ADMIN';
                              }else if ($row['emp_role'] == 3) {
                                   echo 'MANAGER';
                              }else if ($row['emp_role'] == 4) {
                                   echo 'DELIVERY BOY';
                              }else if ($row['emp_role'] == 5 ) {
                                    echo 'PAKCER';
                              } ?></td>
                              <td><?php echo $row['emp_joiningDate']; ?></td> 
                              <td> <a href="empDlt.php?empdid=<?php echo  $row['emp_id'];  ?>"> <i class="fa-solid fa-trash mr-4">   </i></a> &#160; &#160;&#160; 
                              <a href="empEdit.php?empeid=<?php echo  $row['emp_id'];  ?>"><i class="fa-solid fa-pen-to-square ml-4"></i></a>  </td>
                            </tr>
                            <?php   } }            ?>
                            
                        
                      </table>
                </div>
        </div>


    </div>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

    <!--# Footer #-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>