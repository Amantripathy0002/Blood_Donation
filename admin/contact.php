<?php
include './header.php';
include './config.php';
?>
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-phone"></i>Contact List</h1>
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
                 <input type="text" class="form-control" placeholder="Search Contact....">
                 <div class="input-group-append">
                 <button class="btn btn-primary "> <i class="fas fa-search"></i> Search Contact</button>
                 </div>
                    </div>
               
            </div>
        </div>
    </div>
</section>
<section id="latestpost">
    <div class="container">
        <div class="row">
		
			 <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
					<div class="col-md-12" style="padding:10px">
                <div class="card" >
                    <div class="card-header">
                        <h4>View Contacts Query</h4>
                    </div>
                   
                    <table class="teble table-striped" width="100%" height="500px" style="padding:10px">
                        <thead class="bg-dark text-white">
                            <tr>
                                <td>S.No</td>
                                <td>Name</td>
                                <td>Phone Number</td>
                                <td>Email</td>
								 <td>Message</td>
								  
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
											 <?php
        $qry="select * from contact";
		$res=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($res))
		{
			?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
								  <td><?php echo $row["name"]; ?></td>
								    <td><?php echo $row["mobile"]; ?></td>
									  <td><?php echo $row["email"]; ?></td>
									    <td><?php echo $row["message"]; ?></td>
										  
                                
                                <td><button class="btn btn-dark"><i class="fas fa-trash"></i>  Delete</button></td>
                            </tr>
							<?php
		}
		?>
                           
                        </tbody>
                    </table>
                    
                </div>
            </div>