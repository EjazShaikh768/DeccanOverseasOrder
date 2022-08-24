<?php include 'header.php'; ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".vegetables">VEGETBALE</button>
                            <button data-filter=".fruits">FRUIT</button>
							<button data-filter=".podded-vegetables"> VEGETBALES</button>
							<button data-filter=".root-and-tuberous">FRUITS  </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
            <?php 
                            include 'db.php';
                            $sql = "SELECT * FROM sub_category WHERE cat_name = 2 ";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-lg-3 col-md-6 special-grid vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            
                            <img src="admin/upload/<?php echo $row['category_image']; ?>"  alt="Image" height="200px" width="100%">
                            <div class="mask-icon">
                                <ul>
                                    <!--  <li><a href="" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <a class="cart" ><?php echo $row['subcat_name']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
 <?php } } ?>
 <?php 
                            include 'db.php';
                            $sql = "SELECT * FROM sub_category WHERE cat_name = 1 ";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                        <img src="admin/upload/<?php echo $row['category_image']; ?>"  alt="Image" height="200px" width="100%">
                           <div class="mask-icon">
                                <ul>
                                  <!--    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <a class="cart" ><?php echo $row['subcat_name']; ?></a>
                            </div>
                        </div>                        
                    </div>
                </div>
                <?php } } ?>
             

              
                <?php 
                            include 'db.php';
                            $sql = "SELECT * FROM product WHERE category = 2 ";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                        <img src="admin/upload/<?php echo $row['prod_image']; ?>"  alt="Image" height="200px" width="100%">
                         <div class="mask-icon">
                                <ul>
                                  <!--    <li><a href="shop-detail.php?pid=<?php echo $row["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                   <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>-->
                                </ul>
                                <a class="cart" ><?php echo $row['prod_name']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
<?php } } ?>
<?php 
                            include 'db.php';
                            $sql = "SELECT * FROM product WHERE category = 1 ";
                            $result = mysqli_query($conn , $sql) or die("Query Failed");
                            if (mysqli_num_rows($result)> 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">                            
                        <img src="admin/upload/<?php echo $row['prod_image']; ?>"  alt="Image" height="200px" width="100%">
                       <div class="mask-icon">
                                <ul>
                                  <!--  <li><a href="shop-detail.php?pid=<?php echo $row["prod_id"]; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                     <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> 
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>-->
                                </ul>
                                <a class="cart"><?php echo $row['prod_name']; ?></a>
                            </div>
                        </div>                        
                    </div>
                </div>
				<?php } } ?>
			
              

         
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

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