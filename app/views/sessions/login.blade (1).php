@extends('layouts.master')
@section('title')
@parent
| Login
@stop

{{-- Content --}}
@section('content')
<div style="display: block;"  id="login-page">

        {{ Form::open(array('action' => 'SessionController@store', 'class' => 'form-login')) }}
 <a href="javascript:history.back()" ><div class="gritter-close" style="display: block;position: relative;float: right;left: 3.5%;top:-7px;"></div></a>
<h2 class="form-login-heading">sign in now</h2>
                        <div class="login-wrap">
                            <label class="checkbox">
                         <span>
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('email'), 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
                        </span>
                          </label>                    
                            <label class="checkbox">
                            <span>
            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('password')))}}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
                         </span>
                          </label>                    
                            <label class="checkbox">
                                <span style="padding-left: 10%;padding-top: 2.7%;" class="pull-left">
                                    <div style="display: none;">{{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('Remember')}}?</div>
                                </span>
		                <span class="pull-right">
                                    <a class="btn btn-link" href="{{ route('forgotPasswordForm') }}"> Forgot Password?</a>
		                </span>
 		                                               
		            </label>
                            <span></span>
                            {{ Form::submit(trans('Login'), array('class' => 'btn btn-primary btn-theme btn-block'))}}
       <hr>
		        <div class="login-social-link centered">
                            <a style="margin-bottom: 2%;" class="btn btn-theme03" href="{{ URL::to('/register') }}">Register</a>
		            <p>or Continue to {{ $frontends->title }}</p>
                            <a class="btn btn-theme03" href="{{ URL::to('/') }}">{{ $frontends->title }}</a>
		                
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
@stop