<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- css file  -->

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
        </ul>
      </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="text">
      <!-- <h1 class="text-dark">MANAGING YOUR BUSINESS <br>JUST GOT <br>EASIER</h1> -->
      <!-- <button id="get_started_btn" class="btn my-5"> -->
      <!-- <a href="pages-register.php" class="text-decoration-none text-dark">GET STARTED</a></button> -->
      
      </div>
      <video width="3400" height="340" autoplay muted>
  <source src="assetss/START SAVING.mp4" type="video/mp4">
  <source src="assetss/T.mp4" type="video/mp4">
  <!-- <img class="container_image" src="assetss/png image.png" alt=""> -->

</video>
      <div class="image d-flex">
      <!-- <img class="container_image" src="assetss/farmers 2.png" alt=""> -->
      </div>
    </div>

    <div class="service d-flex justify-content-evenly">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><img src="https://img.icons8.com/pastel-glyph/64/null/gender-neutral-user.png"/>
          </h5>
          <h6 class="card-subtitle mb-2 text-muted">Create Account</h6>
          <p class="card-text">
            To create your account sign up for an account with your email or google account, select a monthly category minimum of NGN5000</p>
        </div>
      </div>

      <!-- second card -->

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 2rem;">₦</h5>
          <h6 class="card-subtitle mb-2 text-muted">Start saving</h6>
          <p class="card-text">
            You will be enabled to save daily on this platform. To start click "platform", select a group or rotational savings, then you can start saving with the minimum of NGN500</p>
          
        </div>
      </div>

      <!-- third card -->

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><img src="https://img.icons8.com/ios/50/null/request-money.png"/></h5>
          <h6 class="card-subtitle mb-2 text-muted">Get a loan</h6>
          <p class="card-text">
            You will be eligible for loan after 6 months of consistent savings. To apply for loan click "product", select loan and fill up all the available reqirements.</p>
          
        </div>
      </div>
    </div>

    <div class="our_story">
      <div class="container text-center">
        <div class="row align-items-center">

          <div class="col">
              <img src="assetss/png image.png" width="500" alt="">
          </div>
          <div class="col mb-5 rounded text- p-5" id="column2">
            <p>THRIFTEE is an online savings scheme that provides the opporunity for consistent savings and loan lending for business.
            </p>
            <p>THRIFTEE is here to help you develop saving habit on a daily or weekly basis. we also provise you group/rotational savings that is favourable to our customers.

              Savings in the most convenient way is made available and paying back loan is made more easier
            </p>
            
          </div>
        </div>
      </div>
    </div>

   <div class="row p-4 mx-4">
    <div class="col p-5 mx-4 rounded" id="row">
      <p>
        <h2>
          <b>ABOUT US</b>
        </h2>
      </p>
      <p>Numerous cooperative societies (ajo) still manage their contributions in the same manner on a local level. Due to the lack of adequate structures to monitor and collect each person's information, these have in recent years resulted in significant amounts of money belonging to the people being embezzled by the group management. However, 
        THRIFTEE web app bring solution to the stated problems by digitalized ajo processes, with increased accountability and monitoring feautures.
      </p>
      <p>
        To address the issues that have led many people to refrain from taking part in the activities of this significant group of people.
         THRIFTEE is set to enable individual develop the habit of saving, promote online saving culture, access to easy contribution and a 
         secured 1database. And in order to best serve the group members,
         our web application made it very simple to request for a loan with little to no interest for any urgent necessity.
      </p>
    </div>
    <div class="col-4">
     <p>THRIFTEE banking scheme was established by young professionals, with the sole aim of bringing savings, bill payment, and loan lending
      to the doorstep of our users.
    
      </p>
     <p> At your comfort zones, THRIFTEE would grant you access to loans with fair interest rates! We want to ease the burden of having to
      go through traditional banks to access loans.
    </p>
     <p> We are targeted at reaching entrepreneurs, civil workers, students and individuals who are keen on reaching their personal,
       economic, academic and social goals 
      through a jointly shared contributions-based scheme.
    </p>
    </div>
   </div>


   <!-- FREQUENTLY ASK QUESTION -->

   <div class="frequently_question mb-5">
   
    <button class="btn btn-dark mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"> <h2>FREQUENTLY ASKED QUESTION</h2>
    </button>

      <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">LIST OF FAQ </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <b>WHAT IS THRIFTEE?</b>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure sequi maiores voluptatibus ipsum, nostrum debitis perspiciatis. Quisquam harum illo in officia eum, dolorum blanditiis, id repudiandae, totam itaque eveniet neque!</p>

          <b>WHY SHOULD I JOIN THRIFTEE</b>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab ad asperiores iste. Recusandae rerum a maxime unde repellat laborum saepe error atque exercitationem. Nostrum ad eaque velit inventore quas.</p>
        </div>
      </div>
  </main>


  <footer class=" bg-dark text-light my-5">
<div class="container">
  <h2>THRIFTEE</h2>
</div>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <h4>Company</h4>
     <ul>
     <li><a  href="" style="text-decoration: none">About Us</a></li>
     <li><a  href="" style="text-decoration: none">Careers</a></li>
     <li><a  href="" style="text-decoration: none">Team</a></li>
     <li><a  href="" style="text-decoration: none">Contact</a></li>
      
     </ul>
    </div>
    <div class="col">
    <h4>Product</h4>
     <ul>
     <li><a href="">Contribution</a></li>
     <li><a href="">Loans</a></li>
     <li><a href="">Savings Plan</a></li>
     <li><a href="">Features</a></li>
      
     </ul>
    </div>
    <div class="col">
    <h4>Resources</h4>
     <ul>
     <li><a href="">Customer's Stories</a></li>
     <li><a href="">FAQs</a></li>
     <li><a href="">Security</a></li>
     <li><a href="">Blog</a></li>
      
     </ul>
    </div>
    <div class="col">
    <h4>Contact</h4>
     <ul class="footer_listing">
     <li><a href="">44, Commercial Avenue, Yaba, Lagos</a></li>
     <li><a href="">info@thriftee@gmail.com</a></li>
     <li><a href="">+23432398923</a></li>
     <li><a href="">Whatsapp</a></li>
      
     </ul>
    </div>
  </div>
</div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>