@extends('master')

@section('content')

<div class="container-fluid justify-content-center position-absolute d-flex">
    <div class="col-3 col-lg-6">
       <div class="card px-0 pb-0">
           <div class="justify-content-center d-flex">
               <h3 class="display-4">Add Class</h3>
           </div>
            <form action="{{ route('addClass') }}" method="POST">
                @csrf

                <div class="form-group ml-3 mr-3">
                    <label for="form" class="form-label">Form</label>
                    <select class="form-select form-select-sm" name="form">
                        <option>F1</option>
                        <option>F2</option>
                        <option>F3</option>
                        <option>F4</option>
                    </select>
                </div>

                <div class="form-group ml-3 mr-3">
                    <label for="stream" class="form-label">Stream</label>
                    <select class="form-select form-select-sm" name="stream">
                        <option name="stream">North</option>
                        <option name="stream">West</option>
                        <option name="stream">East</option>
                        <option name="stream">South</option>
                    </select>
                </div>

                <div class="col-12 d-flex justify-content-center mb-4">
                   <button type="submit" class="btn btn-primary col-md-3">Add Class</button>
               </div>
            </form>
        </div>
       </div>
</div>


@endsection