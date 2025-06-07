<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")|{{("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
     
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route("public.home") }}">{{env("APP_NAME")}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route("public.home") }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  @section('content')

  @show
  <footer class="text-white pt-5 pb-4" style="background-color: #d10075;">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- Logo and Tagline -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Creamery</h5>
        <p>Your destination for delicious sweets and snacks. Taste happiness in every bite!</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">About Us</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Blog</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Contact</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Menu</a></p>
      </div>

      <!-- Help -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Help</h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">Payment Options</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Shipping Info</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">FAQ</a></p>
      </div>

      <!-- Newsletter -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Newsletter</h5>
        <form>
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Your email" required>
            <button class="btn btn-light text-danger fw-bold">Subscribe</button>
          </div>
        </form>
        <div class="mt-3">
          <a href="#"><i class="fab fa-facebook text-white me-3"></i></a>
          <a href="#"><i class="fab fa-instagram text-white me-3"></i></a>
          <a href="#"><i class="fab fa-whatsapp text-white me-3"></i></a>
        </div>
      </div>

    </div>

    <hr class="mb-4">

    <!-- Copyright -->
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p>© 2025 Creamery. All rights reserved. | Made with ❤️ for sweet lovers.</p>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">
          <img src="assets/visa.png" width="40" class="me-2">
          <img src="assets/mastercard.png" width="40" class="me-2">
          <img src="assets/paytm.png" width="40" class="me-2">
          <img src="assets/razorpay.png" width="40">
        </div>
      </div>
    </div>
  </div>
</footer>


  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>