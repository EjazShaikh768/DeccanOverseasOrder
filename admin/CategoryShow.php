<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js">
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
        <div class="col-sm-6 text-center">

        <h1 style="color: #484848;"> <a href="dashboard.php " style="color:grey">DASHBOARD</a>  <b>/</b>  CATEGORY'S</h1> 
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2 " >   
            <div class="col-sm-1 text-end">  <a href="CategoryAdd.php" class="btn btn-primary  my-2 ">ADD </a> </div>
                        
        </div>
    </div>
   </div>
        <div class="  col-sm-12 col-md-12 col-lg-12 my-3"  style="height:100% ;padding-bottom: 50px;">
                <div class="row justify-content-center">
                    
                    
                      <table class="table  table-hover">
                        <thead class="" style="color:white; background-color: #100e0e;">
                            <tr>
                              <th scope="col">SR.NO</th>
                              <th scope="col"> NAME</th>
                              <th scope="col"> IMAGE</th>
                              <th scope="col">QUANTITY</th>
                              <th scope="col">STATUS</th>
                              <th>ACTION</th>
                            </tr>
                          </thead>

                          <tbody style="">
                            <?php
                               include 'db.php';
                               $sql = "SELECT * FROM category   ";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                               if (mysqli_num_rows($result) > 0) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                              <th scope="row"><?php echo $row['category_id']; ?></th>
                              <td><?php echo $row['category_name']; ?></td>
                              <td><img  src="upload/<?php echo $row['category_image']; ?>" height="100px"></td>
                              <td><?php echo $row['subcat_quntity']; ?></td> 
                              <td><?php  if ($row['status'] == 1) {
                                echo '<p> <a href="catStatus.php?csts='.$row['category_id'].'&status=0"><i class="fa-solid fa-circle-check fa-3x text-success"></i></a> </p>';
                              }else{
                                echo '<p> <a href="catStatus.php?csts='.$row['category_id'].'&status=1"><i class="fa-solid fa-circle-xmark fa-3x text-warning"></i></a> </p>';
                              } ?></td>     
                              <td> <a href="CategoryDelete.php?Did=<?php echo $row['category_id'];?>"><i class="fa-solid fa-trash mr-4"></i></a> &#160; &#160;&#160;
                               <a href="CategoryEdit.php?Eid=<?php echo $row['category_id'];?>"><i class="fa-solid fa-pen-to-square ml-4"></i></a></td>
                            </tr>
                            <?php
                                   }
                               }
                               ?>
                            
                        
                      </table>
                </div>
               
        </div>


    </div>
</div>


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