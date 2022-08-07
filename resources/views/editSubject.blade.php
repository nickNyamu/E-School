@extends('master')

@section('content')

<div class="container-fluid justify-content-center position-absolute d-flex">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0">
           <div class="justify-content-center d-flex">
               <h3 class="display-4">Edit Subject</h3>
           </div>

            <form action="{{ route('editSubject')  }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group ml-3 mr-3">
                        <label for="sCode" class="form-label">Subject Code</label>
                        <input type="text" name="sCode" class="form-control" value="{{ $subject['sCode'] }}">
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label for="sName" class="form-label">Subject Name</label>
                        <input type="text" name="sName" class="form-control" value="{{ $subject['sName'] }}">
                    </div>

                    <input type="text" name="id" value="{{ $subject['id'] }}">

                    <div class="col-12 d-flex justify-content-center mb-4">
                       <button type="submit" class="btn btn-primary col-md-3">Edit Subject</button>
                   </div>
            </form>
        </div>
       </div>
</div>

@endsection