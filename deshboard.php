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

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
      <div class="card-content">
          <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light" >
                <a href="batch_manage.php">
                  <div class="card-body">
                    <h5 class="text-white mb-0">BATCH MANAGE<span class="float-right"><i class="fa-solid fa-book-open-reader"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                      </a>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="student_table.php">
                  <div class="card-body">
                    <h5 class="text-white mb-0">STUDENT MANAGE<span class="float-right"><i class="fa-solid fa-user-graduate"></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                      </a>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="collection_table.php">
                  <div class="card-body">
                    <h5 class="text-white mb-0">PAYMENT<span class="float-right"><i class="fa-solid fa-person-chalkboard"></i></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                      </a>
                  </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="deu_amount.php">
                  <div class="card-body">
                    <h5 class="text-white mb-0">DEU-AMOUNT<span class="float-right"><i class="fa-solid fa-school-circle-exclamation"></i></i></span></h5>
                      <div class="progress my-3" style="height:3px;">
                         <div class="progress-bar" style="width:55%"></div>
                      </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
   </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Student Admission
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Old Student</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>New Student</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">1500</h5>
			   
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">700</h5>
			   
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">690</h5>
			  
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Course Taken
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i>PWAD</td>
                   <td>5856</td>
                   <td>55%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>.NET</td>
                   <td>2602</td>
                   <td>25%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i>DDD</td>
                   <td>1802</td>
                   <td>15%</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                   <td>1105</td>
                   <td>5%</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Order Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Amount</th>
                     <th>Date</th>
                     <th>Shipping</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Iphone 5</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td>$ 1250.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
				   
				   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
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
