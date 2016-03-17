@extends('layouts.master')
@section('title')
@parent
 Dashboard - Barcodes Managament
@stop
@section('head')
@parent

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
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Barcodes Managament</h3>
                <div class="addUser">
                  <a href="{{ URL::to('/backend/dashboard/barcode-generator/create') }}" class="btn btn-success fileinput-button">
					        <i class="glyphicon glyphicon-plus"></i>
					        <span>Add Product</span>
					        </a>
              </div>
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Product Code</td>
			<td>Product Name</td>
			<td>Product Price</td>
			<td>Product Barcode</td>
                        <td style="text-align: center;" colspan="4"> Actions </td>
		</tr>
	</thead>
        <tbody >
	@foreach($barcodes as $key => $value)
		<tr>
			<td style="font-weight: bold;font-size: 22px;text-transform: uppercase;" >{{ $value->id }}</td>
			<td style="font-weight: bold;font-size: 22px;text-transform: uppercase;" >{{ $value->barcode }}</td>
			<td style="font-weight: bold;font-size: 22px;text-transform: uppercase;" >{{ $value->name }}</td>
			<td style="font-weight: bold;font-size: 22px;text-transform: uppercase;" >{{ $value->price }} $</td>
        <td id="{{ $value->barcode }}" style="font-weight: bold;font-size: 22px;text-transform: uppercase;">{{ DNS1D::getBarcodeSVG(($value->barcode), "EAN13")}}</td>
      

			<!-- we will also add show, edit, and delete buttons -->
			<td>
                          <a class="btn btn-theme"  value="Print Barcode" onclick="PrintElem('#{{ $value->barcode }}')" /><i class="fa fa-print"></i> Print Barcode</a>
                        </td>
                        <td>
                            <!-- show the nerd (uses the show method found at GET /barcodes/{id} -->
				<a class="btn btn-small btn-success" href="{{ action('BarcodesController@show', array($value->id)) }}"><i class="fa fa-eye"></i> Show Product</a>
                        </td>
                        <td>
                              <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->

                                {{ Form::open(array('url' => 'backend/dashboard/barcode-generator/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete Product', array('class' => 'btn btn-small btn-danger altertrash')) }}
                                        {{ Form::close() }}                       
			</td>
                        <td>
				<!-- edit this nerd (uses the edit method found at GET /barcodes/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ action('BarcodesController@edit', array($value->id)) }}"><i class="fa fa-edit"></i> Edit Product</a>
                         </td>
		</tr>
	@endforeach
        <tr><td></td></tr>
        <tr><td></td></tr>
	</tbody>
</table>
</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop