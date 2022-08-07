@extends('master')

@section('content')

      <div class="box">
          <div class="box-header with-border">
              <a href="{{ url('add/addParent') }}" class="btn btn-primary pull-right mb-3">Add Parent</a>
          </div>

          <div class="box-body">
              <table class="table table-bordered table-hover  dt-responsive tables" width="100%">
                <thead>
                    
                    <tr>
                      
                      <th style="width:10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>National ID</th>
                      <th>Role</th>
                      <th>Photo</th>
                      <th>Actions</th>
         
                    </tr> 
         
                   </thead>

                   <tbody>
                       
                   </tbody>
                   
              </table>
          </div>

       </div> 

       
@endsection