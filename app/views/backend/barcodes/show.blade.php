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
          	<h3><i class="fa fa-angle-right"></i> {{ $barcodes->name }} </h3>
<!-- will be used to show any messages -->
	<div class="jumbotron text-center">
                        <h2 style="text-transform: uppercase;">Name</h2>
		<h3 class="sht">{{ $barcodes->name }}</h3>
            <h2 style="text-transform: uppercase;">Price</h2>
		<h3 class="sht">{{ $barcodes->price }} $</h3>
                            <h2 style="text-transform: uppercase;">Barcode</h2>
		<h3 class="sht">{{ DNS1D::getBarcodeSVG(($barcodes->barcode), "EAN13")}}</h3>
                            <h2 style="text-transform: uppercase;">Main Image</h2>
                            <h3 class="sht"><img  class="img-responsive" src="{{asset($barcodes->image1)}}" alt=""></h3>
                            <h2 style="text-transform: uppercase;">Second Image</h2>
                            <h3 class="sht"><img  class="img-responsive" src="{{asset($barcodes->image2)}}" alt=""></h3>
                            <h2 style="text-transform: uppercase;">Third Image</h2>
                            <h3 class="sht"><img  class="img-responsive" src="{{asset($barcodes->image3)}}" alt=""></h3>
                                              		                                              		                                              		
	</div>
</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop