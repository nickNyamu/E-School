@extends('master')

@section('content')

      <div class="box">
          <div class="box-header with-border">
              <a href="{{ url('addStaff') }}" class="btn btn-primary pull-right mb-3">Add Staff</a>
          </div>

          <div class="box-body">
              <table class="table table-bordered table-hover  dt-responsive tables" width="100%">
                <thead>
                    
                    <tr>
                      
                      <th style="width:10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>ID</th>
                      <th>ROLE</th>
                      <th>Status</th>
                      <th>Last login</th>
                      <th>Actions</th>
         
                    </tr> 
         
                   </thead>

                   <tbody>
                       <tr>
                           <td>1</td>
                           <td>Richard</td>
                           <td>Mulu</td>
                           <td>richard.ndisya@strathmore.edu</td>
                           <td>36958015</td>
                           <td>Admin</td>
                           <td>Active</td>
                           <td>09:55AM</td>
                           <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                       </tr>

                       <tr>
                            <td>2</td>
                            <td>Nicholas</td>
                            <td>Warui</td>
                            <td>nicholas.warui@strathmore.edu</td>
                            <td>37010915</td>
                            <td>Teacher</td>
                            <td>Active</td>
                            <td>10:25AM</td>
                            <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Sharon</td>
                            <td>Kamau</td>
                            <td>skamau@gmail.com</td>
                            <td>20119051</td>
                            <td>Teacher</td>
                            <td>Active</td>
                            <td>10:30AM</td>
                            <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Martin </td>
                            <td>Ngelu</td>
                            <td>ngelu12@gmail.com</td>
                            <td>27123445</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td>10:40AM</td>
                            <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Josephat</td>
                            <td>Kilonzo</td>
                            <td>kilonzo@gmail.com</td>
                            <td>28564677</td>
                            <td>Teacher</td>
                            <td>Active</td>
                            <td>11:00AM</td>
                            <td>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-warning btnEditUser"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Nelly</td>
                            <td>Rasugu</td>
                            <td>nelly@gmail.com</td>
                            <td>344572671</td>
                            <td>Teacher</td>
                            <td>Active</td>
                            <td>11:20AM</td>
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