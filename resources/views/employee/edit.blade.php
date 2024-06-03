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
                
                        <a href="{{ url('employee')}}" class="btn btn-secondary float-end" >Back</a> 
                 
              </div>

                <form action ="{{url('employee/'.$employee-> id. '/edit') }}" method ="POST" class= "needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                <div class="row card-body col-md-12">
                  
                  <div class="form-group col-md-4">
                    <label class="form-label" for="exampleInputEmail1">First Name</label>
                    <input type="text" name ="firstName" class="form-control " id="firstName" placeholder="" value ="{{ $employee-> firstName}} "required>
                    @error('firstName') <span class="text danger">{{$message}} </span>@enderror
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" placeholder="" value ="{{ $employee-> middleName}}"  name ="middleName" required>
                    @error('middleName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputFile">Last Name</label>
                   
                    <input type="text"  name ="LastName" class="form-control" id="lastName" placeholder="" value ="{{ $employee-> LastName}}" required>
                    @error('LasttName') <span class="text danger">{{$message}} </span>@enderror
                  </div>
                  
                  
     
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success">Update</button>
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

    
@endsection