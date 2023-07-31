<?php
 include './header.php';
 include './config.php';
?>



    <!--header-->
<header id="main-header" class="py-2 bg-warning text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-user"></i>  DONOR LIST</h1>
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
                 <input type="text" class="form-control" placeholder="Search Donor....">
                 <div class="input-group-append">
                 <button class="btn btn-warning "> <i class="fas fa-search"></i> Search Donor</button>
                 </div>
                    </div>
               
            </div>
        </div>
    </div>
</section>

<!--endsearch-->

<!--post-->

<section id="latestpost">
    <div class="container m-10" >
        <div class="row">
            
			
			
			 <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
					
					
					
<?php

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$name = $_POST['donor_name'];
$email = $_POST['donor_email'];
$contact = $_POST['mob'];
$address = $_POST['address'];
$blood_group = $_POST['blood_group'];

//Insert Query of SQL
$query = "insert into tbl_checkuser(username,email,contact,address,bloodgroup) values ('$name', '$email', '$contact', '$address','$blood_group')";
$res=mysqli_query($con,$query);
if($res)
{
echo '<script>alert("Data subimetted Successfully")</script>';
}

else
{
echo '<script>alert("Failed to Insert")</script>';
}
}

?>

					
                        <h4>Register Donor</h4>
                    </div>
                  <form  method="post" style="padding:10px">
                <div class="form-group">
                    <label for="title" >Name</label>
                    <input type="text" class="form-control" name="donor_name">
                </div>
				  <div class="form-group">
                    <label for="title" >Email</label>
                    <input type="text" class="form-control" name="donor_email">
                </div>
				  <div class="form-group">
                    <label for="title" >Contact No</label>
                    <input type="text" class="form-control" name="mob">
                </div>
				  <div class="form-group">
                    <label for="title" >Address</label>
                    <textarea class="form-control" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="Category">Blood Group</label>
                    <select class="form-control" name="blood_group">
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
						<option>O+</option>
						<option>A-</option>
						<option>B-</option>
						<option>O-</option>
						<option>AB-</option>
                    </select>
                </div>
				<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary ">
				</div>
             
               
            </form>
                    
                    
                </div>
            </div>
			
			<div class="col-md-12" style="padding:10px">
                <div class="card" >
                    <div class="card-header">
                        <h4>Register Donor</h4>
                    </div>
                  
                    <table class="teble table-striped" width="100%" height="500px" style="padding:10px">
                      <thead class="bg-dark text-white">
						

                            <tr>
                                <td>S.no.</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Contact </td>
                                <td> Address</td>
								 <td> Blood Group</td>
                            </tr>
                        </thead>
                        <tbody>
						 <?php
        $qry="select * from tbl_checkuser";
		$res=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($res))
		{
			?>
                          <tr>
                                <td><?php echo $row["id"]; ?></td>
								<td><?php echo $row["username"]; ?></td>
								<td><?php echo $row["email"]; ?></td>
								<td><?php echo $row["contact"]; ?></td>
								<td><?php echo $row["address"]; ?></td>
								<td><?php echo $row["bloodgroup"]; ?></td>
                               
							
								
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
<?php
include './footer.php';
?> 


