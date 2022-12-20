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
    <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-6 "><a href="batch_manage.php"> <button type="button" class="btn btn-danger px-5">Add Batch <i class="fa-solid fa-book-open-reader"></i></button></a>
              <div class="col-lg-6 float-right input-group">
              <!-- <input type="text" class="form-control" placeholder="Search Batch">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                  <i class="fa fa-search"></i>
                </button> -->
                    <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
              </div>
            </div>
              </div>
              

            </div>
          </div>
        </div>
      </div>
      <!--End Row-->

      <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Batch Information</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead class="table-warning">
                    <tr>
                        <th>Course Name</th>
                        <th>Starting Date</th>
                        <th>Course Fee</th>
                        <th>Time Duration</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql2="SELECT * FROM batchmanage";
                    $result=mysqli_query($conn,$sql2);
                    while($rows2=mysqli_fetch_assoc($result))
                    {
                    $bid=$rows2['bid'];
                    ?>
                    <tr>
                        <td><?php echo $rows2['coursename'];?></td>
                        <td><?php echo $rows2['startingdate'];?></td>
                        <td><?php echo $rows2['coursefee'];?></td>
                        <td><?php echo $rows2['timeduration'];?></td>
                        <td>
                        <a href="batch_edit.php?bid=<?php echo $bid;?>"><button type="button" class=" btn btn-success"><i class="fa-sharp fa-solid fa-user-pen"></i></button></a>
                        <a href="batch_delete.php?bid=<?php echo $bid; ?>"><button type="button" class=" btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                        </td>
                </tr>
                    <?php
                    }
                    ?>
                    </tr>
                  
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
     
       <!--End Row-->
	  
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
