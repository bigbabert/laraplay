@extends('layouts.master')
@section('title')
@parent
 Dashboard - Frontend Settings
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Frontend Settings</h3>
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	
	<tbody>
	
		<tr>
        <td style="font-weight: bold;font-size: 22px;text-transform: uppercase;">Default Settings</td>

        <td style="font-weight: bold;font-size: 22px;text-align: center;">Alter Developing</td>


                        <td style="text-align: center;">
				<!-- show the nerd (uses the show method found at GET //backend/dashboard/frontends/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('/backend/dashboard/frontend-settings/12') }}">Show Default Settings</a>
                        </td>
                        <td style="text-align: center;"><!-- edit this nerd (uses the edit method found at GET //backend/dashboard/frontends/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ URL::to('/backend/dashboard/frontend-settings/create') }}">Create Your Settings</a>
			</td>
		</tr>
  	     <tr>
                 <td style="font-weight: bold;font-size: 22px;text-transform: uppercase;">Active Settings</td>
			<td style="font-weight: bold;font-size: 22px;text-align: center;">{{ $frontends->title }}</td>
<td style="text-align: center;" >
        <!-- delete the nerd (uses the destroy method DESTROY //backend/dashboard/frontends/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
                                 <a class="btn btn-small btn-success" href="{{ URL::to('/backend/dashboard/frontend-settings/'. $frontends->id ) }}">Show Settings</a>
                              </td>
                              <td style="text-align: center;" class="delete{{$frontends->id}}">
                                   <a class="btn btn-small btn-success" href="{{ URL::to('/backend/dashboard/frontend-settings/'. $frontends->id ) }}">Edit Settings</a>                           
                              </td>

			<!-- we will also add show, edit, and delete buttons -->
                           <tdstyle="text-align: center;" class="delete{{$frontends->id}}">{{ Form::open(array('url' => '/backend/dashboard/frontend-settings/'. $frontends->id , 'class' => 'pull-left')) }}
					{{ Form::hidden('_method', 'DELETE') }}
                                       {{ Form::submit('Delete Settings', array('class' => 'btn btn-warning')) }}
                                       {{ Form::close() }}
                                  </td>
                </tr>

	</tbody>
</table>
</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop