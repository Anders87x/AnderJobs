<!DOCTYPE html>
<html lang="en">
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
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Registro</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index.html"> Inicio </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Registro </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
         <div class="section-title">
          <h4 class="text-center">Crear una cuenta</h4>
         </div>
          <fieldset>
            <legend class="px-2">Seleccione tipo de cuenta</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active" data-toggle="tab" href="#candidate" role="tab">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Postulante</h6>
                      <p class="mb-0">Quiero descubrir empresas.</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item ml-auto">
                <a class="nav-link" data-toggle="tab" href="#employer" role="tab">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Empleador</h6>
                      <p class="mb-0">Quiero atraer al mejor talento.</p>
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
                  <div class="form-group col-md-6">
                    <label for="Username">Username *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Address *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password *</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password2">Confirm Password *</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-group col-12">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-12 select-border">
                    <label for="sector">Select Sector:</label>
                    <select class="form-control basic-select">
                      <option value="value 01" selected="selected">Accountancy</option>
                      <option value="value 02">Apprenticeships</option>
                      <option value="value 03">Banking</option>
                      <option value="value 04">Education</option>
                      <option value="value 05">Engineering</option>
                      <option value="value 06">Estate Agency</option>
                      <option value="value 07">IT & Telecoms</option>
                      <option value="value 08">Legal</option>
                    </select>
                  </div>
                  <div class="form-group col-12">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="accepts-01">
                      <label class="custom-control-label" for="accepts-01">you accept our Terms and Conditions and Privacy Policy</label>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6 text-md-right mt-2 text-center">
                    <p>Already registered? <a href="#"> Sign in here</a></p>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Username *</label>
                    <input type="text" class="form-control" id="Username">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Address *</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Password *</label>
                    <input type="password" class="form-control" id="Password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password2">Confirm Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                  <div class="form-group col-12">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone">
                  </div>
                  <div class="form-group col-12">
                    <label for="sector">Select Sector</label>
                    <input type="text" class="form-control" id="sector">
                  </div>
                  <div class="form-group col-12 mt-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="accepts-02">
                      <label class="custom-control-label" for="accepts-02">you accept our Terms and Conditions and Privacy Policy</label>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6 text-md-right mt-2 text-center">
                    <a href="#">Already have an account?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Register -->

<!--=================================
feature-info -->
<?php require_once("../Feature/Feature.php");?> 
<!--=================================
feature-info-->

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
Javascript -->
<?php require_once("../Jsglobal/jsglobal.php");?> 
<!--=================================
Javascript -->

</body>
</html>
