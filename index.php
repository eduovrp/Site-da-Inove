<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inove Comunicação - Propaganda e Marketing">
    <meta name="author" content="Eduardo Lopes">

    <title>Inove Comunicação - Propaganda e Marketing</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/jquery-2.1.3.min.js"></script> <!--jQuery-->
    <script src="js/lightbox.js"></script>
    <script src="src/jquery.BlackAndWhite.js"></script>


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!--// Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-logo">
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" class="img-responsive" alt="" /></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Soluções</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Cases</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Clientes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <section id="page-top" class="section-header">
             <div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. -->
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
               <?php 
               require 'functions.php';
               $imagens = select_banner();
               foreach($imagens as $imagem):
                ?>
                <div>
                    <img u="image" src="<?= $imagem['url']; ?>" />
                </div>
            <?php endforeach; ?>
            </div>

            <?php
                include"css/slider-config1.css";
             ?>

            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
            </div>

            <?php
                include"css/slider-config2.css";
             ?>
                        <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
        </div>
        <!-- Jssor Slider End -->
    </div>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <?php
        include"js/slide-config.js";
     ?>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                    <div class="line-left">
                    <div class="line-right">
                    Soluções
                    </h2>
                    <h3 class="section-subheading text-muted">Subtitulo</h3>
                </div>
            </div>
            <div class="row text-center">
                  <div class="col-md-4">
                  <span class="fa-stack fa-5x">
            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
            </span>
                 <h3 class="service-heading">TITULO</h3>
                 <h5 class="subheading">Sub-titulo</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                  <div class="col-md-4">
                  <span class="fa-stack fa-5x">
            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
            </span>
                 <h3 class="service-heading">TITULO</h3>
                 <h5 class="subheading">Subtitulo</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                 <div class="col-md-4">
                     <span class="fa-stack fa-5x">
            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                    </span>
                 <h3 class="service-heading">TITULO</h3>
                 <h5 class="subheading">Subtitulo</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                    <div class="line-left">
                    <div class="line-right">
                    Cases
                    </h2>
                    <h3 class="section-subheading text-muted"></h3>
            </div>
            <ul id="wrapper">
        <li class="smart1">
            <a class="example-image-link bwWrapper" href="files/big-img1.jpg" data-lightbox="example-1">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="smart2">
            <a class="example-image-link bwWrapper" href="files/big-img2.jpg" data-lightbox="example-2">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="smart3">
            <a class="example-image-link bwWrapper" href="files/big-img3.jpg" data-lightbox="example-3">
                <img class="example-image-lg" src="files/big-img.jpg" width="304" height="300" />
            </a>
        </li>
        <li class="smart4">
            <a class="example-image-link bwWrapper" href="files/big-img4.jpg" data-lightbox="example-4">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="smart5">
            <a class="example-image-link bwWrapper" href="files/big-img5.jpg" data-lightbox="example-5">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="last-6">
             <a class="example-image-link bwWrapper" href="files/big-img6.jpg" data-lightbox="example-6">
                <img class="example-image-lg" src="files/big-img.jpg" width="304" height="300" />
            </a>
        </li>
        <li class="last-7">
            <a class="example-image-link bwWrapper" href="files/big-img7.jpg" data-lightbox="example-7">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="last-8">
            <a class="example-image-link bwWrapper" href="files/big-img8.jpg" data-lightbox="example-8">
                <img class="example-image-sm" src="files/big-img.jpg" width="150" height="150" />
            </a>
        </li>
        <li class="last-9">
            <a class="example-image-link bwWrapper" href="files/big-img9.jpg" data-lightbox="example-9">
                <img class="example-image-lg" src="files/big-img.jpg" width="304" height="300" />
            </a>
        </li>
    </ul>
         </div>
      </div>
    </section>

     <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                     <div class="line-left">
                        <div class="line-right">
                            Clientes
                        </div>
                     </div>
                    </h2>
                    <h3 class="section-subheading text-muted"></h3>
                <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "dots": true}'>
                <?php 
                $logos = select_logos();
                foreach($logos as $logo):
                 ?>
                    <div class="multiple"> <img src="<?= $logo['url']; ?>" class="img-responsive img-centered" alt=""></div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl pull-right">Fale Conosco</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <!--Contatos e Footer Section-->
          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h6>Um pouco sobre nós</h6>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                            ante. Donec eu libero sit amet quam egestas semper.
                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            Quisque sit amet est et sapien ullamcorper pharetra.
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h6>Sobre a Empresa</h6>
                        <ul>
                            <li>
                                <a href="#">Quem Somos</a>
                            </li>
                            <li>
                                <a href="#">Serviços</a>
                            </li>
                            <li>
                                <a href="#">Contato</a>
                            </li>
                            <li>
                                <a href="#">Link</a>
                            </li>
                            <li>
                                <a href="#">Zelda</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h6>Redes Sociais</h6>
                        <ul>
                            <li><a href="#" title="">Facebook</a></li>
                            <li><a href="#" title="">Twitter</a></li>
                            <li><a href="#" title="">Instagram</a></li>
                            <li><a href="#" title="">Linkedin</a></li>
                            <li><a href="#" title="">Google Plus</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-info">
                        <h6>Contato & Localização</h6>
                        <p>
                            Pellentesque habitant morbi tristique
                            senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                        <p class="social c-details">
                            <span>Email:</span> contato@sitedainove.com.br<br >
                            <span>Fone:</span>17 3631-0000
                        </p>
                        <p class="c-details">
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copyright">
                        <p>
                            Inove Comunicação - Design & Marketing Digital
                            <!-- <a href="http://www.agenciatribo.com/" title="PetCare wordpress theme">
                                Site desenvolvido por Agência Tribo
                            </a> -->
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- End -->
            <script>
    $('.bwWrapper').BlackAndWhite({
        hoverEffect:true,
        webworkerPath: 'src/',
        intensity:1,
        onImageReady:function(img){
            $(img).parent().animate({
                opacity:1
            });
        }
    });
    </script>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!--Slick Script -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

</body>

</html>
