<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Logout | PGFC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="PGFC" name="PT Petrokimia Gresik" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ url('backend/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ url('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="backend/assets/images/bg.png" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="#" class="logo-light">
                                            <img src="frontend/images/logo-pgfc.png" alt="logo" height="22">
                                        </a>
                                        <a href="" class="logo-dark">
                                            <img src="frontend/images/logo-pgfc.png" alt="dark logo" height="80"
                                                weight="80">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto">
                                        <div class="my-auto">
                                            <!-- title-->
                                            <div class="text-center">
                                                <h4 class="mt-0 fs-20">See You Again !</h4>
                                                <p class="text-muted mb-4">You are now successfully logout.</p>
                                            </div>

                                            <!-- Logout icon -->
                                            <div class="logout-icon m-auto">
                                                <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                                                        <path class="path" fill="none" stroke="#0acf97" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                                                c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                                                c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"></path>
                                                        <circle class="path" fill="none" stroke="#0acf97" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"></circle>
                                                        <polyline class="path" fill="none" stroke="#0acf97" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8
                                                                74.1,108.4 48.2,86.4 "></polyline>
                            
                                                        <circle class="spin" fill="none" stroke="#0acf97" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"></circle>
                                                    </svg> -->
                                                <img src="backend/assets/images/svg/shield.gif" alt="" class="img-fluid">

                                            </div>
                                            <!-- end logout-icon-->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-light-emphasis">Back To <a href="{{ route('login') }}"
                            class="text-light fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-light">
            <script>
                document.write(new Date().getFullYear())
            </script> © PGFC - by Petrokimia Gresik
        </span>
    </footer>
     <!-- Vendor js -->
     <script src="{{ url('backend/assets/js/vendor.min.js') }}"></script>

     <!-- App js -->
     <script src="{{ url('backend/assets/js/app.min.js') }}"></script> 

</body>

</html>