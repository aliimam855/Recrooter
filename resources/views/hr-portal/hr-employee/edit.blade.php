@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #f1f1f1;">

              <div class="page-content">
                  <div class="container-fluid">

                      <!-- start page title -->
                       <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 mx-3"><b>Edit Employee</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr.employee.index') }}"><i class="fas fa-user-friends mr-1" aria-hidden="true"></i> Manage Employees</a></li>
                                          <li class="breadcrumb-item active">Edit Employee</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                   
                     
                    <!-- end row -->

                    <div class="row">

                        <div class="col-8  mt-3">
                          <div class="card mx-3">
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                               
                             <form class="custom-validation" action="{{ route('hr.employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                   
                                     
                                               <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                               
                                                <input type="text" class="form-control" name="name" value="{{ $employee->name }}" >
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Email</label>
                                        
                                                <input type="email" class="form-control" name="email" value="{{ $employee->email }}" readonly>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                              
                                                <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}" >
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                
                                                <input type="text" class="form-control" name="department" value="{{ $employee->department }}" >
                                               </div>
                                             
                                               <div class="mb-3">
                                                <label class="form-label">Position</label>
                                               
                                                <input type="text" class="form-control" name="position_name" value="{{ $employee->position_name }}" >
                                               </div>

                                               <div class="mb-3">
                                                   
                                                <label class="form-label">Account Type</label>
                                                
                                                 <select class="form-select" aria-label="Default select example" name="role_id" >
                                                  
                                                  <option selected>{{ $employee->role->role_name }}</option>
                                                <option value="1">HR Manager</option>
                                                <option value="2">Hiring Manager</option>
                                                <option value="3">Employee</option>

                                                  
                                                 </select>
                                               
                                               </div>
                                               <br><br>

                                             
                                               
                                        
                                         <div style="float:right;">
                                          <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                              Update
                                          </button>
                                          
                                      </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                       
                        <!-- /.col -->
              
                     
                        
                    </div>
                    <!-- end row -->
          
                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->


              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-6">
                              <script>document.write(new Date().getFullYear())</script> © Daffodil International University.
                          </div>
                          <div class="col-sm-6">
                              <div class="text-sm-end d-none d-sm-block">
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Ali Imam</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection

 