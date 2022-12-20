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
           <div class="card-title">Payment History</div>
           <hr>
           
            <div class="form-group">
            <?php
                $sid = $_REQUEST['sid'];
                $sql05 = "SELECT * from student WHERE sid = '$sid'";
                $result05 = mysqli_query($conn, $sql05);
                $rows05 = mysqli_fetch_assoc($result05);
                $bid = $rows05['bid'];
                $studentname = $rows05['studentname'];
                $stdcontact = $rows05['stdcontact'];
                $stdimage = $rows05['stdimage'];
                $stdaddress = $rows05['stdaddress'];
                $totalfee = $rows05['totalfee'];
                $collectedfee = $rows05['collectedfee'];
                $dueamount = $rows05['dueamount'];

                $sqls="SELECT * FROM batchmanage where bid='$bid'";
                $results =mysqli_query($conn, $sqls);
                $rowss= mysqli_fetch_assoc($results);
                $coursename=$rowss['coursename'];
            ?>
              
           </div>
            <div class="form-group">
                <label for="input-3">Student Image</label>
                <img src="<?php echo $stdimage; ?>" width="80" height="110">
           </div>
            <div class="form-group">
                <?php 
                        echo $studentname . "<br>"; 
                        echo $stdcontact . "<br>";
                        echo $stdaddress . "<br>";                   
                    ?> 
           </div>
            <div class="form-group">
                        Course Name: <?php echo $coursename. "<br>"; ?>
                        Course Fee: <?php echo $totalfee. "<br>"; ?>
                        Collected Amount: <?php echo $collectedfee. "<br>"; ?>
                        Due Amount: <?php echo $dueamount. "<br>"; ?>
           </div>
           <div>
           <table class="table table-Success table-hover">
                <thead>
                <tr>
                    <th>SN</th>           
                    <th>Collection Date</th>
                    <th>Collection Amount</th>
                    <th>Collection Note</th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php
                    $sn = 1;
                    $sql2="SELECT * FROM collectionfee WHERE sid = '$sid'";
                    $result2=mysqli_query($conn,$sql2);
                    while($rows2=mysqli_fetch_assoc($result2))
                    {                    
                    ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $rows2['colldate'];?></td>
                    <td><?php echo $rows2['collamount'];?></td>
                    <td><?php echo $rows2['collnote'];?></td>
                    
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
           </div>
    
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
