<?php
session_start();

include 'connect.php';
$msg = "";

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password =  md5($_POST['password']);
  

    $sql = "SELECT * FROM `thrift_registration` WHERE USERNAME = '$username' && password = '$password'";

    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {

       $row = mysqli_fetch_array($result);

       
    
       if($row['USER_ID'] == $row['USER_ID']) {

        $_SESSION['USER_ID'] = $row['EMAIL'];
        $_SESSION['USERNAME'] = $row['USERNAME'];

        header('location:index.php');
        

    }
}else {

  $msg = "<div class='alert alert-danger' role='alert'>
          WRONG USERNAME OR PASSWORD
        </div>";
}


};

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>pages/ login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- loan form css file -->
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>


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

  <!--  Main CSS File -->
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
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form method="post" class="row g-3 needs-validation" novalidate>
                     
                    <div class="col-12">
                    <?php echo $msg ?>
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 p-3" name="submit" type="submit">Login</button>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100 p-3" name="submit" type="submit"><a href="reset-password.php" class="text-light">Reset Password</a></button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.php">Create an account</a></p>
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