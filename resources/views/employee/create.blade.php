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
        <div class="container-fluid ">
            <div class="row">

            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif

            <div class="col-lg-12">
            <div class="card card-info">
                <div class="card-header">
             

                        <a href="{{ url('employee') }}" class="btn btn-succes mx-4" >Back</a> 
                 
              </div>

                <form action ="{{url('employee/create') }}" style="background-color:white;" method ="POST" class= "needs-validation" novalidate>
                    @csrf
                <div class="row card-body col-md-12">
                        <a href="{{ url('employee') }}" class="btn btn-secondary mx-4" >Back</a> 
                 
              </div>

                <form action ="{{url('employee/create') }}" method ="POST" class= "needs-validation" novalidate>
                    @csrf
                <div class="row card-body col-md-5">

                  
                  <div class="form-group col-md-4">
                    <label class="form-label" for="exampleInputEmail1">First Name</label>
                    <input style="background-color:#be2edd;" type="text" name ="firstName" class="form-control " id="firstName" placeholder="" value ="{{ old('name')}} "required>
                    @error('firstName') <span class="text danger">{{$message}} </span>@enderror
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input  style="background-color:#30336b;" type="text" class="form-control" id="middleName" placeholder="" value ="{{ old('name')}}"  name ="middleName" required>
                    @error('middleName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputFile">Last Name</label>
                   
                    <input  style="background-color:#686de0;" type="text"  name ="LastName" class="form-control" id="lastName" placeholder="" value ="{{ old('name')}}" required>
                    @error('LasttName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Zip</label>
                    <input  style="background-color:#30336b;" type="text" class="form-control" id="middleName" placeholder="" value ="{{ old('name')}}"  name ="middleName" required>
                    @error('middleName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputFile">Address</label>
                   
                    <input  style="background-color:#686de0;" type="text"  name ="LastName" class="form-control" id="lastName" placeholder="" value ="{{ old('name')}}" required>
                    @error('LasttName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  
                  
     
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">


</div>

                  <button type="submit" class="btn btn-success lg-2">Submit</button>

                </div>

           
              </form>
          </div>
        </div>
      </div>
      <script>

(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


</script>




    </div>

    <divclass="card-body">
                <ul  style="width:100%;" class="todo-list ui-sortable" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li class="done">
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
@endsection