<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../Head/head.php");?> 
    <title>AnderJobs</></title>
</head>
<body>

<!--=================================
header -->
<?php require_once("../Header/Header.php");?> 
<!--=================================
header -->

<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
          <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="..\..\public\images\avatar\04.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ml-4">
              <h3>Felica Queen</h3>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sticky-top secondary-menu-sticky-top">
          <div class="secondary-menu">
            <ul class="list-unstyled mb-0">
              <li><a class="active" href="dashboard-candidates-my-profile.html">Mi Perfil</a></li>
              <li><a href="dashboard-candidates-change-password.html">Cambiar Contraseña</a></li>
              <li><a href="dashboard-candidates-manage-jobs.html">Administrar Empleos</a></li>
              <li><a href="login.html">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<!--=================================
My Profile -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-2">
            <h4>Basic Information</h4>
          </div>
          <div class="cover-photo-contact">
            <div class="upload-file">
              <div class="custom-file">
                <input type="file" class="custom-file-input">
                <label class="custom-file-label">Upload Cover Photo</label>
              </div>
            </div>
          </div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Your Name</label>
                <input type="text" class="form-control" value="Felica Queen">
              </div>
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" value="felicaqueen@gmail.com">
              </div>
              <div class="form-group col-md-6 datetimepickers">
                <label>Date of birth</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" value="08/11/1999" data-target="#datetimepicker-01">
                  <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label>Phone</label>
                <input type="text" class="form-control" value="+(123) 345-6789">
              </div>
              <div class="form-group col-md-6">
                <label class="d-block mb-3">Gender</label>
                  <div class="custom-control custom-radio d-inline">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Male</label>
                  </div>
                  <div class="custom-control custom-radio d-inline ml-3">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked="checked">
                    <label class="custom-control-label" for="customRadio2">Female</label>
                  </div>
              </div>
              <div class="form-group col-md-6">
                <label>Job Title</label>
                <input type="text" class="form-control" value="General Insurance">
              </div>
              <div class="form-group col-md-6 select-border">
                <label>Job Title</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">Test Selector</option>
                  <option value="value 02">Needham, MA</option>
                  <option value="value 03">New Castle, PA</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label>Salary</label>
                <input type="text" class="form-control" value="$33,000">
              </div>
              <div class="form-group mb-0 col-md-12">
                <label>Description</label>
                <textarea class="form-control" rows="5" placeholder="Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself."></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Social Links</h4>
          </div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Facebook</label>
                <input type="text" class="form-control" value="https://www.facebook.com/">
              </div>
              <div class="form-group col-md-6">
                <label>Twitter</label>
                <input type="email" class="form-control" value="https://www.twitter.com/">
              </div>
              <div class="form-group mb-0 col-md-12">
                <label>Linkedin</label>
                <input type="text" class="form-control" value="https://www.linkedin.com/">
              </div>
            </div>
          </form>
        </div>
         <div class="user-dashboard-info-box">
          <div class="form-group mb-0">
            <h4 class="mb-3">Address</h4>
            <div class="form-group">
              <label>Enter Your Location</label>
              <input type="text" class="form-control" value="214 West Arnold St. New York, NY 10002">
            </div>
            <div class="company-address-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin" height="400" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <a class="btn btn-md btn-primary" href="#">Save Settings</a>
      </div>
      </div>
    </div>
</section>
<!--=================================
My Profile -->

<!--=================================
footer -->
<?php require_once("../Footer/footer.php");?> 
<!--=================================
footer -->

<!--=================================
Back To Top-->
<div id="back-to-top" class="back-to-top">
    <i class="fas fa-angle-up"></i>
</div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active" data-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="Remember-02">
                        <label class="custom-control-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->

<!--=================================
Javascript -->
<?php require_once("../Jsglobal/jsglobal.php");?> 
<!--=================================
Javascript -->

</body>
</html>
