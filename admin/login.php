<?php
include './header.php';
session_start();
?>
    <!--account section-->

    <?php
         
            if(isset($_POST['submit']))
            {
              $name = $_POST['name'];
              $pass = $_POST['pass'];
             
              $query = "SELECT * FROM `tbl_login` WHERE name='$name' and password='$pass'";
              $res=mysqli_query($con,$query);
              $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
             
              $count = mysqli_num_rows($res);
              if($count==1)
              {              
             
          
                header("location:index.php");
                }
                
                else {
                  $error = "Your Login Name or Password is invalid";
               }
              }
              ?>
                
    <section id="account-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <form class="text-center border mt-5">
                        <div class="card">
                         <h4 class="card-header">Accounts Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="Email">User Name</label>
                                <input type="text" placeholder="Enter your email" class="form-control" name="name">
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="Password" placeholder="Enter your Password" class="form-control" name="pass">
                                
                            </div>
                            <div class="inline-form text-center ">
                               

                               <input type="submit" name="submit" Value="Submit" class="btn btn-success mt-2">
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </section>
    
</body>
</html>