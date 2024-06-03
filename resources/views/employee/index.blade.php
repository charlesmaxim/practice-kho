@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('EmployeeManagement') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        
                         <a href="{{ url('employee/create') }}" class="btn btn-secondary mx-4" >Add Employee</a> 
                      
                    </div>

             
                            <table class="table ">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>   </th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        @foreach ($employee as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->firstName}}</td>
                                            <td>{{$item->middleName}}</td>
                                            <td>{{$item->LastName}}</td>
                                       
                                            <td>
                                                <a href="{{ url('employee/'. $item ->id.'/edit') }}" class ="btn btn-info mx-2">Edit</a> 
                                                <a href="{{ url('employee/'. $item ->id.'/delete') }}"class ="btn btn-danger mx-2" onclick ="return confirm('are you sure you want to delete?')">Delete</a> 

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                 
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    
    <!-- /.content -->
@endsection