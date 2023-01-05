<?php
session_start();
include 'connect.php';

$msg = "";

if (isset($_POST['submit'])) {
  $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = md5($_POST['password']);


  $checkdata = "SELECT * FROM thrift_registration WHERE EMAIL = '$email'";
  
  $checkresult = mysqli_query($connect, $checkdata);

  if (mysqli_num_rows($checkresult) > 0) {
    $msg = "<div class='alert alert-danger' role='alert'>
              User  Already Have an Account, Proceed to Login
            </div>";
  }else{

  $insert = "INSERT INTO thrift_registration(USER_ID, FIRSTNAME, LASTNAME, 
              EMAIL, USERNAME, PASSWORD) VALUES ('','$firstname','$lastname','$email','$username','$password')";


$result = mysqli_query($connect, $insert);

if ($result) {
  header('location:pages-login.php');
}
}
  

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="main.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="landing_page.css" rel="stylesheet">
  

 
  <!-- ======================================================== --> 
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                <a class="navbar-brand" href="landing_page.php"><img src="assetss/T.png" alt="" width="50"></a>
            </div>
    
    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="landing_page.php">Home</a>
              </li>
    
              <div class="btn-group">
                <div class="btn-group">
                  <button id="dropdown" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      PRODUCT
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><button class="dropdown-item" type="button">PERSONAL CONTRIBUTION</button></li>
                    <li><button class="dropdown-item" type="button">DAILY CONTRIBUTION</button></li>
                    <li><button class="dropdown-item" type="button">WEEKLY CONTRIBUTION</button></li>
                    <li><button class="dropdown-item" type="button">MONTHLY CONTRIBUTION</button></li>
                  </ul>
                </div>
              </div>
    
              <div class="btn-group">
                <div class="btn-group">
                  <button id="dropdown" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                      ACCOUNT
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                <a href="pages-login.php"  class='mx-3'>SIGN IN</a>
                <a href="pages-register.php"  class='mx-3'>REGISTRATION</a>
              </ul>
                </div>
              </div>
    
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">Contact US</a>
              </li>
            </ul>
          </div>
          </div>
        </nav>
      </header>
    


  <main>
    <div class="container ">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            

              <div class="card mb-3">

                <div class="card-body ">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                    <?php echo $msg ?>
                  </div>

                  <form method="post" action="pages-register.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>


                     <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12 ">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn w-100 p-3" name="submit" type="submit" style="background: rgb(241, 116, 226);">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>