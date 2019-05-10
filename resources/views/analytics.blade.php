<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daltons</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/tab-icon.png" rel="icon">
    <!--
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" media="all" rel="stylesheet">

    <!-- ---------------------------------------------------------------------------------- -->
    <!-- Analytics template links -->
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">

    <!-- ---------------------------------------------------------------------------------- -->
    <!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="js/analytics.js"></script>
    <script src="js/jquery.js"></script>





</head>

<body>

<!-- ............................................................ -->
<!--========================== Header ============================-->
<!-- ............................................................ -->

<header id="header" style="background-color: #060c22;">

    <div  id="logo" class="pull-left">
        <img class="navbar-brand" style="margin-left: 25%;" src="img/logo.png" alt="" title=""/>
    </div>

    <div class="container">
        <!--
        <div  id="logo" class="pull-left">
            <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <!--
            <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
        </div>
        -->

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="<?php echo url('/') ?>">Home</a></li>
                <li><a href="<?php echo url('articles') ?>">Articles</a></li>
                <li  class="menu-active"><a href="<?php echo url('analytics') ?>">Analytics</a></li>
                <li><a href="<?php echo url('test') ?>">Test</a></li>
                <li><a href="<?php echo url('about') ?>">About</a></li>
                <li><a href="<?php echo url('contact') ?>">Contact</a></li>
                <li  class="buy-tickets"><a href="https://play.google.com/store">Download App</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>

<!-- ............................................................ -->
<!-- #header -->
<!-- ............................................................ -->


<section style="margin-top: 10%;margin-right: 5%;margin-left: 5%">
    <div class="row">
        {{--<div class="col-lg-3 col-md-6 col-sm-12">--}}
            {{--<div class="card info-box-2">--}}
                {{--<div class="body">--}}
                    {{--<div class="icon">--}}
                        {{--<div class="chart chart-pie">30, 35, 25, 8</div>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<div class="text">Users</div>--}}
                        {{--<div class="number"><span class="number count-to" data-from="0" data-to="98" data-speed="2000" data-fresh-interval="700">{{ $users }}</span>%</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-3 col-md-6 col-sm-12">--}}
            {{--<div class="card info-box-2">--}}
                {{--<div class="body">--}}
                    {{--<div class="icon">--}}
                        {{--<div class="chart chart-bar"><img src="img/logo.png"/></div>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<div class="text">IMPRESSIONS</div>--}}
                        {{--<div class="number count-to" data-from="0" data-to="457512" data-speed="2000" data-fresh-interval="700">{{ $pets }}</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-3 col-md-6 col-sm-12">--}}
            {{--<div class="card info-box-2">--}}
                {{--<div class="body">--}}
                    {{--<div class="icon">--}}
                        {{--<span class="chart chart-line">9,4,6,5,6,4,7,3</span>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<div class="text">TOTAL SALES</div>--}}
                        {{--<div class="number">$<span class="number count-to" data-from="0" data-to="125543" data-speed="2000" data-fresh-interval="700">125543</span></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-3 col-md-6 col-sm-12">--}}
            {{--<div class="card info-box-2">--}}
                {{--<div class="body">--}}
                    {{--<div class="icon">--}}
                        {{--<div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--<div class="text">CURRENCY</div>--}}
                        {{--<div class="number">$<span class="number count-to" data-from="0" data-to="1063" data-speed="2000" data-fresh-interval="700">1063</span></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>
<section style="margin-right: 5%;margin-left: 5%">

    <div class="row clearfix">
        {{--<div class="col-xl-8 col-lg-12 col-md-12">--}}
            <div class="card">
                <div class="header">
                    <h2><strong>Monthly</strong> new Register Users</h2>

                </div>
                <div class="body">

                    {!! $chart->html() !!}

                    {!! Charts::scripts() !!}
                    {!! $chart->script() !!}


                    <div class="header">
                        <h2><strong>Test</strong> Results</h2>

                    </div>
                    <div class="row text-center">


                        {!! $c->html() !!}

                        {!! Charts::scripts() !!}
                        {!! $c->script() !!}



                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}
</section>

<!-- ............................................................ -->
<!-- ............................................................ -->
<!-- ............................................................

<section class="section-with-bg" style="margin-top: 20%">
    <div class="container wow fadeInUp">

{{--<p>@foreach($data as $item)--}}
        {{--ID: {{ $item['id'] }}<br>--}}
        {{--Firstname: {{ $item['firstName'] }}<br>--}}
        {{--genre: {{ $item['lastName'] }}<br>--}}

    {{--@endforeach--}}
</p>
    </div>
</section>
-->

<!-- ------------------------------------Main-----------------------------------
<main id="main" style="height: 500px">



</main>-->
<!-- ............................................................ -->
<!--========================== Footer ============================-->
<!-- ............................................................ -->



<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-6 footer-info">
                    <!--
                    <img src="img/logo.png" alt="daltons">
                    <a style="color: #fff; font-size: 36px; font-family: Raleway; padding: 30px;">Daltons</a>
                    -->
                    <a style="color: #fff; font-size: 36px; font-family: Raleway;">Perspective</a>
                    <p>An in-depth study of color-blind users of the mobile app
                        above-mentioned assistance in the field of research towards
                        the colorblindness phenomenon orevengenerate some solutions
                        for others  eye diseases.</p>
                </div>

                <!--
                 <div class="col-lg-3 col-md-6 footer-links">
                                <!--
                                    <h4>Useful Links</h4>
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                                        <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                                    </ul>

                  </div>
                 -->
                <div class="col-lg-3 col-md-6 footer-links"></div>


                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        I.Z. Chotrana II B.P. 160  <br>
                        technological pole El Ghazela <br>
                        Ariana 2083 - Tunisia <br>
                        <strong>Phone: </strong>  +216 96 041 995<br>
                        <strong>Email: </strong>  daltons.2019@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Daltons</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
            -->
            Designed by <a style="color:#ffda66;" href="https://bootstrapmade.com/">Gen6.1</a>
        </div>
    </div>
</footer>

<!-- ............................................................ -->
<!-- #footer -->
<!-- ............................................................ -->



<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/venobox/venobox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>

</html>
