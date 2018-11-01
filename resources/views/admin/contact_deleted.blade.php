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
    <h1>Deleted messages</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>All messages</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  
                </tr>
              </thead>
              <tbody>
              	@forelse($obrisane_poruke as $poruka)
                <tr class="odd gradeX">
                  <td>{{ $poruka->id }}</td>
                  <td>{{ $poruka->name }}</td>
                  <td>{{ $poruka->email }}</td>
                  <td>{{ $poruka->subject }}</td>
                  <td>{{ $poruka->message }}</td>
                  
                </tr>
                @empty
                  <tr>Nema podataka</tr>
                @endforelse
              </tbody>
            </table>
            
          </div>
        </div> <!-- end widget box -->
        {!! $obrisane_poruke->links('admin.includes.pagination') !!}
      </div>
    </div>
  </div>
</div>

@endsection