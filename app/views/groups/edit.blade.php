@extends('layouts.master')
@section('title')
@parent
 Dashboard - Groups Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
<h3><i class="fa fa-angle-right"></i>  {{trans('Edit Group')}}</h3>
         	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
	{{ Form::open(array('action' =>  array('GroupController@update', $group->id), 'method' => 'put','class'=>'form-horizontal style-form')) }}
        <h4 id="title" class="mb"><i class="fa fa-angle-right"></i>{{trans('Edit Group')}}</h4>
    
        <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
{{ Form::label('edit_GroupName', trans('Group Name'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
            {{ Form::text('name', $group->name, array('class' => 'form-control', 'placeholder' => trans('Group Name'))) }}
            </div>
{{ ($errors->has('name') ? $errors->first('name') : '') }}
        </div>

        <h4><i class="fa fa-angle-right"></i>      {{ Form::label(trans('Group Permissions')) }} </h4>
        <?php 
            $permissions = $group->getPermissions(); 
            if (!array_key_exists('admin', $permissions)) $permissions['admin'] = 0;
            if (!array_key_exists('users', $permissions)) $permissions['users'] = 0;
        ?>
        
        <div class="form-group">
            <label class="checkbox-inline">
                {{ Form::checkbox('adminPermissions', 1, $permissions['admin'] ) }} Admin
            </label>
            <label class="checkbox-inline">
                {{ Form::checkbox('userPermissions', 1, $permissions['users'] ) }} Users
            </label>
        </div>

        {{ Form::hidden('id', $group->id) }}
        {{ Form::submit(trans('Edit').' '.trans('Group'), array('class' => 'btn btn-primary')) }}
        <button style="float: right;" class="btn btn-danger action_confirm" type="button" data-token="{{ Session::getToken() }}" data-method="delete" href="{{ URL::action('Sentinel\GroupController@destroy', array($group->id)) }}"><i class="fa fa-trash-o "></i> Delete</button>
    {{ Form::close() }}
    </div>
</div>

@stop