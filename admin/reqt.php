<?php
include './header.php';
include './config.php';
?>
<header id="main-header" class="py-2 bg-success text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-user"></i>  Blood Requirements</h1>
        </div>
    </div>
</div>

</header>

<!--end header-->
<!--search section-->
<section id="search-section" class="py-3 mb-3 bg-light">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ml-auto">
               
                    <div class="input-group ">
                 <input type="text" class="form-control" placeholder="Search Requirements....">
                 <div class="input-group-append">
                 <button class="btn btn-success "> <i class="fas fa-search"></i> Search Requirements</button>
                 </div>
                    </div>
               
            </div>
        </div>
    </div>
</section>

<!--endsearch-->

<!--post-->

<section id="latestpost">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Post</h4>
                    </div>
                   <?php 
				   
				   ?>
                    <table class="teble table-striped" width="100%" height="500px">
                        <thead class="bg-dark text-white">
                            <tr>
                                <td>S.No</td>
                                <td>Blood Group</td>
                                <td>No of Unit</td>
                                <td>Camp Address</td>
								 <td>Contact Number</td>
								 <td>Request ID</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
									 <?php
        $qry="select * from tbl_send";
		$res=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($res))
		{
			?>
               
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["bloodgroup"]; ?></td>
                                <td><?php echo $row["no_of_unit"] ?></td>
								<td><?php echo $row["camp_address"] ?></td>
								<td><?php echo $row["contact_no"] ?></td>
								<td><?php echo $row["requestid"] ?></td>
                                 <td><button class="btn btn-dark"><i class="fas fa-trash"></i>  Delete</button></td>
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
            </section>

<!--endpost-->

<!--footer section-->
<?php
include './footer.php';
?>  