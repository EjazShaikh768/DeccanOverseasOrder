  
<?php
include './db.php';

  session_start();
  if (isset($_SESSION["emp_name"])) {
    # code...
  }else{
    header("location:http://localhost/DeccanOverseasOrder/admin/index.php");
  }
 
?>


  <a class="btn btn-secondary  mt-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="width:20%; ">
   <i class="fa-solid fa-bars"></i>
</a>
   
 <div class="row justify-content-center">
            <!-- <div class="  my-2 col-sm-11  text-center">
           
              <img src="images/logo.jpeg" alt="" style="width:100px ;">
              
           <h1 style="color: #484848;">DeccanOverseas</h1> 
                <h6>Online Service Provider</h6>
           
            </div>
         </div> -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   <div class="container">
   <div class="row">
      <div class="col-sm-9">
      <ul style="list-style:none;  " class="text-center">
      <li>    <img src="upload/<?php echo $_SESSION["emp_image"];  ?>" alt="" height="100px" width="100%"></li>
      <li><h5 class="offcanvas-title" id="offcanvasExampleLabel"><b><?php echo $_SESSION["emp_name"]; ?></b></h5>
     
    </li>
      <li><h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color:grey;"><?php if ($_SESSION["emp_role"] == 1) {
        echo "Founder";
      }else if ($_SESSION["emp_role"] == 2) {
        echo "ADMIN";
      }else if ($_SESSION["emp_role"] == 3) {
        echo "MANAGER";
      }else if ($_SESSION["emp_role"] == 4) {
        echo "DELIVERY";
      }else if ($_SESSION["emp_role"] == 5) {
        echo "PACKER";
      } ?></h5></li>
     </ul>
      </div>
      <div class="col-sm-2 text-center">
      <ul style="list-style:none;  ">
        <li><button type="button" class="btn-close mb-4" data-bs-dismiss="offcanvas" aria-label="Close"></button></li>
        <li><a href="logout.php" class="btn btn-outline-dark mt-5"><i class="fa-solid fa-lock"></i></a></li>
      </ul>

      </div>
    </div>
   </div>
  
  
    <!--  -->
 
 
  </div>
  <div class="offcanvas-body">
    <div class="" style="text-align:right;">

    </div>
    <div class="dropdown  ">
     <!--  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button> -->      <ul class="list-group"  id="sidebar" style="padding-top:30px ;">
                <li class="list-group-item " aria-current="true"><a href="dashboard.php">DASHBOARD </a>  </li>
                
                     <?php 
                          if($_SESSION["emp_role"] == '1'){
                     ?>
                 <li class="list-group-item list-group-item-action"><a href="EmpShow.php"> EMPLOYEE'S </a></li>
                     <?php } ?>

                <li class="list-group-item list-group-item-action"><a href="FruitShow.php">  FRUIT'S </a></li>
                <li class="list-group-item list-group-item-action"><a href="VegitablesShow.php">  VEGITABLE'S</a></li>

              
              </ul>
    </div>
  </div>