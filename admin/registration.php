<?php
include './header.php';
include './config.php';
?>
<header id="main-header" class="py-2 bg-success text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-user"></i>  Registration</h1>
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
                 <button class="btn btn-success "> <i class="fas fa-search"></i> Search Registration</button>
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
            <div class="col-md-12">
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
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Father Name</td>
								 <td>Email</td>
								 <td>DOB</td>
                                 <td>Contact</td>
                                 <td>Nationality</td>
                                 <td>Disease</td>
                                 <td>Blood Group</td>
                                
                                 <td>Address</td>
                                 <td>Action</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
									 <?php
        $qry="select * from register_form";
		$res=mysqli_query($con,$qry);
        $count=0;
		while($row=mysqli_fetch_assoc($res))
		{
            $count++;
			?>
               
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row["firstname"]; ?></td>
                                <td><?php echo $row["lastname"] ?></td>
								<td><?php echo $row["fathername"] ?></td>
								<td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["dob"] ?></td>
								<td><?php echo $row["contact"] ?></td>
                                <td><?php echo $row["nationality"] ?></td>
                                <td><?php echo $row["disease"] ?></td>
                                <td><?php echo $row["bloodgroup"] ?></td>
                                <td><?php echo $row["address"] ?></td>
                             
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