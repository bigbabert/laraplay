@extends('layouts.master')
@section('title')
@parent
 Dashboard - Create Your Frontend 
@stop
@section('head')
@parent

{{HTML::style('assets/dropzone/css/dropzone.css') }} 
@stop
@section('header')
@parent

<div class="btn-group goTo">
						  <button type="button" class="btn btn-theme03">Go To Section or Save</button>
						  <button type="button" class="btn btn-theme03 dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu mycreate" role="menu">
						    <li><a href="#title">Titles & Header</a></li>
						    <li class="divider"></li>
						    <li><a href="#product1">Product 1</a></li>
						    <li class="divider"></li>
						    <li><a href="#product2">Product 2</a></li>
						    <li class="divider"></li>
						    <li><a href="#product3">Product 3</a></li>
						    <li class="divider"></li>
						    <li><a href="#product4">Product 4</a></li>
						    <li class="divider"></li>
						    <li><a href="#product5">Product 5</a></li>
						    <li class="divider"></li>
						    <li><a href="#product6">Product 6</a></li>
						    <li class="divider"></li>
						    <li><a href="#about">About</a></li>
                                                  </ul> <ul class="dropdown-menu second" role="menu">
                                                    <li><a href="#charts1">Charts 1</a></li>
 						    <li class="divider"></li>
                                                   <li><a href="#charts2">Charts 2</a></li>
						    <li class="divider"></li>
                                                   <li><a href="#charts3">Charts 3</a></li>  
 						    <li class="divider"></li>
                                                    <li><a href="#widget">Widget</a></li>                                                      
 						    <li class="divider"></li>
                                                    <li><a href="#googlize">Googlize</a></li>                                                      
 						    <li class="divider"></li>
<li style="text-align: center;">{{ Form::submit('Save Settings!', array('class'=>'btn btn-primary btn-lg'))}}</li>
                                                  </ul>
						</div>

@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Creating your Personal Site</h3>
<!-- will be used to show any messages -->
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all(), array( 'class' =>  'alert alert-info') )}}
          	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
       {{ Form::open(array('action' => 'FrontendsController@store', 'files' => true,'class'=>'form-horizontal style-form','id' =>'my-dropzone')) }}
       <h4 id="title" class="mb"><i class="fa fa-angle-right"></i> Titles & Header</h4>
                          <div class="form-group">
                {{ Form::label('title', 'Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                          <div class="form-group">
               {{ Form::label('mainImage', 'First Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
         <div class="form-group">
                {{ Form::label('skills', 'Main SubLine',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('skills', Input::old('skills'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioTitle', 'Products Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle', Input::old('portfolioTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         
         <div class="form-group">
                {{ Form::label('aboutTitle', 'About Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('aboutTitle', Input::old('aboutTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div class="form-group">
                {{ Form::label('mapsTitle', 'Maps Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('mapsTitle', Input::old('mapsTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
           <div class="form-group">
                {{ Form::label('skeletonTitle', 'Widget Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('skeletonTitle', Input::old('skeletonTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
        <div class="form-group">
                {{ Form::label('chartsTitle', 'Charts Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsTitle', Input::old('chartsTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                              <div class="form-group">
                {{ Form::label('googlizeTitle', 'Googlize Section Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle', Input::old('googlizeTitle'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="product1" class="mb"><i class="fa fa-angle-right"></i>Product 1 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle1', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle1', Input::old('portfolioTitle1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage1', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image2', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc1', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc1', Input::old('portfolioDesc1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub1', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub1', Input::old('portfolioSub1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
<div  class="form-panel sectiontitle">
             <h4 id="product2" class="mb"><i class="fa fa-angle-right"></i>Product 2 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle2', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle2', Input::old('portfolioTitle2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage2', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image3', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc2', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc2', Input::old('portfolioDesc2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub2', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub2', Input::old('portfolioSub2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="product3" class="mb"><i class="fa fa-angle-right"></i>Product 3 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle3', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle3', Input::old('portfolioTitle3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage3', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image4', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc3', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc3', Input::old('portfolioDesc3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub3', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub3', Input::old('portfolioSub3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="product4" class="mb"><i class="fa fa-angle-right"></i>Product 4 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle4', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle4', Input::old('portfolioTitle4'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage4', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image5', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc4', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc4', Input::old('portfolioDesc4'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub4', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub4', Input::old('portfolioSub4'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="product5" class="mb"><i class="fa fa-angle-right"></i>Product 5 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle5', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle5', Input::old('portfolioTitle5'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage5', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image6', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc5', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc5', Input::old('portfolioDesc5'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub5', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub5', Input::old('portfolioSub5'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="product6" class="mb"><i class="fa fa-angle-right"></i>Product 6 Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('portfolioTitle6', 'Product Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioTitle6', Input::old('portfolioTitle6'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="form-group">
               {{ Form::label('portfolioImage6', 'Product Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image7', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          </div>
          <div class="form-group">
                {{ Form::label('portfolioDesc6', 'Product Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('portfolioDesc6', Input::old('portfolioDesc6'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div class="form-group">
                {{ Form::label('portfolioSub6', 'Product Subline',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('portfolioSub6', Input::old('portfolioSub6'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
         <div  class="form-panel sectiontitle">
             <h4 id="about" class="mb"><i class="fa fa-angle-right"></i>About Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('about1', 'First Line',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('about1', Input::old('about1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('about2', 'Second Line',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('about2', Input::old('about2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div  class="form-panel sectiontitle">
             <h4 id="charts1" class="mb"><i class="fa fa-angle-right"></i>First Charts Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('chartsTitle1', 'Short Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsTitle1', Input::old('chartsTitle1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('chartsProductTitle1', 'Long Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsProductTitle1', Input::old('chartsProductTitle1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('chartsDesc1', 'Short Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsDesc1', Input::old('chartsDesc1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('chartsProductDesc1', 'Long Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsProductDesc1', Input::old('chartsProductDesc1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
                          <div class="form-group">
                {{ Form::label('chartsSub1', 'SubLine',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsSub1', Input::old('chartsSub1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                          <div class="form-group">
                {{ Form::label('chartsPrice1', 'Price',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsPrice1', Input::old('chartsPrice1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div  class="form-panel sectiontitle">
             <h4 id="charts2" class="mb"><i class="fa fa-angle-right"></i>Second Charts Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('chartsTitle2', 'Short Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsTitle2', Input::old('chartsTitle2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('chartsProductTitle2', 'Long Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsProductTitle2', Input::old('chartsProductTitle2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('chartsDesc2', 'Short Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsDesc2', Input::old('chartsDesc2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('chartsProductDesc2', 'Long Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsProductDesc2', Input::old('chartsProductDesc2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
                          <div class="form-group">
                {{ Form::label('chartsSub2', 'SubLine',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsSub2', Input::old('chartsSub2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                          <div class="form-group">
                {{ Form::label('chartsPrice2', 'Price',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsPrice2', Input::old('chartsPrice2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div  class="form-panel sectiontitle">
             <h4 id="charts3" class="mb"><i class="fa fa-angle-right"></i>Third Charts Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('chartsTitle3', 'Short Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsTitle3', Input::old('chartsTitle3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('chartsProductTitle3', 'Long Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsProductTitle3', Input::old('chartsProductTitle3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('chartsDesc3', 'Short Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsDesc3', Input::old('chartsDesc3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('chartsProductDesc3', 'Long Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('chartsProductDesc3', Input::old('chartsProductDesc3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
                          <div class="form-group">
                {{ Form::label('chartsSub3', 'SubLine',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsSub3', Input::old('chartsSub3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                          <div class="form-group">
                {{ Form::label('chartsPrice3', 'Price',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('chartsPrice3', Input::old('chartsPrice3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div  class="form-panel sectiontitle">
             <h4 id="widget" class="mb"><i class="fa fa-angle-right"></i>Sidebar Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('skeleton1', 'First Text Box',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('skeleton1', Input::old('skeleton1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('skeleton2', 'Second Text Box',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('skeleton2', Input::old('skeleton2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('skeleton3', 'Third Text Box',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('skeleton3', Input::old('skeleton3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div  class="form-panel sectiontitle">
             <h4 id="googlize" class="mb"><i class="fa fa-angle-right"></i>Googlize Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('googlizeTitle1', 'Box 1 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle1', Input::old('googlizeTitle1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('googlize1', 'Box 1 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize1', Input::old('googlize1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('googlizeTitle2', 'Box 2 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle2', Input::old('googlizeTitle2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlize2', 'Box 2 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize2', Input::old('googlize2'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlizeTitle3', 'Box 3 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle3', Input::old('googlizeTitle3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlize3', 'Box 3 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize3', Input::old('googlize3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlizeTitle4', 'Box 4 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle4', Input::old('googlizeTitle4'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlize4', 'Box 4 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize4', Input::old('googlize4'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
       <div class="form-group">
                {{ Form::label('googlizeTitle5', 'Box 5 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle5', Input::old('googlizeTitle5'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('googlize5', 'Box 5 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize5', Input::old('googlize5'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('googlizeTitle6', 'Box 6 Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('googlizeTitle6', Input::old('googlizeTitle6'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('googlize6', 'Box 6 Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('googlize6', Input::old('googlize6'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
        <div  class="form-panel sectiontitle">
             <h4 id="googlize" class="mb"><i class="fa fa-angle-right"></i>Footer Section</h4>
             <div class="col-sm-10">
                          </div>
  </div>
                          
                         <div class="form-group">
                {{ Form::label('location', 'Location Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('location', Input::old('location'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
         <div class="form-group">
                {{ Form::label('aboutTitle1', 'Right Title',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('aboutTitle1', Input::old('aboutTitle1'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
        <div class="form-group">
                {{ Form::label('about3', 'Right Content',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('about3', Input::old('about3'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
<div class="createFixedbtn">  {{ Form::submit('Save Settings!', array('class'=>'btn btn-primary btn-lg'))}} </div>
          </div>
                            
 {{ Form::close() }}  
                  </div>

                        </div>

</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop
@section('scripts')
@parent

{{ HTML::script('assets/dropzone/dropzone.js') }}
@stop
