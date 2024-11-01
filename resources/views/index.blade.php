<!--
=========================================================
* Material Kit 3 - v3.1.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

@include('head')
<style>
  body {
    overflow-x: hidden; /* Prevent horizontal scroll */
    overflow-y: auto;   /* Allow vertical scroll if necessary */
  }

  /* Animation for card hover effect */
  .move-on-hover {
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .move-on-hover:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  }
  .info-horizontal {
    transition: background-color 0.3s ease; /* Smooth transition */
  }

  .info-horizontal:hover {
    background-image: linear-gradient(45deg, rgba(255, 0, 150, 0.7), rgba(0, 204, 255, 0.7)); /* Custom gradient */
    color: white; /* Ensure text is readable */
  }
</style>

</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      @include('navbar')
<!-- End Navbar -->
</div>
</div>
</div>


  

    














<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./home/assets/img/edu-bg.jpg')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white font-weight-black pt-3 mt-n5">Empower Your Learning Journey</h1>
          <p class="lead text-white mt-3">Discover a world of knowledge with our dual-language educational platform. <br/> Join thousands of learners in enhancing your skills and achieving your goals.</p>
        </div>
      </div>
    </div>
  </div>
</header>


<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-dark"><span id="state1" countTo="500">0</span>+</h1>
                <h5 class="mt-3">Courses Available</h5>
                <p class="text-sm font-weight-normal">Explore a diverse range of courses tailored to enhance your skills.</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-dark"><span id="state2" countTo="3000">0</span>+</h1>
                <h5 class="mt-3">Students Enrolled</h5>
                <p class="text-sm font-weight-normal">Join thousands of learners who are expanding their knowledge with us.</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-dark" id="state3" countTo="100">0</h1>
                <h5 class="mt-3">Certified Instructors</h5>
                <p class="text-sm font-weight-normal">Learn from experienced professionals who are dedicated to your success.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  




  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center my-sm-5 mt-5">
          <div class="col-lg-8 mx-auto">
            <span class="badge bg-success mb-3">Boost Learning</span>
            <h2>Explore Our Courses</h2>
            <p class="lead">Discover a variety of courses designed to enhance your skills and knowledge.</p>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12">
          <div class="row mt-4">
            <div class="col-md-4 mb-4">
              <a href="./courses/course1.html">
                <div class="card move-on-hover">
                  <img class="w-100" src="https://via.placeholder.com/300" alt="course1">
                  <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">Brief description of Course 1 that highlights its key features and benefits.</p>
                  </div>
                </div>
              </a>
            </div>
  
            <div class="col-md-4 mb-4">
              <a href="./courses/course2.html">
                <div class="card move-on-hover">
                  <img class="w-100" src="https://via.placeholder.com/300" alt="course2">
                  <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Brief description of Course 2 that highlights its key features and benefits.</p>
                  </div>
                </div>
              </a>
            </div>
  
            <div class="col-md-4 mb-4">
              <a href="./courses/course3.html">
                <div class="card move-on-hover">
                  <img class="w-100" src="https://via.placeholder.com/300" alt="course3">
                  <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Brief description of Course 3 that highlights its key features and benefits.</p>
                  </div>
                </div>
              </a>
            </div>
  
            <div class="col-md-4 mb-4">
              <a href="./courses/course4.html">
                <div class="card move-on-hover">
                  <img class="w-100" src="https://via.placeholder.com/300" alt="course4">
                  <div class="card-body">
                    <h5 class="card-title">Course Title 4</h5>
                    <p class="card-text">Brief description of Course 4 that highlights its key features and benefits.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="live-videos">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-lg-8 mx-auto">
          <span class="badge bg-success mb-3">Live Now</span>
          <h2>Current Live Videos</h2>
          <p class="lead">Join our exciting live sessions and interact with our expert hosts!</p>
        </div>
      </div>
  
      <div class="row">
        <!-- Video Card 1 -->
        <div class="col-md-4 mb-4">
          <a href="https://www.youtube.com/watch?v=example1" target="_blank">
            <div class="card move-on-hover shadow-lg">
              <img class="card-img-top" src="https://via.placeholder.com/400x200" alt="Live Video 1">
              <div class="card-body">
                <h5 class="card-title">Live Video Title 1</h5>
                <p class="card-text">Brief description of the live video that captures viewer interest.</p>
                <span class="badge bg-warning">Watch Now</span>
              </div>
            </div>
          </a>
        </div>
  
        <!-- Video Card 2 -->
        <div class="col-md-4 mb-4">
          <a href="https://www.youtube.com/watch?v=example2" target="_blank">
            <div class="card move-on-hover shadow-lg">
              <img class="card-img-top" src="https://via.placeholder.com/400x200" alt="Live Video 2">
              <div class="card-body">
                <h5 class="card-title">Live Video Title 2</h5>
                <p class="card-text">Brief description of the live video that captures viewer interest.</p>
                <span class="badge bg-warning">Watch Now</span>
              </div>
            </div>
          </a>
        </div>
  
        <!-- Video Card 3 -->
        <div class="col-md-4 mb-4">
          <a href="https://www.youtube.com/watch?v=example3" target="_blank">
            <div class="card move-on-hover shadow-lg">
              <img class="card-img-top" src="https://via.placeholder.com/400x200" alt="Live Video 3">
              <div class="card-body">
                <h5 class="card-title">Live Video Title 3</h5>
                <p class="card-text">Brief description of the live video that captures viewer interest.</p>
                <span class="badge bg-warning">Watch Now</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  

<!-- -------- START Content Presentation Docs ------- -->
<div class="container mt-sm-5">
  <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('./home/assets/img/certificate-bg.png');" loading="lazy">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ms-lg-5">
          <h4 class="text-white">Elevate Your Skills</h4>
          <h1 class="text-white">Professional Certificate Program</h1>
          <p class="lead text-white opacity-8">Our Professional Certificate Program is designed to enhance your expertise in various fields. Gain practical knowledge, and industry insights, and demonstrate your capabilities with a recognized certification.</p>
          <p class="text-white opacity-8">Whether you are looking to advance in your current role or pivot to a new career, our program provides the essential tools and skills needed to succeed in today’s competitive landscape.</p>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
            Explore Certificate Options
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="info-horizontal bg-gradient-dark border-radius-xl d-block d-md-flex p-4 flex-column">
        <img src="https://via.placeholder.com/300" alt="Certificate Image 1" class="img-fluid mb-3">
        <h5 class="text-white">Getting Started</h5>
        <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
          Let's start
          <i class="fas fa-arrow-right text-sm ms-1"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 flex-column h-100">
        <img src="https://via.placeholder.com/300" alt="Certificate Image 2" class="img-fluid mb-3">
        <h5>Plugins</h5>
        <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit" class="text-primary icon-move-right">
          Read more
          <i class="fas fa-arrow-right text-sm ms-1"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-4 mt-lg-0 mt-4">
      <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 flex-column">
        <img src="https://via.placeholder.com/300" alt="Certificate Image 3" class="img-fluid mb-3">
        <h5>Utility Classes</h5>
        <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
          Read more
          <i class="fas fa-arrow-right text-sm ms-1"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- -------- END Content Presentation Docs ------- -->

<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="mb-0 font-weight-bolder">Trusted by over</h2>
        <h2 class="text-gradient font-weight-bolder text-success mb-3">2,603,000+ learners</h2>
        <p class="lead">Educational institutions, professionals, and lifelong learners choose our platform for its exceptional resources and support.</p>
      </div>
    </div>
    <div class="row mt-6">
      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Alice Johnson</h6>
                <div class="stats">
                  <i class="far fa-clock"></i> 2 days ago
                </div>
              </div>
            </div>
            <p class="mt-4">"This platform transformed my learning experience. The courses are well-structured, and the resources provided are invaluable!"</p>
            <div class="rating mt-3">
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 ms-md-auto">
        <div class="card bg-dark">
          <div class="card-body">
            <div class="author align-items-center">
              <div class="name">
                <h6 class="text-white mb-0 font-weight-bolder">James Smith</h6>
                <div class="stats text-white">
                  <i class="far fa-clock"></i> 1 week ago
                </div>
              </div>
            </div>
            <p class="mt-4 text-white">"I found the courses to be very engaging and informative. As a working professional, the flexibility to learn at my own pace is fantastic!"</p>
            <div class="rating mt-3">
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
              <i class="fas fa-star text-white"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Maria Garcia</h6>
                <div class="stats">
                  <i class="far fa-clock"></i> 3 weeks ago
                </div>
              </div>
            </div>
            <p class="mt-4">"Great educational platform! The interactive features helped me retain information better. I highly recommend it for anyone looking to enhance their skills."</p>
            <div class="rating mt-3">
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
              <i class="fas fa-star text-success"></i>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr class="horizontal dark my-5">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-6 ms-auto">
        <img class="w-100 opacity-6" src="./home/assets/img/logos/gray-logos/logo-university.svg" alt="University Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img class="w-100 opacity-6" src="./home/assets/img/logos/gray-logos/logo-corporate.svg" alt="Corporate Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6">
        <img class="w-100 opacity-6" src="./home/assets/img/logos/gray-logos/logo-nonprofit.svg" alt="Nonprofit Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
        <img class="w-100 opacity-6" src="./home/assets/img/logos/gray-logos/logo-government.svg" alt="Government Logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
        <img class="w-100 opacity-6" src="./home/assets/img/logos/gray-logos/logo-startup.svg" alt="Startup Logo">
      </div>
    </div>
  </div>
</section>



<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-12 my-auto">
        <h3 class="text-gradient text-dark mb-0">Enjoyed the Course?</h3>
        <h3>Explore More Learning Opportunities!</h3>
        <p class="pe-md-5 mb-4">
          Discover our extensive range of educational resources designed for aspiring learners and seasoned professionals alike. Check out our latest courses on various subjects and skill levels.
          
          Whether you're looking to enhance your skills or start from scratch, our platform offers a variety of interactive content, including video lectures, quizzes, and hands-on projects, all aimed at helping you succeed.
        </p>
        <div class="github-buttons">
          <a href="https://your-education-platform.com/courses" target="_blank" class="btn bg-gradient-dark mb-5 mb-sm-0">View Courses</a>
          <div class="github-button">
            <span></span>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-12 my-auto">
        <a href="https://your-education-platform.com/courses">
          <img class="w-100 border-radius-lg shadow-lg" src="https://your-education-platform.com/assets/img/courses-thumbnail.jpg" alt="Course Image">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 ms-auto">
        <h4 class="mb-1">Thank You for Learning with Us!</h4>
        <p class="lead mb-0">We strive to provide the best educational experience.</p>
      </div>
      <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
        <a href="https://twitter.com/intent/tweet?text=Check%20out%20the%20latest%20courses%20from%20@YourEducationPlatform%20%23onlinelearning%20%23education&url=https%3A%2F%2Fyour-education-platform.com%2Fcourses" class="btn btn-twitter mb-0 me-2" target="_blank">
          <i class="fab fa-twitter me-1"></i> Tweet
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://your-education-platform.com/courses" class="btn btn-facebook mb-0 me-2" target="_blank">
          <i class="fab fa-facebook-square me-1"></i> Share
        </a>
        <a href="https://www.pinterest.com/pin/create/button/?url=https://your-education-platform.com/courses" class="btn btn-pinterest mb-0 me-2" target="_blank">
          <i class="fab fa-pinterest me-1"></i> Pin it
        </a>
      </div>
    </div>
  </div>
</div>

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

</div>


  

<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 ms-auto">
        <div>
          <a href="#">
            <img src="./home/assets/img/l.png" class="mb-3 footer-logo" alt="abeikra">
          </a>
          <h6 class="font-weight-bolder mb-4">abeikra platform</h6>
          <p class="text-dark mb-0">All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Abeikra.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div>
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div>
          <h6 class="text-sm">Legal</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Terms & Conditions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h6 class="text-sm">Follow Us</h6>
          <ul class="d-flex justify-content-center nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.facebook.com/" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://twitter.com/" target="_blank">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://github.com/" target="_blank">
                <i class="fab fa-github text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.youtube.com/channel/" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>



  

  
  















<!--   Core JS Files   -->
<script src="./home/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./home/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./home/assets/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./home/assets/js/plugins/countup.min.js"></script>





<script src="./home/assets/js/plugins/choices.min.js"></script>



<script src="./home/assets/js/plugins/prism.min.js"></script>
<script src="./home/assets/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./home/assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./home/assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./home/assets/js/plugins/choices.min.js"></script>
















<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./home/assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>


























</body>

</html>
