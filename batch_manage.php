<?php 
require_once("validuser.php");
require_once("connectdb.php");
require_once('header.php');
?>
<!-- navbar start-->
<?php
  require_once('navber.php');
?>
<!-- navbar end-->
<!--End topbar header-->
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
   
    <div class="row mt-3">
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Batch Manage</div>
           <hr>
            <form action="batch_entry.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="input-1">Course Name</label>
              <input type="text" class="form-control" id="coursename" placeholder="Enter Battch name" name="coursename">
           </div>
            <div class="form-group">
              <label for="input-3">Starting Date</label>
              <input type="date" class="form-control" id="startingdate" placeholder="Enter Starting Date " name="startingdate">
           </div>
            <div class="form-group">
              <label for="input-2">Course Fee</label>
              <input type="number" class="form-control" id="coursefee" placeholder="Enter Course Fee" name="coursefee">
           </div>
            <div class="form-group">
              <label for="input-4">Time Duration</label>
              <input type="text" class="form-control" id="timeduration" placeholder="Enter Time Duration" name="timeduration">
           </div>
           
           <div class="form-group">
              <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Submit</button>
          </div>
          </form>
         </div>
         </div>
      </div>
        

      

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
  <?php
      require_once('footer.php');
    ?>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->



	
</body>
<?php
    require_once('fotter-js.php');
  ?>
</html>
