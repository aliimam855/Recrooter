@extends('employee-portal.employee-layouts.employee-app')

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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Candidate Details</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hm') }}">Home</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('employee.applicant.index') }}"><i class="fas fa-address-book mr-1"></i> My Candidates</a></li>
                                          <li class="breadcrumb-item active">Candidate Details</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->

                      <div class="row">

                        <div class="col-md-12  mt-3">
                          <div class="card mx-3">
                            
                            <!-- /.card-header -->
                            <div class="card-body mx-3">
                             
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div>

                                              <div class="mb-3">
                                                 <label class="form-label"><h6><b>Date Applied :</b></h6>  </label>    
                                                  <span>  {{ date('d F, Y', strtotime($candidate->apply_date)) }}</span>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label"><h6><b>Full Name :</b>   </label>   
                                                   <span>{{ $candidate->f_name}} {{ $candidate->l_name }}</span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Email :</b>  </label>    
                                                   <span>{{ $candidate->email}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Phone :</b> </h6> </label>    
                                                   <span>{{ $candidate->phone}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Educational Qualification :</b> </h6> </label>    
                                                   <span>{{ $candidate->education}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Experience :</b> </h6> </label>    
                                                   <span>{{ $candidate->experience}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Experience Description :</b> </h6> </label>    
                                                   <span>{{ $candidate->experience_descrip}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Salary Expectation :</b> </h6> </label>    
                                                   <span> {{ $candidate->salary_expect.' '.'TK'}} </span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Resume :</b> </h6> </label>    
                                                   <span><a href="#">{{ $candidate->resume }} </a></span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Cover Letter :</b> </h6> </label>    
                                                   <span>{{ $candidate->cover_letter }}</span>
                                                 </div>
                                                 <div class="mb-3">
                                                  <label class="form-label"><h6><b>Status : </b>  </label>    
                                                   <span>
                                                     @if ($candidate->status== 0)
                                                    <span >Closed</span>

                                                    @elseif ($candidate->status==1)
                                                    <span >New</span>

                                                    @elseif ($candidate->status==2)
                                                    <span >Active</span>

                                                    @elseif ($candidate->status==3)
                                                    <span >Dormant</span>

                                                    @elseif ($candidate->status==4)
                                                    <span >Call on Interview</span>

                                                    @elseif ($candidate->status==5)
                                                    <span >Qualified</span>

                                                    @elseif ($candidate->status==6)
                                                    <span >Hired</span>

                                                    @elseif ($candidate->status==7)
                                                    <span >Rejected</span>
                                                    @endif
                                                  </span>
                                                 </div>

                                                 <div class="mb-3">
                                                  <div class="col-md-7">
                                                  <label class="form-label"><h6><b>Sub-Status :</b> </label> 
                                                    <span>
                                                        @if($candidate->sub_status == "Self-Applied")
                                                        <span>Self-Applied</span>

                                                        @elseif($candidate->sub_status == "Invited")
                                                          <span>Invited</span>

                                                        @elseif($candidate->sub_status == "Recommended")
                                                          <span>Recommended</span> 
                                                        @else
                                                        <span>Others</span>
                                                        @endif
                                                    </span>  
                                                    
                                                  </div>
                                                 </div>

                                                <div class="mb-3">
                                                  <div class="col-md-7">
                                                  <label class="form-label"><h6><b>Other Interviewer :</b> </label>     
                                                      
                                                    <span>{{ $candidate->interviewers }}</span>
                                                  </div>
                                                 </div>

                                             
                                                 
                                               
                                               </div>

                                            {{-- </div> --}}
                                        </div>
                                        
                                        <div class="col-lg-5" >
                                            <div class="mt-4 mt-lg-0 mx-2">
                                            
                                              <h4 style="color: #000000;
                                              font-size: 20px;
                                              font-family: Roboto, sans-serif;
                                              font-weight: 400;"><b>Position : {{ $candidate->job->position_name }} </b>
                                              </h4>
                                              <br>
                                              <h5 ><b>Reference Code :</b>

                                               <h6 class="text-muted">{{ $candidate->job->ref_code }}</h6>
                                              </h5>
                                             
                                             <br>
                                             <h5 ><b>Location :</b>
                                              <h6 class="text-muted">{{ $candidate->job->location }}</h5>
                                           </h6>
                                           <br>
                                           <h5 ><b>Position Type :</b>
                                            <h6 class="text-muted">{{ $candidate->job->position_type }}</h6>
                                         </h5>
                                         <br>
                                       


                                         
                                    </div>
                                    </div>
                                 
                                {{-- </form> --}}
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                       
                        <!-- /.col -->
              
                       
                        
                    </div>
                    <!-- end row -->

                     <!-- Interview Section -->
                    <div class="row">

                      <div class="col-md-12  mt-2">
                        <div class="card mx-4">
                          <div>
                            <h4 class="mx-4 mt-3"><b>Interviews </b></h4>
                        </div>
                          <!-- /.card-header -->
                          <div class="card-body mx-2">

                            
                              <table class="table mb-0">
                                  <thead>
                                      <tr>
                                          <th>Interview Date</th>
                                          <th>Interview Time</th>
                                          <th>Interviewer</th>
                                          <th>Interview Status</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                        
                                        @foreach ( $interview as $row )
                                          
                                        
                                          <td>{{ $row->interview_date }}</td>
                                          <td>{{ $row->interview_time }}</td>
                                          <td>{{ $row->interviewer }}</td>
                                          <td>{{ $row->interview_status }}</td>
                                          <td>
                                           
                                            
                                            <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEdit{{ $row->id }}"><i class="fas fa-pen mr-1" aria-hidden="true"></i>  Edit</button>

                                             <!--Interview Edit modal portion-->
                                             <div>  
                                              <!-- sample modal content -->
                                              <div id="myModalEdit{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header" >
                                                              <h5 class="modal-title mt-0" id="myModalLabel"><b>Edit Candidate Interview</b> </h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                              </button>
                                                          </div>
                                                          <div class="modal-body" style="background-color: 
                                                          #f1f1f1;">
                                                              {{--  --}}
                                                            <form class="custom-validation" action="{{ route('employee.interview.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                                              @csrf

                                                              <div class="row mb-2">
                                                                <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Applicant </b></label>
                                                                <div class="col-sm-8 mt-2">
                                                                 {{ $candidate->name }}
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                              <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Date </b></label>
                                                              <div class="col-sm-8 mt-2">
                                                               {{ $row->interview_date }}
                                                              </div>
                                                          </div>
                                                          <div class="row mb-2">
                                                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Time </b></label>
                                                            <div class="col-sm-8 mt-2">
                                                             {{ $row->interview_time }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interviewer </b></label>
                                                          <div class="col-sm-8 mt-2">
                                                           {{ $row->interviewer }}
                                                          </div>
                                                      </div>
                                                      <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Status </b></label>
                                                        <div class="col-sm-8 mt-2">
                                                         {{ $row->interview_status }}
                                                        </div>
                                                    </div>

                              
                                                                        <div class="mb-3">
                                                                          <div class="col-md-8">
                                                                           <label class="form-label">Reason</label>
                                                                           
                                                                           <textarea class="form-control"  name="reason" rows="3" >{{ $row->reason }}</textarea>
                                                                           </div>
                                                                          </div>
                              
                                                                          <div class="mb-3">
                                                                            <div class="col-md-8">
                                                                             <label class="form-label">Comments</label>
                                                                             
                                                                             <textarea class="form-control"  name="comment" rows="3" >{{ $row->reason }}</textarea>
                                                                             </div>
                                                                            </div>
                                                                      <br>
                                                                      <div class="mb-3">
                                                                          <div class="col-md-8">
                                                                              <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                                                  Update
                                                                              </button>
                                                                           </div>
                                                                          </div>
                                                              </form>
                                                                  
                                                            </div>
                                                         
                                                      </div><!-- /.modal-content -->
                                                  </div><!-- /.modal-dialog -->
                                              </div><!-- /.modal -->
                                          </div> 



                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          
                                             

                            
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                     
                      <!-- /.col -->
            
                     
                      
                  </div>
                  <!-- end row -->

                   <!-- Interview Menu Tab Section -->
                   <div class="row">

                    <div class="col-md-12  mt-2">
                      <div class="card mx-4">
                        
                       
                        <!-- /.card-header -->
                        <div class="card-body">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#navtabs-home" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Notes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#navtabs-profile" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Phone Interview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#navtabs-messages" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">Onsite Interview</span>
                                </a>
                            </li>
                        </ul>

                              <!-- Tab panes -->
                              <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="navtabs-home" role="tabpanel">
                                  <br>
                                  <div> 
                                    <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal2" style="float: right;"><i class="fas fa-plus" style="color:aliceblue;" aria-hidden="true"></i></button>

                                   <br>
                                  
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Notes</th>
                                              <th>Date Created</th>
                                              <th>Note By</th>
                                          </tr>
                                      </thead>
                                      <tbody>
    
                                          <tr>
                                            @foreach ($note as $row )
                                              
                                           
                                              <td> {{ $row->note }} </td>
                                              <td>{{ date('d F, Y', strtotime($row->created_at)) }}</td>
                                              <td>{{ $row->note_by }}</td>
                                          
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>

                                  <div>  
                                    <!-- sample modal content -->
                                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" >
                                                    <h5 class="modal-title mt-0" id="myModalLabel" ><b>Add Candidate Note</b> </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="background-color: #f1f1f1;">
                                                    
                                                  <form class="custom-validation" action="{{ route('note.store',$candidate->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                    
                                                    <div class="mb-3">
                                                      <div class="col-md-8">
                                                       <label class="form-label"><h6><b>Applicant :</b>    {{ $candidate->name }}</h6></label>
                                                      
                                                       <input type="text" name="candidate_id" class="form-control" value="{{ $candidate->id }}" hidden>
                                                       </div>
                                                      </div>
                    
                                                    <div class="mb-3">
                                                     <div class="col-md-8">
                                                      <label class="form-label">Notes</label>
                                                      <span style="color:#ff0000">*</span>   
                                                      <textarea class="form-control"  name="note" rows="3" required></textarea>
                                                      </div>
                                                     </div>
                    
                                                     <div class="mb-3">
                                                        <div class="col-md-8">
                                                         
                                                          
                                                         <input type="text" name="note_by" class="form-control" value="{{ Auth::user()->name }}" hidden>
                                                         </div>
                                                        </div>
                    
                                                        <div class="mb-3">
                                                          <div class="col-md-8">
                                                          
                                                           
                                                           <input type="date" name="created_at" class="form-control" value="{{ $date = date('Y-m-d'); }}" hidden>
                                                           </div>
                                                          </div>
                    
                                                            <br>
                                                            <div class="mb-3">
                                                                <div class="col-md-8">
                                                                    <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                                        Submit
                                                                    </button>
                                                                 </div>
                                                                </div>
                                                    </form>
                                                        
                                                  </div>
                                               
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                                    
                                  </div>
                                </div>

                                <div class="tab-pane" id="navtabs-profile" role="tabpanel">
                                  <br>
                                  <div> 
                                   
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Interview Date</th>
                                              <th>Recommended for Onsite</th>
                                              <th>Additional Comments</th>
                                              <th>Created By</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($phone_interview as $row )
                                            
                                         
                                          <tr>
                                              <td>{{ $row->interview_date }}</td>
                                              <td>{{ $row->recommend_onsite }}</td>
                                              <td>{{ $row->additional_comment }}</td>
                                              <td>{{ $row->created_by }}</td>
                                              <td>
                                                <a class="btn btn-md btn-muted" href="{{ route('employee.phone.interview.show', $row->id) }}"><i class="fas fa-arrow-right mr-1" aria-hidden="true"></i> Details</a>
    
                                              
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                                    
                                  </div>
                                </div>
                                <div class="tab-pane" id="navtabs-messages" role="tabpanel">
                                  <br>
                                  <div> 
                                   
                                  
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Interview Date</th>
                                              <th>Recommended for Hire</th>
                                              <th>Additional Comments</th>
                                              <th>Created By</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($onsite_interview as $row )
                                            
                                         
                                          <tr>
                                              <td>{{ $row->interview_date }}</td>
                                              <td>{{ $row->recommend_to_hire }}</td>
                                              <td>{{ $row->additional_comment }}</td>
                                              <td>{{ $row->created_by }}</td>
                                              <td>
                                                <a class="btn btn-md btn-muted" href="{{ route('employee.onsite.interview.show', $row->id) }}"><i class="fas fa-arrow-right mr-1" aria-hidden="true"></i> Details</a>
    
                                             
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                    </table>
                                    
                                  </div>

                                </div>
                            </div>
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
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> <a  target="_blank" class="text-reset">Ali Imam</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection

 