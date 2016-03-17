@extends('layouts.master')
@section('title')
@parent
 Dashboard - Users Managament 
@stop
{{-- Content --}}
@section('content')
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> {{trans('Suspend User')}}</h3>
        {{ Form::open(array('action' => array('UserController@suspend', $id), 'method' => 'post')) }}
 

        <div style="max-width: 420px;" class="form-group {{ ($errors->has('minutes')) ? 'has-error' : '' }}">
                {{ Form::text('minutes', null, array('class' => 'form-control', 'placeholder' => trans('suspension minutes'), 'autofocus')) }}
                {{ ($errors->has('minutes') ? $errors->first('minutes') : '') }}
            </div>    	   

            {{ Form::hidden('id', $id) }}

            {{ Form::submit(trans('Suspend').'!', array('class' => 'btn btn-warning')) }}
            <a style="margin-left: 5%;" class="btn btn-primary" href="javascript:history.back()">Dismiss</a>
        {{ Form::close() }}
    </div>
</div>

@stop