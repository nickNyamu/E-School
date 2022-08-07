@extends('master')

@section('content')

<div class="box ">
    <div class="box-header with-border pull-right mb-3">
        <a href="{{ url('class/add') }}" class="btn btn-primary">Add Class</a>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-hover dt-responsive tables" width="30%">
          <thead>
              
              <tr>
                
                <th style="width:10px">#</th>
                <th>Stream Code</th>
                <th>Form</th>
                <th>Stream</th>
                <th>Actions</th>
   
              </tr>

             </thead>

             @foreach ($forms as $form)
             <tbody>

                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $form->streamCode }}</td>
                    <td>{{ $form->form }}</td>
                    <td>{{ $form->stream }}</td>
                    <td>
                     <form action="" method="POST">
                        <a class="btn btn-warning btnEditSubject" href=""><i class="fa fa-pencil"></i></a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-warning btnEditSubject"><i class="fa fa-times"></i></button>
                     </form>
                    </td>
                </tr>

            </tbody>
             @endforeach

             
        </table>
    </div>
</div>



@endsection