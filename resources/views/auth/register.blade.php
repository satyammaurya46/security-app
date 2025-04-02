
<!doctype html>
<html lang="en">

<head>

    
    <meta charset="utf-8" />
    <title>Alert Security | Register page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('theme/assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{url('theme/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('theme/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('theme/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="{{url('theme/assets/images/logo-dark.png')}}" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Free Register</h5>
                                        <p class="text-muted">Get your free Morvin account now.</p>
                                    </div>


                                    <form class="form-horizontal" action="">
                                       
                                        <div class="mb-3">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">        
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">        
                                        </div>
                    
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the Morvin <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Already have an account ? <a href="{{route('auth.login')}}" class="fw-bold text-white"> Login </a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Morvin. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{url('theme/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{url('theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('theme/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{url('theme/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('theme/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>