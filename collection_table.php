<?php 
require_once("validuser.php");
require_once("connectdb.php");
require_once('header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

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


      <div class="row">
        <div class="col-sm-12" >
			  <div class="table-responsive" >
        <div class="container mt-3">
          <a href="collection_manage.php">
          <button type="button" class="btn btn-danger px-5">Add Collection <i class="fa-solid fa-money-check-dollar"></i></button></a>
    <hr>
        <table  id="colltable" class="table table-striped table-hover table-bordered text- " style="width:100%">
            <thead class="table-warning">
                    <tr>
                        <th>student Id</th>
                        <th>collection date</th>
                        <th>collection amount</th>
                        <th>collection note</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $sql2 = "SELECT * FROM collectionview";
                        $result = mysqli_query($conn,$sql2);
                        while($rows2 = mysqli_fetch_assoc($result))
                        {
                        $collid=$rows2['collid'];
                    ?>
                    <tr>
                        <td class="text-white"><?php echo $rows2['studentname'];?></td>
                        <td class="text-white"><?php echo $rows2['colldate'];?></td>
                        <td class="text-white"><?php echo $rows2['collamount'];?></td>
                        <td class="text-white"><?php echo $rows2['collnote'];?></td>
                        <td>
                        <a href="collection_edit.php?sid=<?php echo $collid;?>"><button type="button" class=" btn btn-success"><i class="fa-sharp fa-solid fa-user-pen"></i></button></a>
                        <a href="collection_delete.php?sid=<?php echo $collid; ?>"><button type="button" class=" btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                        </td>
                </tr>
                    <?php
                    }
                    ?>
                    </tr>
                  
                    </tfoot>
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
  <script>
		$(document).ready(function () {
			$('#colltable').DataTable();
		});
	</script>

	
</body>
  
</html>
