@extends('layouts.master')
@if (Sentry::check())
@section('title')
@parent
 Dashboard - Users Managament
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
<h3><i class="fa fa-angle-right"></i>  {{trans('Create User Profile')}} </h3>
         	<!-- BASIC FORM ELELEMNTS -->
	<div class="row mt">
          		<div class="col-lg-12">
                  <div  class="form-panel">
        {{ Form::open(array('action' => 'UserController@store','class'=>'form-horizontal style-form')) }}

        
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('User@email.com'))) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
        	{{ Form::label('password', trans('Password'), array('class' => 'sr-only')) }}                
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
         	{{ Form::label('password_confirmation', trans('Password Confirmation'), array('class' => 'sr-only')) }}                
               {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
            
            {{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
            
        {{ Form::close() }}
  </div>
                  </div>

                        </div>

</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
            <!--main content end-->
  </section>
  @stop
  @else
@section('title')
@parent
 Dashboard - Users Registration
@stop
{{-- Content --}}
@section('content') 


<div   id="register-page">

        {{ Form::open(array('action' => 'UserController@store', 'method' => 'post', 'class' => 'form-login')) }}
 <a href="javascript: window.history.go(-2)" ><div class="gritter-close" style="display: block;position: relative;float: right;left: 3.5%;top:-7px;"></div></a>
       <h2 class="form-login-heading">{{trans('Register User Profile')}}</h2>                                                                    
                      <div class="login-wrap">
                            <label class="checkbox">
                         <span>    		
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('User@email.com'))) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
                        </span>
                          </label>
                            <label class="checkbox">
                         <span>    		
            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
        	{{ Form::label('password', trans('Password'), array('class' => 'sr-only')) }}                
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
                        </span>
                          </label>
                           <label class="checkbox">
                         <span>    		
           <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
         	{{ Form::label('password_confirmation', trans('Password Confirmation'), array('class' => 'sr-only')) }}                
               {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
                        </span>
                          </label>                            
                <span></span>
                            {{ Form::submit(trans('Register'), array('class' => 'btn btn-primary btn-theme btn-block'))}}
       <hr>
		        
                            <div class="login-social-link centered">
		            <p>if you are registered come back to Login Page</p>
                            <a class="btn btn-theme03" href="{{ URL::to('/login') }}">Login</a>
		                
		            </div>
		        </div>
            {{ Form::close() }}
</div>

@stop
@section('scripts')
@parent

    {{ HTML::script('assets/js/jquery.backstretch.min.js') }}    
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
@endif
@stop
