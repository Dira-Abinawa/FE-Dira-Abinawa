@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('users.index') !!}">Users</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Detail Profile</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name"><strong>Name : </strong></label>
                                        <p>{{ $users->name }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email"><strong>Email : </strong></label>
                                        <p>{{ $users->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name"><strong>Status Account : </strong></label>
                                        @if ($users['active'] == true)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Not Active</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email"><strong>Role Account : </strong></label>
                                        @if ($users['is_admin'] == true)
                                            <span class="badge badge-success"> Admin</span>
                                        @else
                                            <span class="badge badge-info"> User</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Add more fields as needed -->
                            </div>
                        </div>
                        
                    </div>
                </div>
           </div>
    </div>
@endsection
