<style>
    html {
        scroll-behavior: smooth;
    }

    body {
        animation: fadeInAnimation ease 3s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>

    <!-- FAVICON -->
    <link href="<?= base_url(); ?>/users/img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/users/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/users/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>/users/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff677759a9.js" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <link href="<?= base_url(); ?>/users/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/users/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="<?= base_url(); ?>/users/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/users/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="<?= base_url(); ?>/users/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>

    <?= $this->include('LayoutUser/navbar'); ?>
    <?= $this->renderSection('konten'); ?>



    <footer class="footer section section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
                    <!-- About -->
                    <div class="block about">
                        <!-- footer logo -->
                        <h2 style="color: white;">E-PERPUS</h2>
                        <!-- description -->
                        <p class="alt-color">Satu-satunya perpustkaan online dengan pelayanan terbaik di Indoensia</p>
                    </div>
                </div>
                <!-- Link list -->
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="block">
                        <h4>Kelompok 2 Backend</h4>
                        <ul>
                            <li><a href="#">Dicky Mario Lumbantobing</a></li>
                            <li><a href="#">Hemas Woro Pramesti</a></li>
                            <li><a href="#">Jovian Nathaniel Ulhaq</a></li>
                            <li><a href="#">Muhammad Azhar Ibnu Wiguna</a></li>

                        </ul>
                    </div>
                </div>
                <!-- Link list -->

                <!-- Promotion -->
                <div class="col-lg-4 col-md-7">


                </div>
            </div>
        </div>
        <!-- Container End -->
    </footer>
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <!-- Copyright -->
                    <div class="copyright">
                        <p>Copyright © <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>. Kelompok 2 TI B </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container End -->
        <!-- To Top -->
        <div class="top-to">
            <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
    </footer>

    <!-- JAVASCRIPTS -->
    <script src="<?= base_url(); ?>/users/plugins/jQuery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/bootstrap/js/bootstrap-slider.js"></script>
    <!-- tether js -->
    <script src="<?= base_url(); ?>/users/plugins/tether/js/tether.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/raty/jquery.raty-fa.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?= base_url(); ?>/users/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <!-- google map -->
    <script src="<?= base_url(); ?>/users/https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="<?= base_url(); ?>/users/plugins/google-map/gmap.js"></script>
    <script src="<?= base_url(); ?>/users/js/script.js"></script>


</body>

</html>