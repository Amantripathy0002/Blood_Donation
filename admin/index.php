<?php
include './header.php';
include './config.php';
?>
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-cog"></i>Dashboard</h1>
        </div>
    </div>
</div>

</header>

<!--end header-->

<!--action-->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="donor.php" class="btn btn-primary btn-block" >
                    <i class="fas fa-plus"></i>  Add Donor
                </a>
            </div>
            <div class="col-md-2">
                <a href="camps.php" class="btn btn-success btn-block" >
                    <i class="fas fa-plus"></i>  Add Camps
                </a>
            </div>
            <div class="col-md-3">
                <a href="reqt.php" class="btn btn-warning btn-block" >
                    <i class="fas fa-eye"> View Requirements</i>
                </a>
            </div>
			<div class="col-md-3">
                <a href="contact.php" class="btn btn-warning btn-block" >
                    <i class="fas fa-phone"> Contacts Query</i>
                </a>
            </div>
            <div class="col-md-2">
                <a href="./registration.php" class="btn btn-success btn-block" >
                    <i class="fas fa-eye"></i>  View Registration
                </a>
        </div>
    </div>

</section>
<!--end action-->





<!--latestpost Section-->
<section id="latestpost">
    <div class="container">
        <div class="row">
              <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>View Camps</h4>
                    </div>
                   
                    <table class="teble table-striped" width="100%" height="500px">
                        <thead class="bg-dark text-white">
                            <tr>
                                <td>S.No</td>
                                <td>Location</td>
                                <td>City</td>
                                <td>State</td>
								 <td>Date</td>
								  <td>Timeing</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
											 <?php
        $qry="select * from tbl_addcamps";
		$res=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($res))
		{
			?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
								  <td><?php echo $row["location"]; ?></td>
								    <td><?php echo $row["city"]; ?></td>
									  <td><?php echo $row["state"]; ?></td>
									    <td><?php echo $row["date"]; ?></td>
										  <td><?php echo $row["timeing"]; ?></td>
                                
                                <td><button class="btn btn-dark"><i class="fas fa-equals"></i>  Details</button></td>
                            </tr>
							<?php
		}
		?>
                           
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-header">
					<?php
					 
						        $result = mysqli_query($con,"select count(1) FROM tbl_checkuser");
									$row = mysqli_fetch_array($result);

									$total = $row[0];
									

					?>
                        <h4 class="card-title text-center">Total Registered Donor</h4>
						
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4"><i class="fas fa-user"></i><?php echo $total;?></h1>
                        <a href="donor.php" class="btn btn-outline-light btn-sm"> View</a>
                    </div>
                    
                </div>
                <div class="card bg-success text-white">
                    <div class="card-header">
					<?php
					 
						        $result = mysqli_query($con,"select count(1) FROM tbl_addcamps");
									$row = mysqli_fetch_array($result);

									$total = $row[0];
									

					?>
                        <h4 class="card-title text-center">Total Camps</h4>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4"><i class="fas fa-home"></i> <?php echo $total;?></h1>
                        <a href="category.html" class="btn btn-outline-light btn-sm">View </a>
                    </div>
                </div>

                <div class="card bg-warning text-white">
                    <div class="card-header">
					
                        <h4 class="card-title text-center">Total Users</h4>
                    </div>
                    <div class="card-body text-center">
					<?php
					 
						        $result = mysqli_query($con,"select count(1) FROM tbl_checkuser");
									$row = mysqli_fetch_array($result);

									$total = $row[0];
									

					?>
                        <h1 class="display-4"><i class="fas fa-users"></i><?php echo $total;?>  </h1>
                        <a href="category.html" class="btn btn-outline-light btn-sm">View </a>
                    </div>
                </div>
                </div>
                
                   
                
            </div>
        </div>
    </div>
</section>
<!--endoflatestpost-->
<?php
include './footer.php';
?>
  