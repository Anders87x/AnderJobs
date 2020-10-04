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
      <div class="col-12">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="..\..\public\images\svg\01.svg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ml-4">
               <h3>Fleet Improvements Pvt</h3>
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
            <ul>
              <li class="active"><a href="dashboard-employer-my-profile.html">Mi Perfil</a></li>
              <li><a href="dashboard-employer-change-password.html">Cambiar Contraseña</a></li>
              <li><a href="dashboard-employer-manage-candidates.html">Administra Postulantes</a></li>
              <li><a href="dashboard-employer-manage-jobs.html">Administrar Empleos</a></li>
              <li><a href="dashboard-employer-post-new-job.html">Prublicar Nuevo Trabajo</a></li>
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
Employer Dashboard -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box pb-0">
          <div id="chart">
          </div>
        </div>
        <div class="user-dashboard-info-box mb-0">
          <div class="section-title-02 mb-4">
            <h4>Job List</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="job-list ">
                <div class="job-list-logo">
                  <img class="img-fluid" src="..\..\public\images\svg\01.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="job-detail.html">Marketing and Communications</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="employer-detail.html">Fast Systems Consultants</a> </li>
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Wellesley Rd, London</li>
                        <li><i class="fas fa-filter pr-1"></i>Accountancy</li>
                        <li><a class="freelance" href="#"><i class="fas fa-suitcase pr-1"></i>Freelance</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>1M ago</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="..\..\public\images\svg\02.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="job-detail.html">Web Developer – .net</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="employer-detail.html">Pendragon Green Ltd</a> </li>
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Needham, MA</li>
                        <li><i class="fas fa-filter pr-1"></i>IT &amp; Telecoms</li>
                        <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>3D ago</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class=" job-list-logo">
                  <img class="img-fluid" src="..\..\public\images\svg\03.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="job-detail.html">Payroll and Office Administrator</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="employer-detail.html">Wight Sound Hearing LLC</a> </li>
                        <li><i class="fas fa-map-marker-alt pr-1"></i>New Castle, PA</li>
                        <li><i class="fas fa-filter pr-1"></i>Banking</li>
                        <li><a class="temporary" href="#"><i class="fas fa-suitcase pr-1"></i>Temporary</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>2W ago</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="..\..\public\images\svg\04.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="job-detail.html">Data Entry Administrator</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="employer-detail.html">Tan Electrics Ltd</a> </li>
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Park Avenue, Mumbai</li>
                        <li><i class="fas fa-filter pr-1"></i>Charity &amp; Voluntary</li>
                        <li><a class="full-time" href="#"><i class="fas fa-suitcase pr-1"></i>Full-time</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>3M ago</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="..\..\public\images\svg\05.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="job-detail.html">Operational manager part-time</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="employer-detail.html">Fleet Home Improvements Pvt</a> </li>
                        <li><i class="fas fa-map-marker-alt pr-1"></i>Green Lanes, London</li>
                        <li><i class="fas fa-filter pr-1"></i>Accountancy (Qualified)</li>
                        <li><a class="part-time" href="#"><i class="fas fa-suitcase pr-1"></i>Part-Time</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pr-1"></i>6D ago</span> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center mt-5">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">25</a></li>
                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Employer Dashboard -->

<!--=================================
footer-->
<?php require_once("../Footer/footer.php");?> 
<!--=================================
footer-->

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
</body>

</html>
