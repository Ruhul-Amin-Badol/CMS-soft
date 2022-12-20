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
     
      <!--End Row-->
      <div class="mb-3"><a href="collection_manage.php"> <button type="button" class="btn btn-danger px-5">Add Collection <i class="fa-solid fa-money-check-dollar"></i></button></a>
      </div>


      <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Deu Report</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead class="table-danger">
                    <tr>
                        <th>Student Name</th>
                        <th>Phone No</th>
                        <th>Dueamount</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $total_due = 0;
                        
                        $sql2="SELECT * FROM student";
                        $result=mysqli_query($conn,$sql2);
                        while($rows2=mysqli_fetch_assoc($result))
                        {
                          $sid=$rows2['sid'];
                          $total_due = $total_due + $rows2['dueamount'];
                    ?>
                    <tr>
                        <td><?php echo $rows2['studentname'];?></td>
                        <td><?php echo $rows2['stdcontact'];?></td>
                        <td><?php echo $rows2['dueamount'];?></td>
                   </tr>
                    <?php
                        }
                    ?>
                  <tr>
                        <td>Total Due </td>
                        <td> </td>
                        <td><?php echo number_format($total_due, 2);?></td>
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
