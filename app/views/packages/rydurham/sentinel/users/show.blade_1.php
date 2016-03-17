@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament
@stop
@section('head')
@parent

{{ HTML::style('assets/profile/css/bootstrap-theme.css') }}
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
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8"> 
                            
                            
                     <h2> {{ $user->first_name }}    {{ $user->last_name }}</h2>
                    <p><i class="fa fa-envelope-o"></i><strong> Email: </strong> {{ $user->email }} </p>

		    
		</div>
		<div class="col-md-4">
			<p><em>{{trans('pages.profile')}} {{trans('pages.created')}}: {{ $user->created_at }}</em></p>
			<p><em>{{trans('pages.modified')}}: {{ $user->updated_at }}</em></p>
			<button class="btn btn-primary" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'">{{trans('pages.actionedit')}}</button>
		</div>
	</div>

	<h4>{{trans('users.group_membership')}}:</h4>
	<?php $userGroups = $user->getGroups(); ?>
	<div class="well">
	    <ul>
	    	@if (count($userGroups) >= 1)
		    	@foreach ($userGroups as $group)
					<li>{{ $group['name'] }}</li>
				@endforeach
			@else 
				<li>{{trans('groups.notfound')}}</li>
			@endif
	    </ul>
	</div>
	
	<hr />

	<h4>User Object</h4>
	<div>
		<p>{{ var_dump($user) }}</p>
	</div>

@stop
