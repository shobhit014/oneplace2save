<!doctype html>
<html lang="en">
<head>
  <title>Home: One place to save</title>

  <!-- Header library starts here -->
  <?php include("assets/inc/header-library.php"); ?>
</head>
<body>

  <!-- Header section starts here -->
  <?php include("assets/inc/mebubar.php"); ?>
  <section class="img-5 py-5">
    <div class="container text-center">
      <h1 class="text-white">Register</h1>
      <div class="d-flex align-items-center justify-content-center"><a href="index.php" class="text-white"><i class="bx bx-home"></i> <span>Home</span></a> <i class="bx bx-chevron-right text-secondary"></i> <span class="text-white">Register</span></div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          
        
            <img src="assets/img/vector-register.jpg" class="img-fluid rounded">
         
        </div>
        <div class="col-md-6">
         <h2 class="fw-bold">Welcome Back ! Please Register Your Account</h2>

        <form class="p-4 mt-4 shadow mx-4 bg-light rounded">
               <div class="input-group mb-3">
                <span class="input-group-text" for="name"> <i class="bx bx-user"></i></span>
                <input type="text" class="form-control" placeholder="Full name" id="name" required />
              </div>
               <div class="input-group mb-3">
                <span class="input-group-text" for="email"> <i class="bx bx-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Enter your mail" id="email" required />
              </div>
               <div class="input-group mb-3">
                <span class="input-group-text" for="phone"> <i class="bx bx-phone"></i></span>
                <input type="text" class="form-control" placeholder="Phone no." id="phone" required />
              </div>
               <div class="input-group mb-3">
                <span class="input-group-text" for="password"> <i class="bx bx-lock"></i></span>
                <input type="password" class="form-control" placeholder="Enter your Password" id="password" required />
              </div>
               <div class="input-group mt-4 text-end">
                <button class="btn btn-dark btn-lg px-5 text-end d-inline-flex align-items-center" type="submit" name="Submit"> <span>Create Your Account</span> <i class="bx bx-send"></i></button>
              </div>


             </form>
              <p class="mt-4 text-center">Already have an account? <a href="login.php">Login </a></p>

        </div>
        
      </div>
    </div>
  </section>
  
  

  <!-- Footer section starts here -->
  <?php include("assets/inc/footer.php"); ?>

  <!-- Footer library starts here -->
  <?php include("assets/inc/footer-library.php"); ?>
</body>
</html>