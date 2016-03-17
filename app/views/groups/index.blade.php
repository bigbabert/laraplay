@extends('layouts.master')
@section('title')
@parent
 Dashboard - Groups Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i>{{trans('Groups Managament')}}:</h3>
              <div class="addUser">
                  <a href="{{ URL::to('backend/dashboard/groups/create') }}" class="btn btn-success fileinput-button">
					        <i class="glyphicon glyphicon-plus"></i>
					        <span>Add Group</span>
					        </a>
              </div>

                                <table class="table table-striped table-bordered">
			<thead>
				<th><i class="fa fa-pencil"></i> {{trans('Groups Name')}}</th>
				<th><i class="fa fa-tasks"></i> {{trans('Groups Permissions')}}</th>
                                <th style="text-align: center;" colspan="2" ><i class="fa fa-cogs"></i> {{trans('Groups Options')}}</th>
			</thead>
			<tbody>
			@foreach ($groups as $group)
				<tr style="font-weight: bold;font-size: 20px;">
					<td><a href="backend/dashboard/groups/{{ $group->id }}">{{ $group->name }}</a></td>
					<td>
                                        <?php 
							$permissions = $group->getPermissions(); 
							$keys = array_keys($permissions);
							$last_key = end($keys);
						?>
						@foreach ($permissions as $key => $value)
	    					{{ ucfirst($key) . ($key == $last_key ? '' : ', ') }}
	    				@endforeach
                                        </td>
                                        <td>
						<button style="margin-right:5%" class="btn btn-theme" onClick="location.href='{{ action('GroupController@edit', array($group->id)) }}'"><i class="fa fa-cog"></i>  {{trans('Group Edit')}}</button>
                                        </td>
                                        <td>
					 	<button style="float: right;" class="btn btn-danger action_confirm {{ ($group->id == 2) ? 'disabled' : '' }}" type="button" data-token="{{ Session::getToken() }}" data-method="delete" href="{{ URL::action('Sentinel\GroupController@destroy', array($group->id)) }}"><i class="fa fa-trash-o "></i> Delete</button>
					 </td>
				</tr>	
			@endforeach
			</tbody>
		</table> 
	</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop
