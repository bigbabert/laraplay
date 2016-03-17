<head>
    {{HTML::style('assets/dropzone/css/dropzone.css') }} 
</head>
@if ($errors->any())
 
<ul style="color:red;">
 
{{ implode('', $errors->all('<li>:message</li>')) }}
 
</ul>
 
@endif
 
@if (Session::has('message'))
 
<p>{{ Session::get('message') }}</p>
 
@endif

    {{ Form::open(array('route' => array('auth.store'), 'file'=>'true', 'method' => 'post','id'=>'contactForm')) }}
    <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
                {{ Form::label('Your Name here ..', 'Your Name here ..') }}
 {{ Form::text('name', 'name', array('class' => 'form-control','placeholder' => 'Your Name here ..')) }}
 <p class="help-block text-danger">* Required</p>
                            </div>
                        </div>
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
                {{ Form::label('Your User Name here ..', 'Your User Name here ..') }}
 {{ Form::text('username', 'username', array('class' => 'form-control','placeholder' => 'Your User Name here ..')) }}
 <p class="help-block text-danger">* Required</p>
                            </div>
                        </div>
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
                {{ Form::label('Your Email here ..', 'Your Email here ..') }}
 {{ Form::text('email', 'email',array('class' => 'form-control','placeholder' => 'Your Email here ..')) }}
<p class="help-block text-danger">* Required</p>
                            </div>
                        </div>
           
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
                {{ Form::label('password', 'Password') }}
 {{ Form::password('password', array('class' => 'form-control','placeholder' => 'Password','style'=>'-webkit-text-security:disc;')) }}
<p class="help-block text-danger">* Required</p>
                            </div>
                        </div>
 <div class="row">
                            <div style="margin-left:-5%;" class="form-group col-xs-12">
                                {{ Form::submit('Send Registration', array('class'=>'btn btn-success btn-lg')) }}{{ Form::close() }} <span>or</span> <a style="width: 40%;background-color:#18bc9c;border:none;font-weight: bold;" class="btn btn-success btn-lg" href="{{url('/login')}}" >Login</a>
        </div>
                        </div>
    
