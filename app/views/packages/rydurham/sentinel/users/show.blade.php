@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament
@stop
@section('head')
@parent

{{ HTML::style('assets/profile/css/bootstrap-theme.css') }}
{{ HTML::script('assets/js/chart-master/Chart.js') }}   	
	<style>

.profile 
{
    min-height: 355px;
    display: inline-block;
    }
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
	</style>
@stop
{{-- Content --}}
@section('content')
     <section id="main-content">
          <section class="wrapper">
<h3><i class="fa fa-angle-right"></i>  {{trans('User Profile')}}</h3>
         	<!-- BASIC FORM ELELEMNTS -->
	<div class="row">
		<div class="col-lg-12">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8"> 
                            
                            
                     <h2> {{ $user->first_name }}    {{ $user->last_name }}</h2>
                     <br>
                     <p style="font-size:18px;"><i class="fa fa-envelope-o"></i><strong> Email: </strong> {{ $user->email }} </p>
                    <p style="font-size:18px;"><i class="fa fa-tasks"></i><strong> {{trans('Profile')}} {{trans('Created')}}:</strong> {{ date("d F Y",strtotime($user->created_at)) }}</p>
                    <p style="font-size:18px;"><i class="fa fa-tasks"></i><strong> {{trans('Profile')}} {{trans('Updated')}}:</strong> {{ date("d F Y",strtotime($user->updated_at)) }}</p>
                </div>             
                <div  class="col-xs-12 col-sm-4">
                    <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        <figcaption style="margin-left: 14%;" class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                <?php $user = Sentry::findUserById(1); ?>
                    
                    <h2><i class="fa fa-cogs"></i><strong> Admin </strong></h2>                    
                   @if ($user = Sentry::findUserById(1)) 
                   <p><i style="color: green;" class=" fa fa-check fa-3x"></i></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-cogs"></span> Admin Profile </button>
                   @else                     
                   <p><i class=" fa fa-check fa-3x"></i></p>         
                    <button class="btn btn-info btn-block"><span class="fa fa-cogs"></span> Unpermitted </button>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><i class="fa fa-user"></i><strong> User </strong></h2>                    
                    <p><i style="color: green;" class=" fa fa-check fa-3x"></i></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><i class=" fa fa-edit"></i><strong> Edit </strong></h2>                    
                    <p><i style="color: green;" class="fa fa-pencil fa-3x"></i></p>
                    <a data-toggle="tab" href="#edit"><button class="btn btn-info btn-block" onClick="$.scrollTo($('#thirdLine'), 500);"><span class=" fa fa-edit"></span> {{trans('Edit Profile')}} </button></a>
                </div>
                </div>
            </div>
    	 </div>                 
		</div>
                <div class="row"> 
                                          	<div class="col-md-4 col-sm-4 mb">
					  		<div class="green-panel pn">
					  			<div class="green-header">
						  			<h5>DISK SPACE</h5>
					  			</div>
								<canvas id="serverstatus03" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#2b2b2b"
											},
											{
												value : 40,
												color : "#fffffd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
								</script>
								<h3>60% USED</h3>
					  		</div>
					  	</div><!--/col-md-4 -->
                   <div class="col-md-4 col-sm-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#1c9ca7"
											},
											{
												value : 40,
												color : "#f68275"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div><!-- /darkblue panel -->
                      	</div><!-- /col-md-4 -->
<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-2 pn">
								<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p>NEW YORK</p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
											<p class="small">Thu Apr 14, 2014</p>
										</div>
									</div>
								</div><!-- /weather-2 header -->
								<div class="row centered">
									<img src="{{asset('assets/img/ny.jpg')}}" class="img-circle" width="120">			
								</div>
								<div class="row data">
                                                                    <div style="bottom:20px;" class="col-sm-6 col-xs-6 goleft">
										<h4><b>16 ºC</b></h4>
										<h6>21º max</h6>
										<h6>8º min</h6>
									</div>
									<div style="bottom:20px;" class="col-sm-6 col-xs-6 goright">
										<h5><i class="fa fa-sun-o fa-2x"></i></h5>
										<h6><b>Sunny</b></h6>
										<h5>7:15 am</h5>
									</div>
								</div>
							</div>
						</div>
                </div>
                <div class="row content-panel">
                    <div id="thirdLine" class="panel-heading">
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a data-toggle="tab" href="#overview">Overview</a>
									</li>									
									<li>
										<a data-toggle="tab" href="#edit">Edit Profile</a>
									</li>
								</ul>
							</div><!-- --/panel-heading ---->
							
							<div class="panel-body">
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										<div class="row">
											<div class="col-md-6">									
												<div class="detailed mt">
													<h4>Recent Activity</h4>
													<div class="recent-activity">
														<div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
														<div class="activity-panel">
															<h5>1 HOUR AGO</h5>
															<p>Purchased: Dashgum Admin Panel.</p>
														</div>
														
														<div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
														<div class="activity-panel">
															<h5>5 HOURS AGO</h5>
															<p>Task Completed. Resolved issue with Disk Space.</p>
														</div>

														<div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
														<div class="activity-panel">
															<h5>3 DAYS AGO</h5>
															<p>Launched a new product: Flat Pack Heritage.</p>
														</div>
													</div><!-- --/recent-activity ---->
												</div><!-- /detailed -->
											</div><!-- --/col-md-6 ---->
											
											<div class="col-md-6 detailed">
												<h4>User Stats</h4>
												<div class="row centered mt mb">
													<div class="col-sm-4">
														<h1><i class="fa fa-money"></i></h1>
														<h3>$22,980</h3>
														<h6>LIFETIME EARNINGS</h6>
													</div>
													<div class="col-sm-4">
														<h1><i class="fa fa-trophy"></i></h1>
														<h3>37</h3>
														<h6>COMPLETED TASKS</h6>
													</div>
													<div class="col-sm-4">
														<h1><i class="fa fa-shopping-cart"></i></h1>
														<h3>1980</h3>
														<h6>ITEMS SOLD</h6>
													</div>
												</div><!-- /row -->			
											</div><!-- /col-md-6 -->
										</div><!-- --/OVERVIEW ---->
									</div><!-- --/tab-pane ---->				
									<div id="edit" class="tab-pane">
										<div class="row">
											<div class="col-lg-8 col-lg-offset-2 detailed">
												<h4 class="mb">Personal Information</h4>
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

      {{ Form::close() }}
											</div><!-- --/col-lg-8 ---->
										</div><!-- --/row ---->
									</div><!-- --/tab-pane ---->
								</div><!-- /tab-content -->
							
							</div><!-- --/panel-body ---->
							
						</div>
          </section>
          </section>
@stop
@section('scripts')
@parent

    {{ HTML::script('assets/js/sparkline-chart.js') }}    
<script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
@stop