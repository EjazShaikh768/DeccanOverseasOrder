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
        <div class="col-sm-1"></div>
        <div class="col-sm-2 " >
        <?php include 'includes/sidebar.php'; ?>
        </div>
      
    </div>
   </div>
        <div class="  col-sm-12 col-md-12 col-lg-12 "  style="height:100%; padding-bottom:50px;">
                <div class="row justify-content-between">
                    <div class="col-sm-12">
                    <center> <h1> CONTACT US LIST  </h1></center>
                    </div>
                     
                     <table class="table  table-hover">
                        <thead class="" style="color:white; background-color: #100e0e; ">
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col"> FULL NAME</th>
                              <th scope="col"> PHONE </th>
                              <th scope="col">EMAIL </th>
                              <th scope="col">SUBJECT  </th>
                              <th scope="col">MESSAGE  </th>
                            </tr>
                          </thead>
                          <tbody style="">
                            <?php include 'db.php';
                           $sql = "SELECT * FROM contactus  ";
                           $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                          
                               while($row = mysqli_fetch_array($result)){

                            ?>
                            <tr>
                              <th scope="row"><?php echo $row['id']; ?></th>
                              <td><?php echo $row['fullname']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['subject']; ?></td>
                              <td><?php echo $row['messagee']; ?></td>
                             </tr>
                         <?php }   ?>
                            
                         
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