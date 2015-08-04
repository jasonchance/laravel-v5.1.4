@extends('layouts.default')
@section('head')
@stop
@section('content')
<div class="container">
  <div class="content">
    <div class="title">Laravel 5</div>
    <div class="title">{{ $count }}</div>
    <div class="title">{{ $userName }}</div>
    <div class="title">=========</div>
	@datetime($nowTime)
    <div class="quote">{{ Inspiring::quote() }}</div>

    {!! Form::open(['route' => 'user', 'method' => 'post']) !!}
        {!! Form::input('text', 'name') !!}
        {!! Form::textarea('content') !!}
    {!! Form::close() !!}

    <!-- <form method="POST">
    {!! method_field('delete') !!}
    {!! csrf_field() !!}
	</form> -->
  </div>
</div>
@stop
