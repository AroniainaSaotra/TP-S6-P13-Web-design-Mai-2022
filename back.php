<?php
    include("forms/functions.php");
    $cas=getCas();
    $images=getImages();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rechauffement Climatique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
ß>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style ="background-color:#37517e;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="back.php">Rechauffement Climatique</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto" href="#liste">Liste des cas</a></li>
          <li><a class="nav-link scrollto" href="#nouveau">Actualites</a></li>
          <li><a class="nav-link scrollto" href="#cas">Nouveaux cas</a></li>
          <li><a class="getstarted scrollto" href="login.php">Deconnexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="liste" class="liste">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cas</h2>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<count($cas); $i++) { ?>
                    <tr>
                    <th scope="row" name="id"><?php echo $cas[$i]['id']; ?></th>
                    <td name="descri"><?php echo $cas[$i]['descri']; ?></td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Modifier</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" style="z-index:1;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modification des cas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <div class="form-group">
                                                <label for="">Continent</label>
                                                <input type="text" class="form-control" id="continent" name="continent">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <input type="text" class="form-control" id="description" name="description">
                                            </div>
                                            </br>
                                </div>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-dark">Modifier</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        </td>
                    <td><a href="suppressioncas.php?id=<?php echo $cas[$i]['id']?>"><button type="button" class="btn btn-success">Supprimer</button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>    
            </table>
            
            
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section id="nouveau" class="nouveau">
      <div class="section-title">
        <h2>Actualites</h2>
      </div>

      <div class="row content">
      
          <div class="col-lg-6" >
          
                <table class="table table-bordered" style="margin-left:40px;" >
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Images</th>
                            <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0; $i<count($images); $i++) { ?>
                            <tr>
                            <th scope="row" name="id"><?php echo $images[$i]['id']; ?></th>
                            <td name="descri"><img src="assets/img/<?php echo $images[$i]['img']; ?>" width="100" heigth="50" ></td>
                            <th scope="row" name="id"><?php echo $images[$i]['descri']; ?></th>
                            <td><a href="suppressionactu.php?id=<?php echo $images[$i]['id']?>"><button type="button" class="btn btn-success">Supprimer</button></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                </table>
          
          </div>
     
          <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="card" style="width: 70rem; margin-left:100px; margin-top:3px;" >
                    <form action="insertionactu.php" method="get">
                        <div class="card-body">
                            <div class="card-header"><h3>Ajout de nouvelles actualites</h3></div>
                                <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="text" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" id="description" name="description">
                                </div>
                                </br>
                                <div>
                                    <button type="submit" class="btn btn-dark">Ajouter</button>
                                </div>
                        </div>
                    </form>
                </div>
          </div>
      </div>

    </section>

    
    <section id="cas" class="cas">
      <div class="section-title">
        <h2>Nouveaux cas</h2>
      </div>

      <div class="card" style="width: 100rem; margin-left:350px; " >
        <form action="insertioncas.php" method="get">
                        <div class="card-body">
                                <div class="form-group">
                                        <label for="">Continent</label>
                                        <input type="text" class="form-control" id="continent" name="continent">
                                </div>
                                <div class="form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" id="description" name="description">
                                </div>
                                </br>
                                <div>
                                    <button type="submit" class="btn btn-dark">Ajouter</button>
                                </div>
                        </div>
        </form>
      </div>

    </section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>