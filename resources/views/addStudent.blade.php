@extends('master')

@section('content')
 
     <div class="container-fluid justify-content-center position-absolute d-flex">
         <div class="col-3 col-lg-6">
            <div class="card px-0 pb-0">
                <div class="justify-content-center d-flex">
                    <h3 class="display-4">Add Student</h3>
                </div>
                 <form action="{{ route('addStudent') }}" method="POST">
                     @csrf

                     <div class="form-group ml-3 mr-3">
                         <label for="fname" class="form-label">First Name</label>
                         <input type="text" name="fname" class="form-control">
                     </div>

                     <div class="form-group ml-3 mr-3">
                         <label for="lname" class="form-label">Last Name</label>
                         <input type="text" name="lname" class="form-control">
                     </div>

                     <div class="form-group ml-3 mr-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label for="marks" class="form-label">KCPE Marks</label>
                        <input type="text" name="marks" class="form-control">
                    </div>

                    <div class="form-group ml-3 mr-3">
                    <label for="parent_id" class="form-label">Parent ID</label>
                    <select class="form-select form-select-sm form-control" id="parent_id" name="parent_id">
                        @foreach ($guardians as $guardian)
                            <option name="parent_id" value="{{ $guardian->id }}">{{ $guardian->fname }} {{ $guardian->lname }}</option>   
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group ml-3 mr-3">
                    <label for="forms_streamCode">Form</label>
                    <select class="form-select form-select-sm form-control" id="forms_streamCode" name="forms_streamCode">
                        @foreach ($forms as $form)
                            <option value="{{ $form->id }}">{{ $form->form }} {{ $form->stream }}</option>   
                        @endforeach
                    </select>
                    </div>

                    <div class="col-12 d-flex justify-content-center mb-4">
                        <button type="submit" class="btn btn-primary col-md-3">Add Student</button>
                    </div>

                 </form>
             </div> 
            </div>
     </div>

@endsection