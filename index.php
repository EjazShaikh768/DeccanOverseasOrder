<?php include 'header.php'; ?>

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/bg.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome  <br> </strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/bg3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome  <br> </strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/bg2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome  <br> </strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.php">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row justify-content-center">
           
            <?php
                include 'db.php';
                $sql2 = "SELECT * FROM  category WHERE status = 1 ";
                $result2 = mysqli_query($conn , $sql2) or die("query unsuccesfull");
                if (mysqli_num_rows($result2) > 0) {
                    while ($row2 = mysqli_fetch_assoc($result2)) {
             ?> 
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="admin/upload/<?php echo $row2['category_image']; ?>" alt=""  />
                        <a class="btn hvr-hover" ><?php echo $row2['category_name']; ?> <sup>+<?php echo $row2['subcat_quntity']; ?></sup> </a>
                    </div>
                </div>
                    <?php } } ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products offer-img1">
						<img class="img-fluid" src="images/add-img-01.jpg " alt="" style="height:300px; width:100%;"/>
                        <!-- -->
              
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products offer-img2">
						<img class="img-fluid" src="images/add-img-02.jpg" alt="" style="height:300px; width:100%;" />
                        <!--  -->
					</div>
				</div>
			</div>
           
		</div>

	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fruits & Vegetables</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Fruits</button>
                            <button data-filter=".best-seller">Vegetables</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
            <?php
                include 'db.php';
                $sql1 = "SELECT * FROM product p JOIN sub_category sc ON p.sub_category = sc.subcat_id  WHERE category = 2 ";
                $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
             ?>
                <div class="col-lg-3 col-md-4 col-sm-12 special-grid best-seller">
              

                <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <!-- <p class="sale">Sale</p> -->
                            </div>
                            <img src="admin/upload/<?php echo $row1['prod_image']; ?>" alt="Image" height="240px" width="300px">
                            <div class="mask-icon">
                                <ul class="d-flex">
                                  <!--   <li><a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                                    <li><a href="#" data-toggle="tooltip " data-placement="right" title="Add to Wishlist"><i class="far fa-heart "></i></a></li>-->
                                </ul>
                                
                                                        <a class="cart" href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>">Add to Cart</a>
                                                    </div>
                        </div>
                        <div class="why-text">
                            <h3><?php echo $row1['prod_name']; ?></h3>
                            <h4 ><?php echo $row1['subcat_name']; ?></h4>
                            <p> <?php echo substr($row1['prod_description'],0,90)."..."; ?> </p>
                           <center>  <h5>&nbsp;&nbsp;<b> <?php echo $row1['prod_quantity']; ?> KG  </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row1['prod_price']; ?>/- Rs &nbsp;&nbsp;</h5> </center>
                        </div>
                    </div>
                </div>

                <?php } } ?>
              

                <?php
                include 'db.php';
               
                $sql1 = "SELECT * FROM product p JOIN sub_category sc ON p.sub_category = sc.subcat_id  WHERE category = 1  ";
                $result1 = mysqli_query($conn , $sql1) or die("query unsuccesfull");
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
             ?>
                <div class="col-lg-3 col-md-4 col-sm-12 special-grid top-featured">
              
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <!-- <p class="sale">Sale</p> -->
                            </div>
                            <img src="admin/upload/<?php echo $row1['prod_image']; ?>" alt="Image" height="240px" width="300px">
                            <div class="mask-icon">
                                <ul class="d-flex">
                                  <!--  <li><a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                     <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>" data-toggle="tooltip " data-placement="right" title="Add to Wishlist"><i class="far fa-heart "></i></a></li> -->
                                </ul>
                                                        <a class="cart" href="shop-detail.php?pid=<?php echo $row1["prod_id"]; ?>">Add to Cart</a>
                                                   
                                </div>
                        </div>
                        <div class="why-text">
                            <h3><?php echo $row1['prod_name']; ?></h3>
                            <h4 ><?php echo $row1['subcat_name']; ?></h4>
                            <p> <?php echo substr($row1['prod_description'],0,90)."..."; ?> </p>
                           <center>  <h5>&nbsp;&nbsp;<b> <?php echo $row1['prod_quantity']; ?> KG  </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row1['prod_price']; ?>/- Rs&nbsp;&nbsp;</h5> </center>
                        </div>
                    </div>
                </div>
                    <?php } } ?>

              
            </div>
            
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>All Fruits And Vegetables</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                include 'db.php';
                
                $limit = 6;
                if(isset( $_GET['subPage'])){
                    $subpage = $_GET['subPage'];
                }else{
                    $subpage = 1;
                }
                $offset = ($subpage - 1) * $limit;
                $sql = "SELECT * FROM sub_category ORDER BY subcat_id DESC LIMIT {$offset},{$limit} ";
                $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
             ?>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img" style="height:300px;">
                            <img class="img-fluid w-100 h-100" src="admin/upload/<?php echo $row['category_image']; ?>"  alt="Image"   >
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><?php echo $row['subcat_name']; ?> <sup>+<?php echo $row['product_quntity']; ?></sup></h3>
                                <h4 style="color:grey;"><?php if ($row['cat_name'] == 1) {
                                    echo '<b>FRUITS</b>';
                                }else{
                                    echo '<b>VEGETABLES</b>';
                                } ?></h4>
                                <p><?php echo substr($row['description'],0,120)."....."; ?>  </p>
                            </div>
                            <ul class="option-blog">
                                <li><a href=""><i class="far fa-heart"></i></a></li>
                                <li><a href="SubCatsingle.php?subcatid=<?php echo $row['subcat_id'];?>"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } } ?>
                
                
            </div>
           <div class="row justify-content-center mt-4">
             <?php
                       $sql0 = "SELECT * FROM  sub_category ";
                       $result0 = mysqli_query($conn , $sql0) or die("Query Failed");
                       if(mysqli_num_rows($result0) > 0 ){
                        $total_records = mysqli_num_rows($result0);
                        $total_page = ceil($total_records / $limit);
                            
                        echo '<nav aria-label="Page navigation example">';
                        echo ' <ul class="pagination">';
                          
                        if($subpage > 1){
                            echo '<li class="page-item"><a class="page-link" href="index.php?subPage='.($subpage - 1).'"><i class="fa-solid fa-angle-left"></i></a></li>';
                        }

                        //  for($i = 1; $i <=$total_page; $i++){
                        //     echo '<li class="page-item"><a class="page-link" href="index.php?subPage='.$i.'">'.$i.'</a></li>';
                        //  }
                         if($total_page > $subpage){
                            echo '<li class="page-item"><a class="page-link" href="index.php?subPage='.($subpage + 1).'"><i class="fa-solid fa-angle-right"></i></a></li>';
                        }
                        echo '</ul>';
                        echo '</nav>';
                       }
 
            ?>
            
               
                   
           </div>
        </div>

        <!-- button next and prev -->
       
    </div>
    <!-- End Blog  -->

   <div class="container">
    <div class="row">
    <div class="col-sm-12 col-lg-12 mb-3 mt-3">
                    <div class="title-left">
                        <center> <h3>FILL REVIEW FORM</h3> </center>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">CLICK HERE TO ENTER REVIEW</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin" action="reviewSave.php" method="POST">
                        <div class="form-row">

                            <select  class=" form-group w-50" aria-label="Default select example" name="prodid">
                                <option selected disabled>SELECT</option>
                                <?php
                                include 'db.php';
                                $sql = "SELECT * FROM product";
                                $result = mysqli_query($conn , $sql) or die("query unsuccesfull");
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='{$row['prod_id']}'>{$row['prod_name']} </option>"; }  }   ?>
                            </select>        
                          
                            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                <label for="InputPassword" class="mb-0">FULL NAME</label>
                                <input type="text" class="form-control" id="InputPassword" value="<?php echo $_SESSION['fname'];  ?>" name="fullname">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <label for="InputPassword" class="mb-0">REVIEW</label>
                                <textarea type="text" class="form-control" id="InputPassword" placeholder="REVIEW"  name="review"> </textarea>
                            </div>
                        </div>
                        <div class="text-right">
                        <button type="submit" name="submit" class="btn hvr-hover">Login</button>
                        </div>
                    </form>
                    
                </div>
    </div>
   </div>
    
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