@extends('master')

@section('content')

      <div class="box">
          <div class="box-header with-border">
              <a href="{{ url('add/addStudent') }}" class="btn btn-primary pull-right mb-3">Add Student</a>
          </div>

          <div class="box-body">
              <table class="table table-bordered table-hover  dt-responsive tables" width="100%">
                <thead>
                    
                    <tr>
                      
                      <th style="width:10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>DOB</th>
                      <th>Admission No.</th>
                      <th>KCPE Marks</th>
                      <th>Form</th>
                      <th>Stream</th>
                      <th>Actions</th>
         
                    </tr> 
         
                   </thead>

                   <tbody>
                       <tr>
                           <td>1</td>
                           <td>Fred</td>
                           <td>Kasalu</td>
                           <td>kasalu.fred@strathmore.edu</td>
                           <td>20-01-2005</td>
                           <td>356</td>
                           <td>F3</td>
                           <td>West</td>
                           <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                       </tr>

                       <tr>
                            <td>2</td>
                            <td>Mercy</td>
                            <td>Ndisya</td>
                            <td>mercy.ndisya@strathmore.edu</td>
                            <td>12-07-2006</td>
                            <td>400</td>
                            <td>F2</td>
                            <td>East</td>
                            <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                   </tbody>
              </table>
          </div>

       </div> 

       
@endsection