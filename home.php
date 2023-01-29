<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  img {
      height: 350px;
      width: 100%;
  }

</style>
</head>
<body>
  <nav class="navbar fixed-top" style="height: 100px; background-color:#1f1d1e;">
    <div class="container-fluid">
      <ul class="nav d-flex justify-content-center mx-auto">
        <li class="nav-item">
          <a class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="command.html">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>
  <span class="align-middle text-center bg-image">
      <h1 class="text-black" style="margin-top:250px; font-size:50px">CALAPAN CHU ENG SCHOOL.</h1>
      <p style="font-size:25px;" class="fw-light" >Founded in 1930, rebuilt in 1985 with the new building constructed on 2017</p>
  </span>
  <div class="h-100 d-flex align-items-center" style="margin-top:10rem; background-color:#E8E2E2; min-height: 25vh">
    <span class="align-middle container">
      <h1 class="text-center">OUR MISSION</h1>
      <p style="font-size:30px;" class="fw-light text-center">calapan chu eng school is recognized to produce unwavering
        and persevering world changers who are armored with the 
        word of god and anchored with high quality education</p>
    </span>
  </div>
    <div class="border container text-center" style="margin-top:5rem; margin-bottom:10rem;">
      <div class="row">
        <div class="col">
          <h3 class=fw-light> GALLERY </h3>

          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
        <div class="col">
          <h3 class=fw-light>ANNOUNCEMENT</h3>

        </div>
      </div>
    </div>

    <footer class="bg-dark text-light">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-4">
            <h4 class="mb-4">About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna eget euismod tincidunt, velit ipsum congue velit, quis bibendum velit nibh vel augue.</p>
          </div>
          <div class="col-md-4">
            <h4 class="mb-4">Contact Us</h4>
            <ul class="list-unstyled">
              <li>Address: 1234 Street Name</li>
              <li>City, State ZIP</li>
              <li>Phone: (123) 456-7890</li>
              <li>Email: info@yourwebsite.com</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="mb-4">Follow Us</h4>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <hr class="my-4">
        <p class="text-center">Copyright &copy; Your Website</p>
      </div>
    </footer>

</body>
</html>