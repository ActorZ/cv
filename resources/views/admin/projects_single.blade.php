@extends('admin.includes.master')

@section('admincontent')

@include('admin.includes.header')

@include('admin.includes.sidebar')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
    <h1>Static single</h1>
  </div>
  <div class="container-fluid">
    <hr>
    
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Title </h5>
          </div>
          <div class="widget-content"> {{ $project->title }} </div>
        </div>
      </div>
      
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Url </h5>
          </div>
          <div class="widget-content"> {{ $project->url }} </div>
        </div>
      </div>
      
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Description</h5>
          </div>
          <div class="widget-content"> {{ $static->description }} </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Description ENG</h5>
          </div>
          <div class="widget-content"> {{ $static->description_en }} </div>
        </div>
      </div>
    </div>
    
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Image</h5>
          </div>
          <div class="widget-content"><img src="{{ asset('images/').'/'. $project->image  }}"></div>
        </div>
      </div>
      
    </div>
    
    
  </div>
</div>

@endsection