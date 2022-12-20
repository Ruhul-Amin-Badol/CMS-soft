<?php 
require_once("validuser.php");
require_once("connectdb.php");
require_once('header.php');
?>
<!--End topbar header-->
<!-- navbar start-->
<?php
  require_once('navber.php');
?>

<!-- navbar end-->
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Payment</div>
           <hr>
            <form action="collection_entry.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="input-1">Select Student Name</label>
              <select name="sid" id="sid">
                  <option value=""> Select student </option>
                <?php
                  $sql23="SELECT * FROM student WHERE dueamount >0";
                  $result = mysqli_query($conn,$sql23);
                  $q =mysqli_fetch_assoc($result);
                  while($rows2 = mysqli_fetch_assoc($result))
                  {
                ?>
                      <option value="<?php echo $rows2['sid']; ?>"><?php echo $rows2['studentname']; ?> - <?php echo $rows2['dueamount']; ?> </option>
                  <?php
                  }
                  ?>
                    
              </select>
           </div>
            <div class="form-group">
              <label for="input-3">Collection Date</label>
              <input type="date" class="form-control" id="colldate"  name="colldate">
           </div>
            <div class="form-group">
              <label for="input-2">Collection Amount</label>
              <input type="number" class="form-control" id="collamount" placeholder="Enter Collect Amound" name="collamount">
           </div>
            <div class="form-group">
              <label for="input-4">Collect Note</label>
              <input type="text" class="form-control" id="collnote" placeholder="Enter Collect Note" name="collnote">
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
