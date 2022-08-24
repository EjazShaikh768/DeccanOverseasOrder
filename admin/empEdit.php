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

        <div class=" col-sm-12 col-md-4 col-lg-3"  style="height:100%; padding-bottom:50px;">
       <?php include 'includes/sidebar.php'; ?>
        </div></div>
        <div class="  col-sm-12 col-md-7 col-lg-7 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-center">
                    <div class=" m-2 col-sm-10">
                    <center> <h1> ADD EMPLOYEE </h1></center>
                    </div>

<!--- Contact us form start -->

             <div class="row">
                  <div class="col-sm-12"> 
                  <?php
                               $empid = $_GET['empeid'];  
                               include 'db.php';
                               $sql = "SELECT * FROM  employees  WHERE emp_id = '{$empid}' ";
                               $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                               if (mysqli_num_rows($result) > 0) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                    <form action="empUpdateSave.php" method="post"  enctype="multipart/form-data">
                       <div class="row">
                        <div class=" col-sm-12 form-group mt-3">
                        <input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>" class="form-control" required>
                         
                            <label for="fullname"> FULL NAME</label>
                                <input type="text" name="fullname" value="<?php echo $row['emp_name']; ?>" class="form-control" required>
                          </div>
                          <div class="form-group mt-3">
                            <img  src="upload/<?php echo $row['emp_image']; ?>" height="150px" width="200px">
                            <input type="file" class="form-control mt-3" name="new-image">
                            <input type="hidden" name="old_image"  value="<?php echo $row['emp_image']; ?>">
                        </div>
                          <div class="col-sm-3 form-group mt-3">
                            <label for="fullname"> PHONE NUMBER </label>
                                <input type="text" name="number" value="<?php echo $row['emp_phone']; ?>" class="form-control"  maxlength="10" required>
                          </div>
                          <div class=" col-sm-3 form-group mt-3">
                            <label for="fullname"> ALTERNATE NUMBER </label> 
                                <input type="text" name="altnumber" value="<?php echo $row['emp_phone2']; ?>" class="form-control"  maxlength="10" required>
                          </div>
                          <div class=" col-sm-6 form-group mt-3">
                            <label for="fullname">RESIDENTIAL  ADDRESS</label>
                                <input type="text" name="address" value="<?php echo $row['emp_address']; ?>" class="form-control"  required>
                          </div>
                       </div>
                      
                      <div class="row">
                       
                          <div class=" col-sm-4 form-group mt-3">
                            <label for="city">CITY</label>
                                <input type="text" name="city" value="<?php echo $row['emp_city']; ?>" class="form-control" required>
                          </div>
                          <div class=" col-sm-4 form-group mt-3">
                            <label for="fullname"> PIN CODE</label>
                                <input type="text" name="pincode" value="<?php echo $row['emp_pincode']; ?>" class="form-control" maxlength="6"  required>
                          </div>
                          <div class=" col-sm-4 form-group mt-3">
                            <label for="fullname">ROLE OF EMPLOYEE </label>
                          <select class="form-select" aria-label="Default select example"  name="role" >
                                    <option value="1">SUPER ADMIN</option>
                                    <option value="2">ADMIN</option>
                                    <option value="3">MANAGER</option>
                                    <option value="4">DELIVERY BOY</option>
                                    <option value="5">PACKER</option>
                           </select>
                      </div>
                    

<!--                      
                      <div class="row">
                        <div class=" col-sm-6 form-group mt-3">
                            <label for="fullname"> EMAIL  ADDRESS</label>
                                <input type="text" name="email" value="<?php echo $row['emp_email']; ?>" class="form-control" required>
                          </div>
                          
                         
                          <div class=" col-sm-6 form-group mt-3">
                            <label for="Password"> PASSWORD</label>
                                <input type="password" name="Password" value="<?php echo $row['emp_password']; ?>" class="form-control" required>
                          </div>
                      </div> -->
        
      
                    <div style="text-align:right ;margin-top: 50px;" >
                      <button class="btn btn-primary " name="sumbit" style="width:180px ;margin-right:50px;"> SUBMIT</button>
                    </div>
                     </form>
                     
                     <?php   } }            ?>
                  </div>
             </div>
          
<!--- Contact us form end -->


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