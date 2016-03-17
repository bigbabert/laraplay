@extends('layouts.master')
@section('title')
@parent
 Dashboard - Default Frontend Settings
@stop
@section('head')
@parent

   {{ HTML::style('assets/css/h3.css') }}
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Showing Default {{ $frontends->title }} Settings</h3>
<!-- will be used to show any messages -->
	<div class="jumbotron text-center">
            <h2 style="text-transform: uppercase;">Site Title</h2>
		<h3 class="sht">{{ $frontends->title }}</h3>
                            <h2 style="text-transform: uppercase;">Main Image</h2>
                            <h3 class="sht"><img style="padding-left: 33%;" class="img-responsive" src="{{asset($frontends->mainImage)}}" alt=""></h3>
                            <h2 style="text-transform: uppercase;">Skills Section</h2>
            <h3 class="sht">{{ $frontends->skills }}</h3>
            <h2 style="text-transform: uppercase;">Portfolio Section Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle  }}</h3>
            <h2 style="text-transform: uppercase;">First Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle1 }}</h3>
            <h2 style="text-transform: uppercase;">First Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage1)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">First Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc1  }}</h3>       
            <h2 style="text-transform: uppercase;">First Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub1   }}</h3>     
            <h2 style="text-transform: uppercase;">Second Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle2 }}</h3>     
            <h2 style="text-transform: uppercase;">Second Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage2)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">Second Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc2   }}</h3>
            <h2 style="text-transform: uppercase;">Second Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub2    }}</h3>
            <h2 style="text-transform: uppercase;">Third Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle3  }}</h3>
            <h2 style="text-transform: uppercase;">Third Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage3)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">Third Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc3   }}</h3>
            <h2 style="text-transform: uppercase;">Third Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub3    }}</h3>
            <h2 style="text-transform: uppercase;">Fourth Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle4  }}</h3>
            <h2 style="text-transform: uppercase;">Fourth Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage4)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">Fourth Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc4   }}</h3>
            <h2 style="text-transform: uppercase;">Fourth Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub4    }}</h3>
            <h2 style="text-transform: uppercase;">Fifth Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle5  }}</h3>
            <h2 style="text-transform: uppercase;">Fifth Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage5)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">Fifth Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc5   }}</h3>
            <h2 style="text-transform: uppercase;">Fifth Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub5    }}</h3>
            <h2 style="text-transform: uppercase;">Sixth Project Title</h2>
			<h3 class="sht">{{ $frontends->portfolioTitle6  }}</h3>
            <h2 style="text-transform: uppercase;">Sixth Project Image</h2>
			<h3 class="sht"><img class="img-responsive" src="{{asset($frontends->portfolioImage6)}}" alt=""></h3>
            <h2 style="text-transform: uppercase;">Sixth Project Description</h2>
			<h3 class="sht">{{ $frontends->portfolioDesc6   }}</h3>
            <h2 style="text-transform: uppercase;">Sixth Project Subline</h2>
			<h3 class="sht">{{ $frontends->portfolioSub6    }}</h3>
            <h2 style="text-transform: uppercase;">About Section Title</h2>
			<h3 class="sht">{{ $frontends->aboutTitle }}</h3>
            <h2 style="text-transform: uppercase;">About Left Column</h2>
			<h3 class="sht">{{ $frontends->about1 }}</h3>
            <h2 style="text-transform: uppercase;">About Right Column</h2>
			<h3 class="sht">{{ $frontends->about2 }}</h3>
            <h2 style="text-transform: uppercase;">Map Section Title</h2>
			<h3 class="sht">{{ $frontends->mapsTitle }}</h3>
            <h2 style="text-transform: uppercase;">Skeleton Sidebar Section Title</h2>
			<h3 class="sht">{{ $frontends->skeletonTitle }}</h3>
            <h2 style="text-transform: uppercase;">Skeleton First Column Content</h2>
			<h3 class="sht">{{ $frontends->skeleton1 }}</h3>
            <h2 style="text-transform: uppercase;">Skeleton Second Column Content</h2>
			<h3 class="sht">{{ $frontends->skeleton2  }}</h3>
            <h2 style="text-transform: uppercase;">Skeleton Third Column Content</h2>
			<h3 class="sht">{{ $frontends->skeleton3 }}</h3>
            <h2 style="text-transform: uppercase;">Charts Section Title</h2>
			<h3 class="sht">{{ $frontends->chartsTitle }}</h3>
            <h2 style="text-transform: uppercase;">First Charts Title</h2>
			<h3 class="sht">{{ $frontends->chartsTitle1 }}</h3>  
            <h2 style="text-transform: uppercase;">First Product Title</h2>
			<h3 class="sht">{{ $frontends->chartsProductTitle1  }}</h3>
            <h2 style="text-transform: uppercase;">First Product Description</h2>
			<h3 class="sht">{{ $frontends->chartsProductDesc1 }}</h3>
            <h2 style="text-transform: uppercase;">First Product Price</h2>
			<h3 class="sht">{{ $frontends->chartsPrice1 }}</h3>
            <h2 style="text-transform: uppercase;">First Product Short Description</h2>
			<h3 class="sht">{{ $frontends->chartsDesc1 }}</h3>
            <h2 style="text-transform: uppercase;">First Product Subline</h2>
			<h3 class="sht">{{ $frontends->chartsSub1        }}</h3>
            <h2 style="text-transform: uppercase;">Second Charts Title</h2>
			<h3 class="sht">{{ $frontends->chartsTitle2      }}</h3>
            <h2 style="text-transform: uppercase;">Second Product Title</h2>
			<h3 class="sht">{{ $frontends->chartsProductTitle2   }}</h3>
            <h2 style="text-transform: uppercase;">Second Product Description</h2>
			<h3 class="sht">{{ $frontends->chartsProductDesc2    }}</h3>
            <h2 style="text-transform: uppercase;">Second Product Price</h2>
			<h3 class="sht">{{ $frontends->chartsPrice2 }}</h3>
            <h2 style="text-transform: uppercase;">Second Product Short Description</h2>
			<h3 class="sht">{{ $frontends->chartsDesc2  }}</h3>
            <h2 style="text-transform: uppercase;">Second Product Subline</h2>
			<h3 class="sht">{{ $frontends->chartsSub2  }}</h3>
            <h2 style="text-transform: uppercase;">Third Charts Title</h2>
			<h3 class="sht">{{ $frontends->chartsTitle3      }}</h3>
            <h2 style="text-transform: uppercase;">Third Product Title</h2>
			<h3 class="sht">{{ $frontends->chartsProductTitle3    }}</h3>
            <h2 style="text-transform: uppercase;">Third Product Description</h2>
			<h3 class="sht">{{ $frontends->chartsProductDesc3     }}</h3>
            <h2 style="text-transform: uppercase;">Third Product Price</h2>
			<h3 class="sht">{{ $frontends->chartsPrice3       }}</h3>
            <h2 style="text-transform: uppercase;">Third Product Short Description</h2>
			<h3 class="sht">{{ $frontends->chartsDesc3        }}</h3>
            <h2 style="text-transform: uppercase;">Third Product Subline</h2>
			<h3 class="sht">{{ $frontends->chartsSub3  }}</h3>
            <h2 style="text-transform: uppercase;">Google Widget Section Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle  }}</h3>
            <h2 style="text-transform: uppercase;">First Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle1     }}</h3>
            <h2 style="text-transform: uppercase;">First Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize1        }}</h3>
            <h2 style="text-transform: uppercase;">Second Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle2   }}</h3>
            <h2 style="text-transform: uppercase;">Second Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize2        }}</h3>
            <h2 style="text-transform: uppercase;">Third Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle3   }}</h3>
            <h2 style="text-transform: uppercase;">Third Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize3        }}</h3>
            <h2 style="text-transform: uppercase;">Fourth Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle4   }}</h3>
            <h2 style="text-transform: uppercase;">Fourth Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize4        }}</h3>
            <h2 style="text-transform: uppercase;">Fifth Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle5   }}</h3>
            <h2 style="text-transform: uppercase;">Fifth Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize5        }}</h3>
            <h2 style="text-transform: uppercase;">Sixth Googlize Widget Title</h2>
			<h3 class="sht">{{ $frontends->googlizeTitle6   }}</h3>
            <h2 style="text-transform: uppercase;">Sixth Googlize Widget Content</h2>
			<h3 class="sht">{{ $frontends->googlize6        }}</h3>
            <h2 style="text-transform: uppercase;">Footer location Section</h2>
			<h3 class="sht">{{ $frontends->location        }}</h3>
            <h2 style="text-transform: uppercase;">Footer About Section Title</h2>
			<h3 class="sht">{{ $frontends->aboutTitle1      }}</h3>
            <h2 style="text-transform: uppercase;">Footer About Section Content</h2>
			<h3 class="sht">{{ $frontends->about3        }}</h3>                       		
	</div>
</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop