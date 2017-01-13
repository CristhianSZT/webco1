<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebCo - Digitaliza tu negocio</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('index/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('index/css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('index/css/half.css') }}" rel="stylesheet">
    <link href="{{ asset('index/css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ asset('index/css/stylish-portfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('index/css/logo-nav.css') }}" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="{{ asset('index/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('index/img/WEBCO1.png') }}" alt="" width="80">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="color: #1DA0F2;">
                    <li>
                        <a href="about.html">Que hacemos</a>
                    </li>
                    <li>
                        <a href="services.html">Diagnóstico online</a>
                    </li>
                    <li>
                        <a href="services.html">Plan digital online</a>
                    </li>
                    <li>
                        <a href="services.html">Consultoria offline</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    </li>
                    @else
                    <li><a href="/admin">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('{{ asset('index/img/m11.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h3>Internet hoy es el medio más importante para hacer negocios.</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ asset('index/img/m12.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h3>Digitalizar tu negocio de  forma  adecuada y exitosa, es posible.</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ asset('index/img/m13.jpg') }}');"></div>
                <div class="carousel-caption">
                    <h3>WEBCO te apoya en la transformación digital de tu negocio.</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

        <!-- /.container -->
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
            <h1 class="text-center">¡Digitalizar tu negocio de  forma  adecuada y exitosa, es posible!</h1>
            <a href="#"><p class="text-center">Saber más</p></a>
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">1. Conoce cómo está tu negocio hoy y su potencial en el mundo digital</h2>
                    <p class="lead"><a target="_blank" href="http://join.deathtothestockphoto.com/">REALIZA DIAGNOSTICO ON LINE</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{ asset('index/img/M2- 1.jpg') }}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">2. Diseñemos el Plan digital para tu negocio</h2>
                    <p class="lead"><a target="_blank" href="http://www.psdcovers.com/">OBTÉN EL PLAN DIGITAL ON LINE</a></p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{ asset('index/img/M2 - 2.jpg') }}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">3. Implementemos procesos y operemos acciones digitales en tu empresa</h2>
                    <p class="lead"><a target="_blank" href="http://www.google.com/fonts">EJECUTA EL PLAN DIGITAL</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{ asset('index/img/M2 -3.jpg') }}" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>¿ATENCIÓN PERSONALIZADA PARA DIGITALIZAR TU NEGOCIO?</h3>
                    <a href="#" class="btn btn-lg btn-webco">CONTÁCTANOS!</a>
                    <!--<a href="#" class="btn btn-lg btn-dark"></a>-->
                    <h3>Nuestros especialistas WebCo te atenderán Off-line</h3>
                </div>
            </div>
        </div>
    </aside>

<br>
<br>

    <aside class="callout" style="background-image:url('{{ asset('index/img/M3 -1.jpg') }}');">
        <div class="text-vertical-center">
            <h2>Lo digital es un ecosistema de oportunidades para las empresas como la tuya <br>LIDERA EL CAMBIO, DIGITALIZA TU NEGOCIO!</h2>
        </div>
    </aside>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark2 btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('index/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('index/js/bootstrap.min.js') }}"></script>
    <script>
    $('.carousel').carousel({
        interval: 3500 //changes the speed
    })
    </script>
    <script>
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    </script>

</body>

</html>