<!DOCTYPE html>
<html>
	<head>
	<title>
@section('title')
AlterApp
@show
	</title>
@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
   {{ HTML::style('assets/css/bootstrap.css') }}
    <!--external css-->
   {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
   {{ HTML::style('assets/js/gritter/css/jquery.gritter.css') }}    
    <!-- Custom styles for this template -->
   {{ HTML::style('assets/css/style.css') }}
   {{ HTML::style('assets/css/style-responsive.css') }}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
@show
  </head>
  <body onload="getTime()">
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      @section('header')
      @include('backend.layouts.header')
      @show    
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      @section('sidebar')
      @include('backend.layouts.sidebar')
      @show
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
     
      @yield('content')
      <!-- /MAIN CONTENT -->
      <!--footer start-->
      @section('footer')
      @include('backend.layouts.footer')
      @show
      <!--footer end-->
     @section('scripts') 
    <!-- js placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/jquery.js') }}
    {{ HTML::script('assets/js/jquery-1.9.1.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/jquery.dcjqaccordion.2.7.js') }}
    {{ HTML::script('assets/js/jquery.scrollTo.min.js') }}
    {{ HTML::script('assets/js/jquery.nicescroll.js') }}
        <!--common script for all pages-->
        {{ HTML::script('assets/js/gritter/js/jquery.gritter.js') }}
    {{ HTML::script('assets/js/common-scripts.js') }}
    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtimeDash').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
     @show
  </body>
</html>
