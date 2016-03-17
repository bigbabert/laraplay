@extends('layouts.master')
@section('title')
@parent
 Dashboard - Groups Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
<h3><i class="fa fa-angle-right"></i>  {{trans('Create Group')}}</h3>
         	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
	{{ Form::open(array('action' => 'GroupController@store','class'=>'form-horizontal style-form')) }}
        <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => trans('Group Name'))) }}
            {{ ($errors->has('name') ? $errors->first('name') : '') }}
        </div>

        <div class="form-group">
         {{ Form::label(trans('Group Permissions')) }}           
            <label class="checkbox-inline">
                <span>  {{ Form::checkbox('adminPermissions', 1) }} Admin</span>
            </label>
            <label class="checkbox-inline">
                <span>  {{ Form::checkbox('userPermissions', 1) }} User</span>
            </label>

        </div>

        {{ Form::submit(trans('Create Group'), array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
  </div>
                  </div>

                        </div>

</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop