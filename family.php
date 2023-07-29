<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>StarLight Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- header Start -->     
     <?php 
      include("include/header.php");
    ?>
    <!-- header End -->
    
      <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">

            <h1 class="display-3 text-white mb-3 animated slideInDown">Family and Company Functions</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Family and Company Functions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Family and Company Functions</h5>
                    <h4 class="mb-5">Decorations are available as per the following functions</h4>
                    <h6 class="mb-5">Decoration ideas are categorized so click on following button to see more...</h6>
                   
                    <a href="family1.php" class="btn btn-primary py-3 px-5">Family Functions</a>
                    <a href="company1.php" class="btn btn-primary py-3 px-5">Company Functions</a>

                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                             
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                               <a href="#bttn" class="btn btn-primary py-3 px-5">Book Your Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <?php 
      include("include/hiddenform.php");
    ?>

    <!-- Fact End -->

    <!-- Footer Start -->
    <?php 
      include("include/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>