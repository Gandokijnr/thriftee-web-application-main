<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      
        <!-- css file  -->
      
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="style.css">
      
        <!-- font awesome cdn -->
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 pe-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="landing_page.php">Home</a>
          </li>

          <div class="btn-group">
            <div class="btn-group">
              <button id="dropdown" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  PRODUCT
              </button>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                <button class="dropdown-item" type="button"><a href="pages-login.php" class="text-dark">PERSONAL CONTRIBUTION</a></button>
                <button class="dropdown-item" type="button"><a href="pages-login.php" class="text-dark">DAILY CONTRIBUTION</a></button>
                <button class="dropdown-item" type="button"><a href="pages-login.php" class="text-dark">WEEKLY CONTRIBUTION</a></button>
                <button class="dropdown-item" type="button"><a href="pages-login.php" class="text-dark">MONTHLY CONTRIBUTION</a></button>
              </ul>
            </div>
          </div>

          <div class="btn-group">
            <div class="btn-group">
              <button id="dropdown" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  ACCOUNT
              </button>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                <button class="dropdown-item" type="button"><a href="pages-login.php" class="text-dark">SIGN IN</a></button>
                <button class="dropdown-item" type="button"><a href="pages-register.php" class="text-dark">REGISTRATION</a></button>
              </ul>
            </div>
          </div>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">Contact US</a>
          </li>
        </ul> -->
      </div>
      </div>
    </nav>
  </header>
    
    <div class="container my-3">
        <h2 class="text-center py-3">GET IN TOUCH</h2>
        <p class="text-center my-4">fbwaeufhbuifbweauifbweuf ewifwbefeyfubewfuyhbgewfuabfwfyewlf</p>
        <div class="contact_options d-flex  text-center my-5">
            <div class="col">
                <i class="fa-solid fa-location-dot"></i>
                <p>bolaji street</p>
            </div>
            
            <div class="col">
                <i class="fa-solid fa-phone"></i>
                <p>bolaji street</p>
            </div>
        
            <div class="col">
                <i class="fa-solid fa-envelope"></i>
                <p>0928482309</p>
            </div>
        </div>
        <div class="message_container bg-light rounded text-left  d-flex flex-wrap ">
            <div class="col m-5">
            <form action="" class="d-grid">
                <label for="" class="text-left ">NAME</label>
                <input type="text" class="form-control my-3" placeholder="Please Enter your name">

                <label for="" class="text-left">PHONE NUMBER</label>
                <input type="text" class="form-control my-3" placeholder="contact number">
                <label for="" class="text-left">EMAIL</label>
                <input type="text" class="form-control my-3" placeholder="Enter your email">
            </form>
        </div>
        <div class="col m-5">

                <textarea name="textarea" class="textarea" cols="70" rows="11" placeholder="">
                </textarea>
        </div>
        
        </div>
        <button class="btn text-center">Send Message</button>

    </div>

</body>
</html>