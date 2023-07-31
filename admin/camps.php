<?php
include './header.php';
include './config.php';
?>
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><i class="fas fa-home"></i>CAMPS</h1>
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
                 <input type="text" class="form-control" placeholder="Search Camps....">
                 <div class="input-group-append">
                 <button class="btn btn-primary "> <i class="fas fa-search"></i> Search Camps</button>
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
					
					
					
<?php

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$name = $_POST['location_name'];
$city = $_POST['city'];
$state = $_POST['country_state'];
$date = $_POST['date'];
$time= $_POST['time'];

//Insert Query of SQL
$query = "INSERT INTO `tbl_addcamps`(`location`, `city`, `state`, `date`, `timeing`) VALUES ('$name','$city','$state','$date','$time')";
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

					
                        <h4>Add Camps</h4>
                    </div>
                  <form  method="post" style="padding:10px">
                <div class="form-group">
                    <label for="title" >Location Name</label>
                    <input type="text" class="form-control" name="location_name">
                </div>
				  <div class="form-group">
                    <label for="title" >City</label>
                    <input type="text" class="form-control" name="city">
                </div>
				  <div class="form-group">
                    <label for="title" >State</label>
                   <!--- India states -->
<select id="country-state" name="country_state" class="form-control">
    <option >Andaman and Nicobar Islands</option>
    <option >Andhra Pradesh</option>
    <option >Arunachal Pradesh</option>
    <option >Assam</option>
    <option >Bihar</option>
    <option >Chandigarh</option>
    <option >Chhattisgarh</option>
    <option >Dadra and Nagar Haveli</option>
    <option >Daman and Diu</option>
    <option>Delhi</option>
    <option >Goa</option>
    <option >Gujarat</option>
    <option >Haryana</option>
    <option >Himachal Pradesh</option>
    <option >Jammu and Kashmir</option>
    <option >Jharkhand</option>
    <option >Karnataka</option>
    <option >Kerala</option>
    <option >Ladakh</option>
    <option >Lakshadweep</option>
    <option>Madhya Pradesh</option>
    <option>Maharashtra</option>
    <option >Manipur</option>
    <option >Meghalaya</option>
    <option >Mizoram</option>
    <option >Nagaland</option>
    <option >Odisha</option>
    <option >Puducherry</option>
    <option >Punjab</option>
    <option >Rajasthan</option>
    <option >Sikkim</option>
    <option>Tamil Nadu</option>
    <option>Telangana</option>
    <option>Tripura</option>
    <option >Uttar Pradesh</option>
    <option >Uttarakhand</option>
    <option >West Bengal</option>
</select>
                </div>
				  <div class="form-group">
                    <label for="title" >Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label for="Category">Timeing<label>
					<input type="time" class="form-control" name="time">
                   
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
                        <h4>View Camps</h4>
                    </div>
                   
                    <table class="teble table-striped" width="100%" height="500px" style="padding:10px">
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