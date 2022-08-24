<?php include 'header.php'; ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
  
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
            <div class="col-lg-5 col-sm-12 mt-4">
                    <div class="row">
                    <div class="col-sm-12 contact-info-left">
                       <center>  <h2>CONTACT INFO</h2> </center>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                        <iframe class="gmap_iframe mt-3" style="width:100%; height:250px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      
                    </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                        <form  action="contactusSave.php" method="POST">
                          <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" placeholder="Enter Your FULL NAME" name="name">
                          </div>
                          <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" placeholder="Enter Your PHONE NUMBER" name="phone">
                          </div>
                          <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" placeholder="Enter Your EMAIL ADDRESS" name="email">
                          </div>
                          <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" placeholder="Enter Your SUBJECT" name="subject">
                          </div>
                          <div class="col-sm-12 form-group">
                            <textarea  id="" class="form-control" placeholder="Enter Your MESSAGE" rows="3" name="msg"></textarea>
                          </div>
                          <center> <button class="btn btn-secondary" style="width:150px ;">SUBMIT</button></center>
                        </form>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- End Cart -->



    <?php include 'footer.php'; ?>