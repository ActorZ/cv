@extends('admin.includes.master')

@section('admincontent')

@include('admin.includes.header')

@include('admin.includes.sidebar')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('admin.dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
    @include('flash::message')
    @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
         @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
   @endif
    <h1>Edit project</h1>
  </div>
  <div class="container-fluid">
    <hr>
    {!! Form::model($project,
      [
        'method' => 'put',
        'route' => ['projects.update',$project->id],
        'class' => 'form-horizontal',
        'files' => true
      ]
    ) !!}
    <div class="row-fluid">     
      <div class="span6">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>SR</h5>
        </div>
        <div class="widget-content ">        
            <div class="control-group">
            {!! Form::label('title', 'Title:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::text('title',null, 
                ['class' => 'span11','placeholder'=>'Enter title']) !!}
              </div>
            </div>
            <div class="control-group">
            {!! Form::label('url', 'Url:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::text('url',null, 
                ['class' => 'span11','placeholder'=>'Enter url']) !!}
              </div>
            </div>
            <div class="control-group">
             {!! Form::label('description', 'Description:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::textarea('description', null, 
                ['class' => 'span11','placeholder'=>'Enter text'])!!}
              </div>
            </div>           
        </div>
      </div>
      </div>
      <div class="span6">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>EN</h5>
        </div>
        <div class="widget-content">         
            
            <div class="control-group">
              {!! Form::label('description_en', 'Description:',['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::textarea('description_en', null, 
                ['class' => 'span11','placeholder'=>'Enter text'])!!}
              </div>
            </div>           
        </div>
      </div>
      </div>
     </div>
     
       <div class="row-fluid">    
        <div class="span6">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Image</h5>
        </div>
        <div class="widget-content">
            <div class="control-group">
              <img src="{{ asset('images/').'/'. $project->image  }}">
            {!! Form::label('image', 'Image:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::file('image')!!}
              </div>
            </div>           
        </div>
      </div>
      </div>
      <div class="span6">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Active</h5>
        </div>
        <div class="widget-content">
            <div class="control-group">
              <div class="controls">
                {!! Form::checkbox('active', 1, true ) !!} Active
              </div>
            </div>           
        </div>
      </div>
      </div>
      </div>  
      <div class="form-actions">
         {!! Form::submit('Save', ['class' => 'btn btn-success' ]) !!}
      </div>
     {!! Form::close() !!}    
  </div>
</div>

@endsection