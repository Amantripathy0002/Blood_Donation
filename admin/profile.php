<?php
include './header.php';
?>

    <!--header-->
    <header id="main-header"class="bg-primary text-white p-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><i class="fas fa-user"></i>  User</h1>
            </div>

            </div>
          </div>
    </header>
    <!--end header-->
    <!--action-->
    <section id="action" class="bg-light py-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
           <a class="btn btn-light  btn-block" href="index.html"><i class="fas fa-arrow-left"></i>  Back to Dashboard </a>
          </div>
          <div class="col-md-3">
            <a class="btn btn-success  btn-block" href="signup.html"><i class="fas fa-lock"></i>  Change Password </a>
       
        </div>
        <div class="col-md-3">
            <a class="btn btn-danger  btn-block" href="#"><i class="fas fa-trash"></i>  Detete Account </a>
        </div>
        </div>
      </div>

    </section>
    <!--end main-->

   
    <secction id="edit-profile">
      <div class="container ">
        <div class="row">
          <div class="col-md-9 border">
            <div class="card ">
              <h4 class="card-header border bg-light">
                Edit Profile
              </h4>

              
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="please enter your name">

                </div>
                <div class="form-group">
                  <label for="email"> Email</label>
                  <input type="text" class="form-control" placeholder="enter your email">

                </div>
                <div class="form-group">
                  <label for="bio">Bio</label>
                  <textarea name="editor1"></textarea>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-3">
            <h3>Your Image</h3>
            <img src="/img/sam.jpg" class="img-fluid d-block">
            <button class="btn btn-primary btn-block">Edit Image</button>
            <button class="btn btn-danger btn-block"> Reset Image</button>
            
          </div>
        </div>
      </div>
    </secction>


    <!--footer section-->
<?php
include './footer.php';
?>