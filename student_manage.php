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
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Student Entry</div>
           <hr>
           <form action="student_entry.php" method="post" enctype="multipart/form-data">
            
           <div class="form-group">
            <label for="input-1">Student Name</label>
            <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Enter Student Name">
           </div>
           <div class="form-group">
           <label for="contactno" class="form-label">Select Course</label>           
                <select name="bid" id="bid">
                  <option value=""> Select Batch </option>
                <?php
                  $sql2="SELECT * FROM batchmanage ORDER BY coursename";
                  $result = mysqli_query($conn,$sql2);
                  while($rows2 = mysqli_fetch_assoc($result))
                  {
                ?>
                      <option value="<?php echo $rows2['bid']; ?>"> <?php echo $rows2['coursename']; ?> </option>
                  <?php
                  }
                  ?>
                    
                </select>
           </div>   
           <div class="form-group">
            <label for="input-3">Phone Number</label>
            <input type="text" class="form-control" id="stdcontact" name="stdcontact" placeholder="Enter Student Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-2">Email</label>
            <input type="text" class="form-control" id="stdmail" name="stdmail"  placeholder="Enter Student Email">
           </div>
           <div class="form-group">
            <label for="input-4">Image</label>
            <input type="file" class="form-control" id="image" name="image">
           </div>  
           <div class="form-group">
            <label for="input-2">Address</label>
            <input type="text" class="form-control" id="stdaddress" placeholder="Enter Your Address" name="stdaddress">
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
<!--fotter start-->
  <?php
    require_once('fotter-js.php');
  ?>
  <!--fotter end-->

</html>
