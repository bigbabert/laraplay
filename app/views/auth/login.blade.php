@extends('layouts.master')
@section('title')
@parent
| Login
@stop

{{-- Content --}}
@section('content')
<div   id="login-page">
	  	{{ Form::open(array('url' => 'login/create', 'class' => 'form-login')) }}
		        <h2 class="form-login-heading">sign in now</h2>
                        <div class="login-wrap">
                            <label class="checkbox">
                         <span>
                        {{ Form::text('username', null, array('class' => 'form-control')) }}
			{{ $errors->first('username') }}
                         </span>
                          </label>                    
                            <label class="checkbox">
                            <span>
                        {{ Form::password('password', array('class' => 'form-control')) }}
			{{ $errors->first('password') }}
                            </span>
		            </label>
{{ Form::submit('Login', array('class' => 'btn btn-theme btn-block')) }}
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
                            <div class="login-social-link centered">
		            <p>if you do not want to register come back to {{ $frontends->title }}</p>
                            <a class="btn btn-theme03" href="{{ URL::to('/') }}">{{ $frontends->title }}</a>
		                
		            </div>
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		 {{ Form::close() }}	  	
	  	
	  </div>
</section>
</section>
@stop
@section('scripts')
@parent

    {{ HTML::script('assets/js/jquery.backstretch.min.js') }}    
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
@stop
