@if (Sentry::check())
<section id="container" >

<header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ URL::to('backend/dashboard') }}" class="logo"><b>DASHBOARD</b></a>
<!--logo end-->
<div style="margin-left: 2%;" class="sidebar-toggle-box">
    
              </div>
<a style="width: 300px;" class="logo" href="{{ URL::to('/') }}" target="_blank" ><li style="font-size: 18px;color: #797979;margin-right: 5%;" class="fa fa-desktop"></li><b> View Frontend</b></a>

            <div class="nav notify-row" id="top_menu"></div>
            <div class="top-menu">
 </div>
            <ul class="nav pull-right top-menu">	
                <li style="position: absolute;right: 18%;"><div id="showtimeDash"></div></li>
            <!--<li><img class='logout' src='assets/img/logout.png' alt='Logout'></li><li>{{ HTML::link('logout', 'Logout', array('class' => 'logout')) }}</li>-->
                <li id="lockscreen"><a style="font-size: 26px;"  class="logout fa fa-lock" href="{{ URL::to('/backend/dashboard/screen-lock') }}" alt="Loockscreen"></a></li>
<li id="alogout"><a class="logout" href="{{ URL::to('logout') }}" alt="Logout">{{ HTML::image("assets/img/logout.png", "Logout") }}</a></li>
             
                </ul>
</header>
@endif
