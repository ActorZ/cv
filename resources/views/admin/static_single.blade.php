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
          <div class="widget-content"> {{ $static->title }} </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Title ENG</h5>
          </div>
          <div class="widget-content"> {{ $static->title_en }} </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Short description</h5>
          </div>
          <div class="widget-content"> {{ $static->short_description }} </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Short description ENG</h5>
          </div>
          <div class="widget-content"> {{ $static->short_description_en }} </div>
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
          <div class="widget-content"><img src="{{ asset('images/').'/'. $static->image  }}"></div>
        </div>
      </div>
      
    </div>
    
    
  </div>
</div>

@endsection