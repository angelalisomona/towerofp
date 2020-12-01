<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?> - page</title>
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"   href="<?php echo e(asset('asset/css/style.css')); ?>">
        <link rel="images"   href="<?php echo e(asset('asset/images/')); ?>"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Bootstrap Dropdown Hover JS -->
                <script src="js/bootstrap-dropdownhover.min.js"></script>
      </head>
    
    <body>
    <div class="header">
            <?php $__env->startSection('header'); ?>
             <div class="wrapper">
         <header>
           
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  LOGO
               </div>
               <div class="menu">
                  <ul>
                     <li class="navbtn"><a href="#">Home</a></li>
                     <li>
                      <div class="dropdown">
                      <button class="dropbtn btn" type="button">Link 1</button>
                      <!-- <button class="dropbtn">try me</button> -->
                      <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                      </div>
                    </div>  
                     </li>
                     <li class="navbtn"><a href="#">Blog</a></li>
                     <li>
                      <div class="dropdown">
                      <button class="dropbtn btn" type="button">Link 2</button>
                      <!-- <button class="dropbtn">try me</button> -->
                      <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                      </div>
                    </div>  
                     </li>

                     <li>
                     <!-- <a href="#" class="btn btn-default" role="button">Contact</a> -->
                     <button type="button" class="btn btn-info">MAP</button>
                      </li>
                     <li>
                     <a href="#" class="btn purplebtn" role="button">LOGIN PORTAL TOP</a>
                     </li>
                  </ul>
</nav>

         </header>
         <script>
           
                    $(document).ready(function() {
                        $(".menu-icon").on("click", function() {
                              $("nav ul").toggleClass("showing");
                        });
                  });

                  // Scrolling Effect

                  $(window).on("scroll", function() {
                        if($(window).scrollTop()) {
                              $('nav').addClass('black');
                        }

                        else {
                              $('nav').removeClass('black');
                        }
                  })
      </script> 
                        <?php echo $__env->yieldSection(); ?>
                      <div class="content">
                        <?php $__env->startSection('content'); ?>
                        <?php echo $__env->yieldSection(); ?>
                              
               </div>
<!-- footer -->
          <!-- <nav class=" footer navbar sticky-bottom "> 
          <a class="navbar-brand" href="#">Fixed bottom</a> -->
          
<!-- Footer -->
<footer class="page-footer font-small blue pt-4 sticky-bottom">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left navbar-brand">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h6 class="text-uppercase">Footer Content</h6>
        <p>Find us on all the following social media platforms listed below.</p>
        <div class="container">

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1">
      <i class="fa fa-facebook"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-tw mx-1">
      <i class="fa fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-gplus mx-1">
      <i class="fa fa-instagram"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-li mx-1">
      <i class="fa fa-skype"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a class="btn-floating btn-dribbble mx-1">
      <i class="fa fa-whatsapp"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->

</div>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h6 class="text-uppercase">Prayer lines</h6>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h6 class="text-uppercase">Activities</h6>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class ="text-center">
    <a href="https://mdbootstrap.com/"> Tower of Power copyright @2020</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views/layout.blade.php ENDPATH**/ ?>