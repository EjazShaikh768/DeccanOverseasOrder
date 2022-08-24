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
   
   
<div class="container-fluid" style="margin-top:40px;">
    <div class="row justify-content-around" >


    <div class="container-fluid">
    <div class="row ">
        <div class="col-sm-6 text-center">

        <h1 style="color: #484848;"> <a href="dashboard.php " style="color:grey">DASHBOARD</a>  <b>/</b>  PRODUCT'S</h1> 
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3 " >   
              <a href="ProductFruits.php" class="btn btn-info  my-2 ">FRUITS</a>
                        <a href="ProductVegetables.php" class="btn btn-info  my-2 ">VEGETABLES</a>
                        <a href="ProductAdd.php" class="btn btn-primary  my-2 ">ADD </a>
                        
        </div>
    </div>
   </div>
        <div class="  col-sm-12 col-md-12 col-lg-12 "  style="height:100%; padding-bottom:50px;">
                      
                       
                     <table class="table  table-hover">
                        <thead class="" style="color:white; background-color: #100e0e; ">
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col"> IMAGE</th>
                              <th scope="col"> NAME</th>
                              <th scope="col"> DESCRIPTION</th>
                              <th scope="col">SUB CATEGORY</th>
                              <th scope="col">CATEGORY</th>
                              <th scope="col"> PRICE</th>
                              <th scope="col"> QUANTITY</th>
                              <th scope="col"> STATUS</th>
                              <th>ACTION</th>
                            </tr>
                          </thead>
                          <tbody style="">
                            <?php include 'db.php';
                           $sql = "SELECT * FROM product p JOIN sub_category sc WHERE p.sub_category = sc.subcat_id  ";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                          
                               while($row = mysqli_fetch_array($result)){

                            ?>
                            <tr>
                              <th scope="row"><?php echo $row['prod_id']; ?></th>
                              <td> <img  src="upload/<?php echo $row['prod_image']; ?>" height="100px" width="150px"></td>
                              <td><?php echo $row['prod_name']; ?></td>
                              <td><?php echo $row['prod_description']; ?></td>
                              <td><?php echo $row['subcat_name']; ?></td>
                               <td> <?php if( $row['category'] == 1){
                                  echo "FRUITS";
                              }else if( $row['category'] == 2){
                                   echo "VEGETABLS";
                              }else{
                                echo "DRY FRUITS";
                              } ?> </td>
                              <td><?php echo $row['prod_price']; ?></td>
                              <td><?php echo $row['prod_quantity']; ?> KG</td>
                            
                              <td> <a href="FruitDelete.php?Pid=<?php echo $row['prod_id'];?>"><i class="fa-solid fa-trash mr-4"></i></a> &#160; &#160;&#160;
                               <a href="productEdit.php?peid=<?php echo $row['prod_id'];?>"><i class="fa-solid fa-pen-to-square ml-4"></i></a></td>
                               <td><?php  if ($row['prstatus'] == 1) {
                                echo '<p> <a href="productStatus.php?prsts='.$row['prod_id'].'&status=0 "><i class="fa-solid fa-circle-check fa-3x text-success"></i></a> </p>';
                              }else {
                                echo '<p> <a href="productStatus.php?prsts='.$row['prod_id'].'&status=1 "><i class="fa-solid fa-circle-xmark fa-3x text-warning"></i></a> </p>';
                              } ?></td> 
                            </tr>
                         <?php }   ?>
                            
                         
                      </table>
                </div>
        </div>


    </div>
</div>

<?php
 
 if(isset($_POST[''])){
    include 'db.php';

$psts = $_GET['sts'];
$status = $_GET['status'];

$sql = "UPDATE product SET status = $status WHERE prod_id  = {$psts} ";
$result = mysqli_query($conn , $sql) or die("query Failed");

header("location:http://localhost/DeccanOverseasOrder/admin/ProductShow.php");
 }

?>

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