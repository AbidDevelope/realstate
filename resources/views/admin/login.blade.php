<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>NextHome | Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('loginassets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{asset('loginassets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('loginassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('loginassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('loginassets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('loginassets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <!-- end col -->

                                <div class="col-lg-12">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to NextHome.</p>
                                        </div>

                                        <div class="mt-4">
                                        <form class="login-form" action="{{ url('admin/login')}}" method="POST" >
                                             @csrf
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Email</label>
                                                    <input type="text"name="email" class="form-control" id="username" placeholder="Enter username">
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="#" class="text-muted">Forgot password?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" name="password"  class="form-control pe-5" placeholder="Enter password" id="password-input">
                                                        <button  class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="submit" class="btn btn-login float-right">Submit</button>
                                                       
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                                                </div>

                                                

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> NextHome. Developed by <i class="mdi mdi-heart text-danger"></i> by KookyInfo media
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{asset('loginassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('loginassets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('loginassets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('loginassets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('loginassets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('loginassets/js/plugins.js')}}"></script>

    <!-- password-addon init -->
    <script src="{{asset('loginassets/js/pages/password-addon.init.js')}}"></script>
</body>

</html>