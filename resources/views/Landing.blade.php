@extends('layout')

@section('title', 'landing')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/images/landStyle.css') }}">

    <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
    rel="stylesheet">
 
<!-- Add Bootstrap Icons CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/dist/css/bootstrap-icons.min.css" rel="stylesheet">

 <!-- JavaScript code -->
  <script src="C:\Users\wasan\Desktop\Myproj\public\assets\js\main.js"></script>

</head>
<body>
    @section('header')
    <header>
        <nav>
            <ul>
                <!-- Navigation menu items -->
            </ul>
        </nav>
    </header>
    @show
    
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to Radeef</h1>
      <h2>Radeef in Arabic means a follower, someone who follows you and comes behind you.</h2>
      <img src="assets\images\radeef.jpg" alt="Radeeef" data-aos="zoom-out" style="width: 700px;" data-aos-delay="80">
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

<!-- ======= Why Section ======= -->
<section id="why" class="padd-section text-center">
  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2>Why Radeef?</h2>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="assets/images/Secure.png" alt="Secure" class="feature-image">
          <h4>Secured</h4>
          <p>Discover the value of mental health support tailored to your unique needs</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="assets/images/All.png" alt="All" class="feature-image">
          <h4>All in one</h4>
          <p>Find out how we can help you improve your mental health and wellbeing</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="assets/images/easy.png" alt="Easy to use" class="feature-image">
          <h4>Easy to use</h4>
          <p>Experience the benefits of personalized mental health support in clear, simple language</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Why Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="padd-section text-center">
@auth
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h1>Services </h1>
          <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

            <img src="assets/images/todo.png" alt="img" style="max-width: 15%; height: auto;">
                          <h4>To-Do list</h4>
              <p>a tool for organizing activities and tasks that helps you arrange your priorities and complete your
                tasks effectively.</p>
              <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg></a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

            <img src="assets/images/note.png" alt="img" style="max-width: 15%; height: auto;">
              <h4>Notes</h4>
              <p>a tool for recording important ideas and information. They help you remember details and organize your
                thoughts better.</p>
              <a href="/note"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg></a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

            <img src="assets/images/progress.png" alt="img" style="max-width: 15%; height: auto;">
                          <h4>Task Progress</h4>
              <p>tracking the implementation of work and activities. It helps you know the level of achievement and plan
                the next steps.</p>
              <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg></a>

            </div>
          </div>

        </div>
      </div>
@endauth
    </section><!-- End Services Section -->
 
 <!-- ======= About us Section ======= -->

<section id="about" class="padd-section text-center">

<div class="container" data-aos="fade-up">
  <div class="section-title text-center">
    <h2>About Us</h2>
   
</div>
<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

<div class="col-md-10 col-lg-10">
  <div class="feature-block">
    
    <p>
      We are a group of passionate students from Umm Al-Qura University, including Joud Al-Baqmi, Dana Al Ramadani, and Wasan Al-Matrafi, who collaborated during their training period at Wadi Makkah Knowledge Company to create Radeef. This innovative project addresses challenges in information systems by enhancing efficiency in information management, analysis, and retrieval. Radeef is the result of extensive research, rigorous testing, and a deep understanding of industry needs. The team aims to make a positive impact by providing efficient solutions and believes that Radeef has the potential to revolutionize information handling, empowering businesses and individuals to make informed decisions.
      </p>
  </div>
</div>
</div>

<!-- End About us section  -->

 <!-- ======= Team Section ======= -->
 <section id="team" class="padd-section text-center">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <h2>Team Members</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="team-block bottom">
            <img src="assets/images/danah.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://x.com/d__a31?s=21"><i class="bi bi-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/danah-alramadani-58b435295?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a></li>
              </ul>
              <span>Developer</span>
              <h4>Danah Al ramadani</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-block bottom">
            <img src="assets/images/jood.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://www.linkedin.com/in/jood-albogami-6454772b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a></li>
              </ul>
              <span>Developer</span>
              <h4>Jood AL Bogami</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="team-block bottom">
            <img src="assets/images/wasan.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://www.linkedin.com/in/wasan-mohamd?trk=contact-info"><i class="bi bi-linkedin"></i></a></li>
              </ul>
              <span>Developer</span>
              <h4>Wasan Al matrafi</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->


  

</section><!-- End Screenshots Section -->




    <section>
        <!-- Rest of the sections and content -->
    </section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>technical support</h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">

              <div class="email">
              <i class="bi bi-envelope"></i>
                <p>Radeef@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+966 560000000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
  <div class="form">
    <form action="/submit-form" method="post" role="form" class="php-email-form">
      <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
      </div>
      <div class="form-group mt-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>
</div>

    </section><!-- End Contact Section -->


    <!-- Add Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!--  
@section('footer')
    <footer>
        <p>Follow us</p> -->
        <!-- Social media links or other footer content -->
    <!-- </footer> -->
    <!-- @show -->
<!-- <footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-4">
        <div class="footer-logo">

          <img src="assets\radeeff.png" alt="Radeef" style="width: 300px;">

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Call Us</h4>
            <i class="bi bi-phone"></i>
            <p>+966 560000000</p>
          
        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Send us a message</h4>
          <i class="bi bi-envelope"></i>
          <p>Radeef@example.com</p>

        </div>
      </div>

      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Follow us</h4>

          <ul class="list-unstyled">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div class="copyrights">
    <div class="container">
      <div class="credits">
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
      
      </div>
    </div>
  </div> -->
  @include('footer')
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
</body>

</html>
@endsection
