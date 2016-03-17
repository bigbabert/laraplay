@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament
@stop
@section('head')
@parent

{{HTML::style('assets/dropzone/css/dropzone.css') }} 
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
               <h4 id="title" class="mb"><i class="fa fa-angle-right"></i> Personal Info</h4>
        <div class="form-group {{ ($errors->has('firstName')) ? 'has-error' : '' }}" for="firstName">
            {{ Form::label('edit_firstName', trans('First Name'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('firstName', $user->first_name, array('class' => 'form-control', 'placeholder' => trans('First Name'), 'id' => 'edit_firstName'))}}
<span class="help-block">This info is displayed only to you</span>
</div>
            {{ ($errors->has('firstName') ? $errors->first('firstName') : '') }}    			
    	</div>
        <div class="form-group {{ ($errors->has('lastName')) ? 'has-error' : '' }}" for="lastName">
            {{ Form::label('edit_lastName', trans('Last Name'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('lastName', $user->last_name, array('class' => 'form-control', 'placeholder' => trans('First Name'), 'id' => 'edit_lastName'))}}
<span class="help-block">This info is displayed only to you</span>
            </div>
            {{ ($errors->has('lastName') ? $errors->first('lastName') : '') }}                
        </div>
    <div class="form-group {{ ($errors->has('Email')) ? 'has-error' : '' }}" for="email">
            {{ Form::label('edit_email', trans('Email'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('email', $user->email, array('class' => 'form-control', 'placeholder' => trans('Email'), 'id' => 'edit_email'))}}
<span class="help-block">This info is displayed only to you</span>
</div>
            {{ ($errors->has('email') ? $errors->first('email') : '') }}    			
    	</div>
        @if (Sentry::getUser()->hasAccess('admin'))
<h4 id="title" class="mb"><i class="fa fa-angle-right"></i> Membership Permissions</h4>

        <div class="form-group">
            {{ Form::label('edit_memberships', trans('Change Permissions'), array('class' => 'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                @foreach ($allGroups as $group)
                <div style="padding: 3%;" > <label class="checkbox">
                        <input type="checkbox" name="groups[{{ $group->id }}]" value='1'{{ (in_array($group->name, $userGroups) ? 'checked="checked"' : '') }} ><span style="font-size: 22px;padding: 2%;" class="badge bg-theme">  {{ $group->name }}</span>
                    </label></div>
                @endforeach
            </div>
        </div>
        @endif
<br>
       <div style="overflow: hidden;width: 100%;" class="form-group">
               {{ Form::label('image1', 'Profile Image',array('class' => 'col-sm-2 col-sm-2 control-label')) }}
                              <div class="col-sm-10">
                                     {{ Form::file('image1', array('class' => 'form-control dz-default dz-message')) }}
 <span class="help-block">A block of help text thaet breaks onto a new line and may extend beyond one line.</span>
                            </div>
                          
          
          </div>
        <div class="form-group">
                {{ Form::hidden('id', $user->id) }}
                <div style="position: fixed;bottom: 100px;right: 80px;"> {{ Form::submit(trans('Save Changes'), array('class'=>'btn btn-primary btn-lg'))}}</div>
      </div>
    {{ Form::close()}}


<h4 style="color: lightcoral;" id="title" class="mb"><i class="fa fa-angle-right"></i>{{trans('Pasword Change')}}</h4>
    {{ Form::open(array(
        'action' => array('UserController@change', $user->id), 
        'class' => 'form-inline', 
        'role' => 'form'
        )) }}
        <div style="margin-bottom: 20%;">
        <div  class="form-group {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
        	{{ Form::label('oldPassword', trans('Old Password'), array('class' => 'sr-only')) }}
			{{ Form::password('oldPassword', array('class' => 'form-control', 'placeholder' => trans('oldpassword'))) }}
    	</div>

        <div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword', trans('New Password'), array('class' => 'sr-only')) }}
            {{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => trans('password'))) }}
    	</div>

    	<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword_confirmation', trans('New Password Confirmation'), array('class' => 'sr-only')) }}
            {{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => trans('confirm-password'))) }}
    	</div>

        {{ Form::submit(trans('Change Password'), array('class' => 'btn btn-danger'))}}
	        	
      {{ ($errors->has('oldPassword') ? '<br />' . $errors->first('oldPassword') : '') }}
      {{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
      {{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}

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