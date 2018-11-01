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
   
    <h1>Settings</h1>
  </div>
  <div class="container-fluid">
    <hr>
    {!! Form::model($settings,
      [
        'method' => 'put',
        'route' => ['settings.update',$settings->id],
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
            {!! Form::label('name', 'Name:', 
            ['class' => 'control-label','files' => true]) !!}
              <div class="controls">
                {!! Form::text('name',null, 
                ['class' => 'span11','placeholder'=>'Enter name']) !!}
              </div>
            </div>
            <div class="control-group">
             {!! Form::label('birth', 'Date of Birth:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::text('birth', null, 
                ['class' => 'span11','placeholder'=>'Enter date'])!!}
              </div>
            </div>
            <div class="control-group">
             {!! Form::label('address', 'Address:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::text('address', null, 
                ['class' => 'span11','placeholder'=>'Enter address'])!!}
              </div>
            </div>
            <div class="control-group">
             {!! Form::label('email', 'Email:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::email('email', null, 
                ['class' => 'span11','placeholder'=>'Enter email'])!!}
              </div>
            </div>
            <div class="control-group">
             {!! Form::label('phone', 'Phone:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::text('phone', null, 
                ['class' => 'span11','placeholder'=>'Enter phone'])!!}
              </div>
            </div> 
            <div class="control-group">
             {!! Form::label('document_sr', 'CV sr:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::file('document_sr',null)!!}
              </div>
            </div> 
            <div class="control-group">
             {!! Form::label('document_en', 'CV en:', 
            ['class' => 'control-label']) !!}
              <div class="controls">
                {!! Form::file('document_en',null)!!}
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