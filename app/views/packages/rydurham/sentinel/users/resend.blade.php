@extends('layouts.master')
@section('title')
@parent
| Resend Activation Code
@stop

{{-- Content --}}
@section('content')
<div   id="resend-page">

        {{ Form::open(array('action' => 'UserController@resend', 'method' => 'post', 'class' => 'form-login')) }}
 <a href="javascript: window.history.go(-2)" ><div class="gritter-close" style="display: block;position: relative;float: right;left: 3.5%;top:-7px;"></div></a>
        	<h2 class="form-login-heading">{{trans('Resend Activation Code')}}</h2>
                        <div class="login-wrap">
                            <label class="checkbox">
                         <span>    		
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('user@email.com'), 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
                        </span>
                          </label> 
                <span></span>
             {{ Form::submit(trans('Resend'), array('class' => 'btn btn-primary btn-theme btn-block'))}}
       <hr>
		        
                            <div class="login-social-link centered">
		            <p>if you do not registered come back to Register Page</p>
                            <a class="btn btn-theme03" href="{{ URL::to('/register') }}">Registration</a>
		                
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