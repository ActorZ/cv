@extends('admin.includes.master')

@section('admincontent')

@include('admin.includes.header')

@include('admin.includes.sidebar')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('admin.dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/adm/static" class="current">Static pages</a> </div>
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
    <h1>Projects</h1><button type="button" class="btn btn-primary btn-large"><a href="{{ route('projects.create') }}">Create new project</a></button>

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>All projects</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	@forelse($projects as $project)
                <tr class="odd gradeX">
                  <td>{{ $project->id }}</td>
                  <td>{{ $project->title }}</td>
                  <td>{{ $project->active }}</td>
                  <td>
                  	<a href="{{ route('projects.show',[$project->id]) }}" title="View" class="tip-bottom"><i class="icon-eye-open"></i></a>
                    <a style="padding-left: 20px;padding-right: 20px" href="{{ route('projects.edit',[$project->id]) }}" title="Edit" class="tip-bottom"><i class="icon-edit"></i></a>
                    {!! Form::open(
                       [
                       'route' => ['projects.destroy', $project],
                       'method' => 'delete'
                       
                       ]) !!}
                       {!! Form::button( '<i class="icon-trash"></i>', ['type' => 'submit'] ) !!}

                    {!! Form::close() !!}
                  </td>
                </tr>
                @empty
                  <tr>Nema podataka</tr>
                @endforelse
              </tbody>
            </table>
            
          </div>
        </div> <!-- end widget box -->
        {!! $projects->links('admin.includes.pagination') !!}
      </div>
    </div>
  </div>
</div>

@endsection