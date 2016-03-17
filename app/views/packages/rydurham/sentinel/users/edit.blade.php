@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
<h3><i class="fa fa-angle-right"></i>  {{trans('Edit User Profile')}}</h3>
         	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
			                                  	{{ Form::open(array(
        'action' => array('UserController@update', $user->id), 
        'method' => 'put',
        'class'=>'form-horizontal style-form', 
        'role' => 'form'
        )) }}  
			                                       <div class="form-group {{ ($errors->has('firstName')) ? 'has-error' : '' }}" for="firstName">
            {{ Form::label('edit_firstName', trans('First Name'), array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-6">
              {{ Form::text('firstName', $user->first_name, array('class' => 'form-control', 'placeholder' => trans('First Name'), 'id' => 'edit_firstName'))}}
<span class="help-block">This info is displayed only to you</span>
</div>
            {{ ($errors->has('firstName') ? $errors->first('firstName') : '') }}    			
			                                        </div>
        <div class="form-group {{ ($errors->has('lastName')) ? 'has-error' : '' }}" for="lastName">
            {{ Form::label('edit_lastName', trans('Last Name'), array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-6">
              {{ Form::text('lastName', $user->last_name, array('class' => 'form-control', 'placeholder' => trans('First Name'), 'id' => 'edit_lastName'))}}
<span class="help-block">This info is displayed only to you</span>
            </div>
            {{ ($errors->has('lastName') ? $errors->first('lastName') : '') }}                
        </div>
			                                       <div class="form-group">
                {{ Form::hidden('id', $user->id) }}
                <div class="pull-right"> {{ Form::submit(trans('Save Changes'), array('class'=>'btn btn-primary btn-lg'))}}</div>
      </div>
    {{ Form::close()}}
											</div>
											
											<div class="col-lg-8 col-lg-offset-2 detailed mt">
												<h4 class="mb">{{trans('Pasword Change')}}</h4>
    {{ Form::open(array(
        'action' => array('UserController@change', $user->id), 
        'class' => 'form-horizontal', 
        'role' => 'form'
        )) }}	
        <div  class="form-group {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
        	{{ Form::label('oldPassword', trans('Old Password'), array('class' => 'col-lg-2 control-label')) }}
			{{ Form::password('oldPassword', array('class' => 'form-control', 'placeholder' => trans('oldpassword'))) }}
    	</div>
        <div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword', trans('New Password'), array('class' => 'col-lg-2 control-label')) }}
            {{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => trans('password'))) }}
    	</div>
    	<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword_confirmation', trans('New Password Confirmation'), array('class' => 'col-lg-2 control-label')) }}
            {{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => trans('confirm-password'))) }}
    	</div>
			                                        <div class="form-group">
			                                            <div class="col-lg-offset-2 col-lg-10">
                                                                        <div class="pull-right">  {{ Form::submit(trans('Change Password'), array('class' => 'btn btn-danger'))}}</div>
			                                            </div>
			                                        </div>
	        	
      {{ ($errors->has('oldPassword') ? '<br />' . $errors->first('oldPassword') : '') }}
      {{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
      {{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}

      {{ Form::close() }}</div>

                        </div>

</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
@stop