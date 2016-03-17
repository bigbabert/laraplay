@extends('layouts.master')
@section('title')
@parent
 Dashboard - Edit & Manage {{ $barcodes->name }} 
@stop
@section('head')
@parent

{{HTML::style('assets/dropzone/css/dropzone.css') }} 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', '', 'height=56,width=250');
        mywindow.document.write('<html><head><title>Barcode Printing</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body ><table><tr><td>');
        mywindow.document.write(data);
        mywindow.document.write('</td></tr></table></body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
@stop
@section('header')
@parent



@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i> Edit & Manage {{ $barcodes->name }} </h3>
              <div class="addUser">
                  <table class="table table-striped">
	<thead>
		<tr>
                    <td id="{{ $barcodes->barcode }}" style="font-weight: bold;font-size: 22px;text-transform: uppercase;"><strong style="margin-right: 10px;font-size: 24px;vertical-align: top;">{{ $barcodes->barcode }} - </strong> {{ DNS1D::getBarcodeSVG(($barcodes->barcode), "EAN13")}}</td>
                 <td><input class="btn btn-theme" type="button" value="Print Barcode" onclick="PrintElem('#{{ $barcodes->barcode }}')" /></td>
                 <td style="width: 120px !important"></td>
			<td><a href="{{ URL::to('/backend/dashboard/barcode-generator/create') }}" class="btn btn-success fileinput-button">
					        <i class="glyphicon glyphicon-plus"></i>
					        <span>Add Product</span>
					        </a></td>
		</tr>
	</thead>
                  </table>

                  
              </div>
                
<!-- will be used to show any messages -->
<!-- if there are creation errors, they will show here -->
          	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
                      {{ Form::model($barcodes, array('action' => array('BarcodesController@update', $barcodes->id), 'method' => 'PUT', 'files' => true,'class'=>'form-horizontal style-form','id' =>'my-dropzone')) }}
       <div class="form-group">
                {{ Form::label('barcode', 'Barcode',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-5">
 {{ Form::text('barcode', null, array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
       <div class="form-group">
                {{ Form::label('name', 'Name',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::text('name', null, array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
                             <div class="form-group">
                {{ Form::label('desc', 'Description',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
 {{ Form::textarea('desc',  null, array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div> 
                       <div class="form-group">
                {{ Form::label('price', 'Price',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-1">
 {{ Form::text('price', null, array('class' => 'form-control')) }}
</div>
                {{ Form::label('cat', 'Category',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-5">
 {{ Form::text('cat', null, array('class' => 'form-control')) }}
<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</div>
                          </div>
<br>
       <div style="overflow: hidden;width: 100%;" class="form-group">
               {{ Form::label('image1', 'Image 1',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image1', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          
          
          </div>
       <div style="overflow: hidden;width: 100%;" class="form-group">
               {{ Form::label('image2', 'Image 2',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image2', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>                            
          </div>
           <div style="overflow: hidden;width: 100%;" class="form-group">
               {{ Form::label('image3', 'Image 3',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image3', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>                            
          </div>
<div style="margin-left: 20%; margin-bottom: 50px;margin-top: 50px;"> {{ Form::submit('Edit Product', array('class' => 'btn btn-primary btn-lg')) }}</div>

{{ Form::close() }}
<div style="position: relative;left: 50%;top: -95px !important">
<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'backend/dashboard/barcode-generator/' . $barcodes->id)) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Product', array('class' => 'btn btn-danger btn-lg')) }}
				{{ Form::close() }}
                                    </div>
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
