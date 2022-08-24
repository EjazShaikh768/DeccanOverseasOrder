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
   
  

<div class="container-fluid"style="margin-top:40px;" >
    <div class="row justify-content-around" >

        <div class="card col-sm-12 col-md-6 col-lg-3 "  style="height:100%; padding-bottom:50px;">
        <?php include 'includes/sidebar.php'; ?>
        </div>    
    </div>
        <div class=" card col-sm-12 col-md-6 col-lg-8 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                     <center> <h1> UPDATE REORDS </h1></center>
                     <?php include 'db.php';
                           $Eid = $_GET['peid'];
                           $sql = "SELECT * FROM product WHERE prod_id = '{$Eid}' ";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                          
                               while($row = mysqli_fetch_array($result)){

                            ?>

                     <form action="productUpdateSave.php" method="post" enctype="multipart/form-data" >
                     <div class="form-group">
                <input type="hidden" name="prod_Id"  class="form-control" value="<?php echo $row['prod_id']; ?>" placeholder="">
            </div>
                        <div class="form-group mt-3">
                          <label for="prodname">PRODUCT NAME</label>
                              <input type="text" value="<?php echo $row['prod_name']; ?>" name="prod_name" class="form-control">
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="exampleFormControlTextarea1" class="form-label">PRODUCT DESCRIPTION </label>
                          <textarea name="prod_descs" class="form-control"  required rows="5"> <?php echo $row['prod_description']; ?></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="file" class="form-control mb-3" name="new-image">
                            <img  src="upload/<?php echo $row['prod_image']; ?>" height="150px" width="200px">
                            <input type="hidden" name="old_image"  value="<?php echo $row['prod_image']; ?>">
                        </div>
                        <div class="form-group mt-3">
                          <label for="prodname">PRODUCT PRICE</label>
                              <input type="text" value="<?php echo $row['prod_price']; ?>" name="price" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                          <label for="prodname">PRODUCT QUANTITY</label>
                              <input type="text" value="<?php echo $row['prod_quantity']; ?>" name="quantity" class="form-control">
                        </div>
                        
      
                        
                    <div style="text-align:right ; mt-3">
                      <button class="btn btn-primary " name="submit" style="width:180px ;margin-right:50px; margin-top:10px;"> SUBMIT</button>
                    </div>
                     </form>
                     <?php }   ?>
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