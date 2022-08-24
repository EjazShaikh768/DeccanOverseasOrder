<?php include 'header.php'; ?>
  
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SUB CATEGORY DETAILS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">SUB CATEGORY </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->


 

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                   <?php
                include 'db.php';
                $subcatid = $_GET['subcatid'];
                $sql2 = "SELECT * FROM sub_category  WHERE subcat_id = '{$subcatid}' ";
                $result2 = mysqli_query($conn , $sql2) or die("query unsuccesfull");
                if (mysqli_num_rows($result2) > 0) {
                  while ( $row2 = mysqli_fetch_assoc($result2)) {
                    
             ?> 
                        <h1><?php echo $row2['subcat_name']; ?></h1>
                        <p><?php echo $row2['description']; ?></p>

                        <?php }  
                  }?>
                    </div>
                </div>
            
            <?php
                include 'db.php';
               // $subcatid = $_GET['subcatID'];
                $sql1 = "SELECT * FROM product WHERE sub_category =  '{$subcatid}'";
                $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
             ?>
               <div class="col-lg-3 col-md-4 col-sm-12 special-grid top-featured">
              <div class="products-single fix">
                  <div class="box-img-hover">
                      <div class="type-lb">
                          <p class="sale">
                               <a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a>
                            </p>
                      </div>
                      <img src="admin/upload/<?php echo $row1['prod_image']; ?>"  alt="Image" height="240px" width="300px">
                      <div class="mask-icon">
                          <ul> <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                              <li><a href="shop-detail.php" data-toggle="tooltip " data-placement="right" title="Add to Wishlist"><i class="far fa-heart pt-3"></i></a></li>-->
                              <li style="color:white"> <?php echo substr($row1['prod_description'],0,200)."..."; ?>  </li>
                          </ul>
                                                        <!-- <a class="cart" href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" >Add to Cart</a> -->
                                       </div>
                  </div>
                  <div class="why-text">
                      <h4><?php echo $row1['prod_name']; ?></h4>
                     
                     <center>  <h5>&nbsp;&nbsp;<b> <?php echo $row1['prod_quantity']; ?> KG  </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row1['prod_price']; ?>/- Rs&nbsp;&nbsp;</h5> </center>
                  </div>
              </div>
          </div>
                <?php } } ?>
              
            </div>
           
           </div>
        </div>
    </div>
    <!-- End Products  -->

        <!-- Start Instagram Feed  -->
        <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
        <?php 
                            include 'db.php';
                            $sql = "SELECT * FROM sub_category";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="item">
                <div class="ins-inner-box">
                <img src="admin/upload/<?php echo $row['category_image']; ?>"  alt="Image" height="250px" width="100%">
                        <div class="hov-in">
                        <a href="#" style="color:white;"> <b> <?php echo $row['subcat_name']; ?> </b> </i></a>
                    </div>
                </div>
            </div>
            <?php } } ?>
               

        </div>
    </div>
    <!-- End Instagram Feed  -->    



   
<?php include 'footer.php'; ?>