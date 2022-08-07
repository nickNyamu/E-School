@extends('master')

@section('content')

<div class="container-fluid">
    <div class="card px-0 pb-0">
       <legend class="border-bottom mb-2 d-flex justify-content-center">
           <h2>Parent Details</h2>
       </legend>
       <form action="{{ route('addParent') }}" method="POST" enctype="multipart/form-data">
           @csrf 
               <fieldset class="row g-6 ml-4 mr-4">

                   <div class="col-md-6">
                       <label for="firstName" class="form-label">First Name</label>
                       <input type="text" name="fname" id="firstName" placeholder="First Name" class="form-control">
                   </div>

                   <div class="col-md-6">
                       <label for="lastName" class="form-label">Last Name</label>
                       <input type="text" name="lname" id="lastName" placeholder="Last Name" class="form-control">
                   </div>
   
                   <div class="col-md-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                   </div>
   
                   <div class="col-md-6">
                       <label for="nationalID" class="form-label">National ID</label>
                       <input type="text" name="nationalID" id="nationalID" placeholder="National ID" class="form-control">
                   </div>

                   <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
                   
                <div class="col-md-6">
                       <label for="role" class="form-label">Role</label>
                   <select class="form-select form-select-sm" name="role" id="role">
                       <option selected>Parent</option>
                       </select>
                </div>
                   
                <div class="col-md-6 mt-4">
                    <label for="file" class="form-label">Profile Photo</label>
                    <input type="file" name="photo" id="file">
                </div>

               </fieldset>
   
                   <div class="col-12 d-flex justify-content-center mt-4 mb-4">
                       <button type="submit" class="btn btn-primary col-md-3">Add Parent</button>
                   </div>
       </form>
  
    </div>        
</div>

@endsection