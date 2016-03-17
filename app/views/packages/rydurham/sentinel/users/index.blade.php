@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i>{{trans('Users Managament')}}:</h3>
              <div class="addUser">
                  <a href="{{ URL::to('backend/dashboard/users/create') }}" class="btn btn-success fileinput-button">
					        <i class="glyphicon glyphicon-plus"></i>
					        <span>Add User</span>
					        </a>
              </div>

                                <table class="table table-striped table-bordered">
			<thead>
				<th><i class="fa fa-envelope-o"></i> {{trans('User Email')}}</th>
				<th><i class=" fa fa-edit"></i> {{trans('User Status')}}</th>
                                <th style="text-align: center;"><i class="fa fa-cogs"></i> {{trans('User Options')}}</th>
			</thead>
			<tbody>

@foreach ($users as $user)
				 	<tr>
                                            <td style="font-weight: bold;font-size: 20px;"> <a href="{{ action('UserController@show', array($user->id)) }}">
       @if (($user->first_name)&&($user->last_name)) {{ $user->first_name }}  {{ $user->last_name }} @else{{ $user->email }}@endif</a> </td>
                                                                                           
                                                                                           
						<td style="font-weight: bold;font-size: 20px;" >@if ($user->status=='Active')
							{{trans('Actived User')}}
						 @else
						 	{{trans('Disabled User')}}
						 @endif
						 </td>
							
						<td>
                                                    <button style="margin-right:5%" class="btn btn-theme" type="button" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'"><i class="fa fa-cog"></i>  {{trans('Edit')}}</button> 
							@if ($user->status != 'Suspended')
								<button style="margin-right:5%" class="btn btn-warning" type="button" onClick="location.href='{{ route('suspendUserForm', array($user->id)) }}'"><i class="fa fa-tasks"></i>  {{trans('Suspend')}}</button> 
							@else
								<button style="margin-right:5%" class="btn btn-warning" type="button" onClick="location.href='{{ action('UserController@unsuspend', array($user->id)) }}'"><i class="fa fa-tasks"></i>  {{trans('Unuspend')}}</button> 
							@endif
							@if ($user->status != 'Banned')
								<button style="margin-right:5%" class="btn btn-theme04" type="button" onClick="location.href='{{ action('UserController@ban', array($user->id)) }}'"><i class="fa fa-bullhorn"></i>  {{trans('Ban')}}</button> 
							@else
								<button style="margin-right:5%" class="btn btn-theme04" type="button" onClick="location.href='{{ action('UserController@unban', array($user->id)) }}'"><i class="fa fa-bullhorn"></i>  {{trans('Unban')}}</button> 
							@endif
							<button class="btn btn-danger" href="{{ action('UserController@destroy', array($user->id)) }}" data-token="{{ Session::getToken() }}" data-method="delete"><i class="fa fa-trash-o "></i>  {{trans('Delete')}}</button></td>
					</tr>                        
				@endforeach 
			</tbody>
		</table>
</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop
