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
          <a href="student_manage.php">
        <button class="btn btn-danger mt 4">Add Student <i class="fa-solid fa-user-plus"></i></button></a>
    <hr>
        <table  id="example" class="table table-striped table-hover table-bordered text- " style="width:100%">
            <thead class="table-warning">
                <tr>
                    <th> SN </th>
                    <th>Student Name</th>
                    <th>Student Image</th>
                    <th>Course Name </th>
                    <th>Total Fee</th>
                    <th>Collected Fee</th>
                    <th>Due Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $sn = 1;
                    $sql2="SELECT student.*, batchmanage.coursename, student.totalfee, student.collectedfee, student.dueamount, student.sid  FROM student 
                    INNER JOIN batchmanage  ON batchmanage.bid = student.bid";
                    $result=mysqli_query($conn,$sql2);
                    while($rows2=mysqli_fetch_assoc($result))
                    {
                    $sid=$rows2['sid'];
                    ?>
                    <tr>
                        <td class="text-white"><?php echo $sn++;?></td>
                        <td class="text-white"><a href="collection_history.php?sid=<?php echo $sid; ?>">   
                        <?php echo $rows2['studentname']; ?> </a>  </td>
                        <td><img src="<?php echo $rows2['stdimage'];?>"height=80; width=60;></td>
                        <td class="text-white"><?php echo $rows2['coursename'];?></td>
                        <td class="text-white"><?php echo $rows2['totalfee'];?></td>
                        <td class="text-white"><?php echo $rows2['collectedfee'];?></td>
                        <td class="text-white"><?php echo $rows2['dueamount'];?></td>
                        <td class="text-white">
                        <a href="student_edit.php?sid=<?php echo $sid;?>"><button type="button" class=" btn btn-success"><i class="fa-sharp fa-solid fa-user-pen"></i></button></a>
                        <a href="student_delete.php?sid=<?php echo $sid; ?>"><button type="button" class=" btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button></a>
                        </td>
                </tr>
                    <?php
                    }
                    ?>
                    </tbody>
            </table>
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
			$('#example').DataTable();
		});
	</script>
 

	  
</body>
</html>
 
