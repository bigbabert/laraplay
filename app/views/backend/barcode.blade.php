@extends('layouts.master')
@section('title')
@parent
 Dashboard - Frontend Settings
@stop
{{-- Content --}}
@section('content')

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Barcode Generator</h3>
  	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
       {{ Form::open(array('url' => '/backend/dashboard/barcode-generator/', 'files' => true,'class'=>'form-horizontal style-form')) }}
       <h4 id="title" class="mb"><i class="fa fa-angle-right"></i> EAN 13 Generator</h4>
                          <div class="form-group">
                {{ Form::label('Barcode', 'Input Barcode',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('barcode', Input::old('barcode'), array('class' => 'form-control')) }}
</div>
                          </div>
       <div class="form-group">
                                         <div class="col-sm-10">
                    {{ Form::submit('Generate Barcode!', array('class'=>'btn btn-primary btn-lg'))}}
</div>
           <div style="margin-left: 40%;">  
      <?php echo DNS1D::getBarcodeHTML('43434', "EAN13"); ?>
           </div>
                </div>
                             {{ Form::close() }}  

          </section>
      </section>
@stop