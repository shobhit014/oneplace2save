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
      <h1 class="text-white">Contact us</h1>
      <div class="d-flex align-items-center justify-content-center"><a href="index.php" class="text-white"><i class="bx bx-home"></i> <span>Home</span></a> <i class="bx bx-chevron-right text-secondary"></i> <span class="text-white">Contact us</span></div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
         <div class="card shadow border bg-light">
           <div class="card-body">
             <h2>Send us a message</h2>

             <form class="p-4 mt-4">
               <div class="input-group mb-3">
                <span class="input-group-text" for="name"> <i class="bx bx-user"></i></span>
                <input type="text" class="form-control" placeholder="Name" id="name" required />
              </div>
               <div class="input-group mb-3">
                <span class="input-group-text" for="email"> <i class="bx bx-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email" id="email" required />
              </div>
               <div class="input-group mb-3">
                <span class="input-group-text" for="phone"> <i class="bx bx-phone"></i></span>
                <input type="number" class="form-control" placeholder="Phon no." id="phone" required />
              </div>
               <div class="input-group mb-3">
               <textarea class="form-control" placeholder="Message" rows="5" id="message">
                 
               </textarea>
              </div>

              <div class="input-group mt-4 text-end">
                <button class="btn btn-dark btn-lg px-5 text-end d-inline-flex align-items-center" type="submit" name="Submit">SUBMIT <span></span> <i class="bx bx-send"></i></button>
              </div>
             </form>
           </div>
         </div>
        </div>
        <div class="col-md-6">
          
          <div class="position-relative">
            <img src="assets/img/img-1.jpeg" class="img-fluid rounded">
         
          <div class="img-4 mx-4 p-4 shadow mt-n5 position-absolute rounded">
             <ul type="none" class="p-0 m-0 footer-content">
          <li><a href="#" class="d-flex align-items-center"><i class="bx bx-map bx-sm align-self-start"></i><span class="small">Oneplace2save Limited
Unit 16 Bell Fram Ind Park
Nuthampstead
Herts SG8 8ND
</span></a></li>
           <li><a href="#" class="d-flex align-items-center mt-2"><i class="bx bx-phone bx-sm"></i><span>02075159347</span></a></li>
            <li><a href="#" class="d-flex align-items-center mt-2"><i class="bx bx-envelope bx-sm"></i><span>info@oneplace2save.com</span></a></li>
            
        </ul>
          </div>
           </div>
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