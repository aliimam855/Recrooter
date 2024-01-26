@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #D8D9CF;">

              <div class="page-content">
                  <div class="container-fluid">

                     
                    <!-- start page title -->
                      <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 mx-3 mt-3"><b>{{ $candidate->name }}</b>     Resume </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.resume.download',$candidate->resume) }}">Download Resume</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.detail',$candidate->id) }}">{{ $candidate->name }}</a></li>
                                          <li class="breadcrumb-item active">View Resume</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                  

                       <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- style="background-color: #f5f6f8;" --}}
                                <div class="card-body mt-0 mx-5" >
                                    
                                     <iframe width="900" height="740" src="/files/{{ $candidate->resume }}" frameborder="0" style="align: center;"></iframe>

                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                
                   
        

                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->


              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-6">
                              <script>document.write(new Date().getFullYear())</script> © Data Embed.
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

