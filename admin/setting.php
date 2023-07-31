<?php
include './header.php';
?>
    <!--header-->
    <header id="main-header"class="bg-primary text-white p-2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><i class="fas fa-cog"></i>  Setting</h1>
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
            <a class="btn btn-success  btn-block" href="signup.html"><i class="fas fa-check"></i> Svae Change </a>
       
        </div>
        <div class="col-md-3">
           
        </div>
        </div>
      </div>

    </section>
    <!--end main-->

    <section id="main" class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <h3 class="card-header">
                                  Edit Settings
                        </h3>
                        <div class="card-body">
                            <p class="card-text">Allow user registration</p>
                            <input type="radio" name="r">  <label for="yes">Yes</label><br>
                            <input type="radio"name="r">  <label for="no">No</label>
                            <p class="card-text">Home page Formate</p>
                            <input type="radio" name="r">  <label for="yes">Yes</label><br>
                            <input type="radio"name="r">  <label for="no">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php
 include './footer.php';
?>