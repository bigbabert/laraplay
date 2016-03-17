<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset('assets/site/img/favicon.ico')}}" />
<title>{{$frontends->title}}</title>
    {{ HTML::style('assets/site/bootstrap.min.css') }}
    {{ HTML::style('assets/site/freelancer.css') }}
    {{ HTML::style('assets/site/font-awesome.min.css') }}
    {{ HTML::style('assets/site/pricetable.css') }}
    {{ HTML::style('assets/site/morris.css') }}
    {{ HTML::style('assets/site/social.css') }}
    {{ HTML::style('assets/site/skeleton.css') }}
    {{ HTML::style('assets/site/components/components.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic') }}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
{{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
{{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
<![endif]-->
</head>

<body id="page-top" class="index">  
<!-- Navigation -->
    @include('frontend.content.nav')  
<!-- Header -->
    <header>
    <div class="container">
    @include('frontend.content.skills')
    </div>
    </header>
<!-- Portfolio Grid Section -->
    <section id="portfolio">
    @include('frontend.content.portfolio')   
    </section>
<!-- About Section -->
    <section class="success" id="about">
    @include('frontend.content.about')            
    </section>
<!-- Contact Section -->
    <section id="contact">
    @include('frontend.content.contact')            
    </section>
<!-- Map Section -->
    <section id="mapfrontend">
    @include('frontend.content.maps')    
    </section>
<!-- Chart Section -->
    <section id="chartfrontend">
    @include('frontend.content.charts')   
    </section>
<!-- Skeleton Section -->
    <section id="skeletonwidget">
    @include('frontend.content.skeleton')                   
    </section>
<!-- GOOGLEIZE -->
    <section id="googlize">
    @include('frontend.content.googlize') 
    </section>
<!-- Footer -->
    <footer class="text-center">   
    @include('frontend.content.footer')              
<!-- jQuery Version 1.11.0 -->
    {{ HTML::script('assets/site/js/jquery-1.11.0.js') }}
<!-- Bootstrap Core JavaScript -->
    {{ HTML::script('assets/site/js/bootstrap.min.js') }}    
<!-- Plugin JavaScript -->
    {{ HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}    
    {{ HTML::script('assets/site/js/classie.js') }}    
    {{ HTML::script('assets/site/js/cbpAnimatedHeader.js') }}    
<!-- Contact Form JavaScript -->
    {{ HTML::script('assets/site/js/jqBootstrapValidation.js') }}    
<!-- Custom Theme JavaScript -->
    {{ HTML::script('assets/site/js/freelancer.js') }}    
      <!-- Google Maps Api -->
    {{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exphttps://maps.googleapis.com/maps/api/js?key=AIzaSyAAzQMVO4u--tyoDD4t15aY02Bhbm0VktA') }}    
    {{ HTML::script('assets/site/js/geomapp.js') }}    
    {{ HTML::script('assets/site/js/angular.js') }}    
    @include('frontend.content.alterfooter')
    </footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
<!-- Portfolio Modals -->
    @include('frontend.content.modal')
<!-- Social Desktop -->    
    @include('frontend.content.social')
</body>
