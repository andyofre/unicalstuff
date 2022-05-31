<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/custom/unical.png">
    <title>Unical GSS</title>
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/colors/purple.css">

</head>

<body>







    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="apply.html">
                            <img class="logo-dark" src="./assets/custom/logo.png" srcset="./assets/custom/unical.png 2x"
                                alt="" width="180px" />
                            <img class="logo-light" src="./assets/custom/logo-light.png"
                                srcset="./assets/custom/unical.png 2x" alt="" width="180px" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="apply.html"><img src="./assets/custom/logo-light.png"
                                    srcset="./assets/custom/logo-light.png" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Unical GSS</a></li>
                            <li class="nav-item  "><a class="nav-link" href="{{route('register.student')}}">
                                    Register</a>

                            </li>

                            <li class="nav-item  "><a class="nav-link " href="{{route('validate.student')}}">Courses
                                    Registration</a>
                            </li>
                            <li class="nav-item  "><a class="nav-link" href="#">Print Reciept</a></li>


                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-lg-4">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                            <li class="nav-item d-none d-md-block">
                                <a href="#" class="btn btn-sm btn-primary rounded-pill">Register now </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <div class="navbar-hamburger"><button class="hamburger animate plain"
                                        data-toggle="offcanvas-nav"><span></span></button></div>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-ash">
            <div class="container pt-18 pb-5" style="z-index: 5; position:relative">
                <div class="row gx-0 gy-12 align-items-center">
                    `
                    <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-2">
                        <h5 class="display-6 mb-10 px-xl-10">Late registrations attract's penalty charges,<br /> to
                            avoid charges, pay on time</h5>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <!-- /section -->
        <section class="wrapper bg-gray">
            <div class="container py-14 pt-md-0 pb-md-17 mt-1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">

                        <p class="lead text-center mb-2 py-12">Register your courses by filling the form appropriately
                        </p>
                        <form class="contact-form " method="post" action="" enctype="multipart/form-data">
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name">First Name *</label>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="surname" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_lastname">Last Name *</label>

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Jane" required>
                                        <label for="form_name">Middle Name *</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" required>
                                            <option selected>Gender *</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_lastname" type="text" name="surname" class="form-control"
                                            placeholder="Doe" required>
                                        <label for="form_lastname">Email *</label>

                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="" required>
                                        <label for="form_email">Phone no. *</label>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="date" name="email" class="form-control"
                                            placeholder="" required>
                                        <label for="form_email">Date of Birth *</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Matric number *</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="jane.doe@example.com" required>
                                        <label for="form_email">Student Code *</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" required>
                                            <option selected disabled value="">Select Falculty *</option>
                                            <option value="1">FACULTY OF BIOLOGICAL SCIENCES</option>
                                            <option value="2">FACULTY OF CLINICAL SCIENCE</option>
                                            <option value="2">FACULTY OF BASIC MEDICAL SCIENCE</option>
                                            <option value="2">FACULTY OF BIOLOGICAL SCIENCES</option>
                                            <option value="2">FACULTY OF PHYSICAL SCIENCES</option>
                                            <option value="2">FACULTY OF AGRICULTURE, FORESTRY AND <br /> WILDLIFE
                                                RESOURCE MANAGEMENT</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- /column -->

                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" required>
                                            <option selected disabled value="">Select Department *</option>
                                            <option value="1">DEPARTMENT OF BANKING AND FINANCE</option>
                                            <option value="2">DEPARTMENT OF ENVIRONMENTAL RESOURCE MANAGEMENT</option>
                                            <option value="2">DEPARTMENT OF BUSINESS MANAGEMENT</option>
                                            <option value="2">DEPARTMENT OF ENVIRONMENTAL RESOURCE MANAGEMENT</option>
                                            <option value="2">DEPARTMENT OF HUMAN NUTRITION AND DIETETICS</option>
                                            <option value="2">DEPARTMENT OF GEOGRAPHY AND ENVIRONMENTAL RESOURCE
                                                MANAGEMENT</option>
                                            <option value="2">DEPARTMENT OF PHYSIOLOGY</option>
                                            <option value="2">DEPARTMENT OF GUIDANCE AND COUNSELLING</option>
                                            <option value="2">DEPARTMENT OF POLICY AND ADMINISTRATIVE STUDIES</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" required>
                                            <option selected>Select type <span style="color: red;">*</span></option>
                                            <option value="1">NUC</option>
                                            <option value="2">CES</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="year" name="" class="form-control" placeholder=""
                                            required>
                                        <label for="form_email">Year</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" required>
                                            <option selected>Direct Entry *</option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- /column -->
                                <div class="col-12 text-center py-5">
                                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                        value="submit">
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /column -->
                </div>

            </div>
            <!-- /.container -->
        </section>
    </div>





    <footer class="bg-navy text-inverse">
        <div class="container py-10 py-md-15">

            <!--/div -->
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="assets/custom/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x"
                            alt="" width="180px" />
                        <p class="mb-4">© 2021 Unical GSS. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Etta Abgor Calabar, Cross River, Nigeria</address>
                        <a href="mailto:#">info@unicalgss.com</a><br />
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Support</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#about-gss">About Us</a></li>
                            <li><a href="#">Unical GSS</a></li>
                            <li><a href="#">Registration</a></li>
                            <li><a href="#">Pick courses</a></li>
                            <li><a href="#">Print Reciept</a></li>

                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Email</h4>
                        <p class="mb-5">
                            <a href="">help@myunicalportal.online</a>
                            <a href="">info@myunicalportal.online</a>

                        </p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->

                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>
</body>

</html>