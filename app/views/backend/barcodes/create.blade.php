@extends('layouts.master')
@section('title')
@parent
 Dashboard - Add Products 
@stop
@section('head')
@parent

{{HTML::style('assets/dropzone/css/dropzone.css') }} 
@stop
@section('header')
@parent



@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add your Products </h3>
<!-- will be used to show any messages -->
<!-- if there are creation errors, they will show here -->
          	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
       {{ Form::open(array('action' => 'BarcodesController@store', 'files' => true,'class'=>'form-horizontal style-form','id' =>'my-dropzone')) }}                                 
       <div class="form-group">
                {{ Form::label('name', 'Name',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('desc', 'Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('desc', Input::old('desc'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
                       <div class="form-group">
                {{ Form::label('price', 'Price',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-1">
 {{ Form::text('price', Input::old('price'), array('class' => 'form-control')) }}
</div>
                 {{ Form::label('cat', 'Category',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-5">
 {{ Form::text('cat', Input::old('cat'), array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div style="overflow: hidden;" class="form-group">
               {{ Form::label('image1', 'First Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image1', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          
          
          </div>
       <div style="overflow: hidden;" class="form-group">
               {{ Form::label('image2', 'Second Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image2', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>                            
          </div>
           <div style="overflow: hidden;" class="form-group">
               {{ Form::label('image3', 'Third Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image3', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>                            
          </div>       
   <div style="margin-left: 20%; margin-bottom: 50px;"> {{ Form::submit('Upload Product!', array('class'=>'btn btn-primary btn-lg'))}} </div>
                    
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
