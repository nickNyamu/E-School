@extends('master')

@section('content')
 
     <div class="container-fluid justify-content-center position-absolute d-flex">
         <div class="col-3 col-lg-6">
            <div class="card px-0 pb-0">
                <div class="justify-content-center d-flex">
                    <h3 class="display-4">Add Subject</h3>
                </div>
                 <form action="{{ route('addSubjects') }}" method="POST">
                     @csrf
                     <div class="form-group ml-3 mr-3">
                         <label for="sCode" class="form-label">Subject Code</label>
                         <input type="text" name="sCode" class="form-control">
                     </div>
                     <div class="form-group ml-3 mr-3">
                         <label for="sName" class="form-label">Subject Name</label>
                         <input type="text" name="sName" class="form-control">
                     </div>

                     <div class="col-12 d-flex justify-content-center mb-4">
                        <button type="submit" class="btn btn-primary col-md-3">Add Subject</button>
                    </div>
                 </form>
             </div>
            </div>
     </div>

@endsection