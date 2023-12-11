<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Penerima Bantuan PKH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="{{asset('template/')}}/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="{{asset('template/')}}/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template/')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('template/')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/')}}/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    @include('layout.v_nav')
    <!-- Navbar End -->

    <!-- Header Start -->
    @yield('content')

    <!-- Blog End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
      >
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#">Your Site Name</a>.
          All Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed by
          <a class="text-primary font-weight-bold" href="https://htmlcodex.com"
            >HTML Codex</a
          >
          <br />Distributed By:
          <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template/')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('template/')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('template/')}}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('template/')}}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('template/')}}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('template/')}}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template/')}}/js/main.js"></script>
  </body>
</html>
