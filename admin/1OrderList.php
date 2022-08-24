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

        <h1 style="color: #484848;"> <a href="dashboard.php " style="color:grey">DASHBOARD</a>  <b>/</b>  ORDER'S</h1> 
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2 " >   
                        
        </div>
    </div>
   </div>
        <div class="  col-sm-12 col-md-12 col-lg-12 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                     
                     <table class="table  table-hover">
                        <thead class="" style="color:white; background-color: #100e0e; ">
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col">USER ID</th>
                              <th scope="col"> FULL NAME</th>
                              <!-- <th scope="col">EMAIL </th>
                              <th scope="col"> PHONE </th> -->
                              <!-- <th scope="col">ADDRESS  </th>
                              <th scope="col">TOTAL  </th>
                              <th scope="col">DISCOUNT  </th>
                              <th scope="col">TAX  </th>
                              <th scope="col">SHIPPING  </th>
                              <th scope="col">GTRAND TOTAL  </th> -->
                              <th scope="col">DATE  </th>
                              <th scope="col">SEE  </th>
                            </tr>
                          </thead>
                          <tbody style="">
                            <?php include 'db.php';
                           $sql = "SELECT * FROM cartorder ";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                          
                              if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                              

                            ?>
                            <tr>
                              <th scope="row"><?php echo $row['cartOrder_id']; ?></th>
                              <td><?php echo $row['user_id']; ?></td>
                              <td><?php echo $row['full_name']; ?></td>
                              <!-- <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['phone']." , ".$row['altphone']; ?></td> -->
                              <!-- <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['total']; ?></td>
                              <td><?php echo $row['dscnt']; ?></td>
                              <td><?php echo $row['tax']; ?></td>
                              <td><?php echo $row['shipping']; ?></td>
                              <td><?php echo $row['grandTotal']; ?></td> -->
                              <td><?php echo $row['date']; ?></td>
                              <td> <button class="btn bg-light"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="@item.Id"><i class="fa-solid fa-eye"></i></button> </td>
                            
                            </tr>
                         <?php } }  ?>
                            
                         
                      </table>
                </div>
        </div>


    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        <center> <h2>ORDER INFORMATION</h2> </center></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <h4>BANANA</h4> -->
        <!-- <h6> <span>  PRICE :  </span>  &nbsp;&nbsp;&nbsp;   <span> QUANTITY :  </span>  &nbsp;&nbsp;&nbsp;   <span> DISCOUNT :  </span></h6>
        <br>
        <h6> <span>  TAX :  </span>  &nbsp;&nbsp;&nbsp;   <span> SHPPING :  </span>  &nbsp;&nbsp;&nbsp;   <span> TOTAL :  </span></h6> -->
        <?php 
        //  $id = $_POST['id'];
        include 'db.php';
                           $sql1 = "SELECT * FROM cartorder  WHERE cartOrder_id = 18 ";
                           $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                          
                              if(mysqli_num_rows($result1) > 0){
                                while($row1 = mysqli_fetch_assoc($result1)){
                              

                            ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">QNTY</th>
      <th scope="col">T PRICE</th>
    </tr>
  </thead>
  <tbody> <?php 
        // $id = $_GET['pid'];
        include 'db.php';
                           $sqli = "SELECT * FROM  orderitem   WHERE cart_order_id = 17 ";
                           $resulti = mysqli_query($conn , $sqli) or die("query unsuccesfull");
                          
                              if(mysqli_num_rows($resulti) > 0){
                                while($rowi = mysqli_fetch_assoc($resulti)){
                              

                            ?>
    <tr>
      <td><?php echo $rowi['prod_id']; ?></td></th>
      <td><?php echo $rowi['prod_name']; ?></td>
      <td><?php echo $rowi['prod_price']; ?></td>
      <td><?php echo $rowi['prod_quantity']; ?></td>
      <td><?php echo $rowi['prod_total']; ?></td>
    </tr>
    <?php } } ?>
                           </tbody>
        </table>
        
        <hr>
        
        <center> <h2>DELIVERY INFORMATION</h2> </center>
        <hr>
        <h5><b> FULL NAME : </b> <?php echo $row1['full_name']; ?></h5>
        <h5><b> EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <?php echo $row1['email']; ?></h5>
        <h5><b> NUMBER &nbsp;&nbsp;&nbsp;&nbsp;: </b> <?php echo $row1['phone']." , ".$row1['altphone']; ?></h5>
        <h5><b> ADDRESS &nbsp;&nbsp;&nbsp;: </b> <?php echo $row1['address']; ?></h5>
        <h5><b> DISCOUNT  &nbsp;: </b><?php echo $row1['dscnt']; ?> &nbsp; <b> TAX : </b><?php echo $row1['tax']; ?>  &nbsp;<b> TOTAL : </b> <?php echo $row1['grandTotal']; ?></h5>
        <hr>
        <center> <h2>TASK ASSIGN</h2> </center>
        <hr>
        <div class="row">  <?php 
        // $id = $_GET['pid'];
        include 'db.php';
                           $sql2 = "SELECT * FROM  employees  WHERE emp_role = 4 ";
                           $result2 = mysqli_query($conn , $sql2) or die("query unsuccesfull");
                          
                              if(mysqli_num_rows($result2) > 0){
                                while($row2 = mysqli_fetch_assoc($result2)){
                              

                            ?>
          <div class="col">
            <a href="" class="btn">USAMA SHAIKH</a>
          </div>
          <?php } } ?>
        </div>
        <?php } } ?>
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