
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Recrooter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body style="background-color: #f1f1f1;">

        <div class="p-2 mb-3" style="background-color: #007faa;">
            <h2 class="mx-5" style="color: #ffffff; text-indent: 32%;"><b>Recrooter</b></h2>
          </div>

        <
        <div class="account-pages my-5  pt-sm-5">
            <div class="container" >
                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div>
                            
                            
                            <div class="card" >
                               
                                <div class="card-body p-4"> 
    
                                    <div class="text-center mt-2">
                                        <h4 class="text-primary">Reset Password</h4>
                                       
                                    </div>
                                    <div class="p-2 mt-4">
                                        <div class="alert alert-success text-center mb-4" role="alert">
                                            Enter your Email and instructions will be sent to you!
                                        </div>
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
            
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mt-3 text-end">
                                                <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                
    
                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Signin </a></p>
                                            </div>
                                        </form>
                                    </div>
                
                                </div>
                            </div>
                            {{-- <div class="mt-5 text-center">
                                <p>© <script>document.write(new Date().getFullYear())</script> Data Embed. Crafted with <i class="mdi mdi-heart text-danger"></i> by Ali Imam</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="/assets/libs/jquery/jquery.min.js"></script>
        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/node-waves/waves.min.js"></script>
        <script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>

