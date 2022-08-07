@extends('master')

@section('content')

      <div class="box ">
          <div class="box-header with-border pull-right mb-3">
                <a href="{{ url('add/addSubjects') }}" class="btn btn-primary">Add Subjects</a>
          </div>

          <div class="box-body">
              <table class="table table-bordered table-hover dt-responsive tables" width="30%">
                <thead>
                    
                    <tr>
                      
                      <th>Subject Code</th>
                      <th>Subject Name</th>
                      <th>Actions</th>
         
                    </tr>

                   </thead>

                   @foreach ($subjects as $subject)

                   <tbody>
                    <tr>
                        <td>{{ $subject->sCode }}</td>
                        <td>{{ $subject->sName }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                <a class="btn btn-warning btnEditSubject" href="{{ route('editSubject', $subject->id) }}"><i class="fa fa-pencil"></i></a>
                                @method('delete')
                                <button type="submit" class="btn btn-warning btnEditSubject"><i class="fa fa-times"></i></button>
                             </form>
                        </td>
                    </tr>
                    </tbody> 
                   @endforeach
              </table>
          </div>
      </div>

   

@endsection