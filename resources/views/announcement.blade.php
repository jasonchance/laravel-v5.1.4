@extends('layouts.default')
@section('head')
<link rel="stylesheet" href="{{asset('css/libs/timeline.css')}}">
<link rel="stylesheet" href="{{asset('css/announcement.css')}}">
@stop
@section('content')
<div class="row announcement">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading ">
        Announcement & Notification
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <ul class="timeline">
          @foreach ($announcements as $announcement)
          @if($announcement->binfo)
          <li class="timeline-inverted">
            <div class="timeline-badge info">
              <i class="fa fa-info"></i>
            </div>
            @else
          <li>
            <div class="timeline-badge warning">
              <i class="fa fa-bomb"></i>
            </div>
            @endif
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">{{$announcement->title}}</h4>
                <hr/>
              </div>
              <div class="timeline-body">
                <p>{{$announcement->message}}</p>
                <div class="timeline-date pull-right">
                  {{$announcement->created_at}}
                </div>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
        {!! $announcements->render() !!}
      </div>
      <!-- /.panel-body -->
    </div>
  </div>
</div>
@stop
