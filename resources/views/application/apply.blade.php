@extends('layouts.custom')

@section('contents')

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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white"
        data-image-src="assets/custom/bggs.jpg">
        <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start"
                    data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h3 class="display-5 mb-5 g-4 text-white">Unical General studies and communication
                        skills<br />(GSS) Course Registration </h3>
                    <p class="lead fs-lg lh-sm mb-7 pe-xl-10">Register a course following the appropriate steps
                        below.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                        data-group="page-title-buttons" data-delay="900">
                        <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Register</a></span>
                        <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Print Reciept</a></span>
                    </div>
                </div>
                <!--/column -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->


    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-14 pt-md-0 pb-md-17 mt-1">

            <!-- /.row -->
            <div class="row ">
                <div class="col-xl-12 mx-auto">
                    <h2 class="fs-15 text-uppercase text-primary mb-3 text-center px-4 pt-14">Registration is
                        ongoing</h2>
                    <h5 class="display-6 mb-13 text-center ">Late registrations attract's penalty charges, <br />pay
                        on time to avoid charges</h5>
                    <!--/.pricing-wrapper -->
                    <div class="row gx-md-9 gx-xl-12 gy-10" id="about-gss">
                        <div class="col-md-11 card mx-auto py-7 m-4" id="steps">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5 mt-3"><i
                                            class="uil uil-comment-exclamation"></i></span>
                                </div>
                                <div class="mt-3">
                                    <h4>About Unical GSS</h4>
                                    <p class="mb-0 py-5">The University of Calabar Centre for General Studies and
                                        Communication Skills, (GSS) offers programmes of study which are aimed at
                                        stimulating and broadening the student’s awareness and knowledge in relevant
                                        fields outside his/her immediate area of specialization.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-5 card mx-auto py-4  m-4" id="steps">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i
                                            class="uil uil-comment-exclamation"></i></span>
                                </div>
                                <div>
                                    <h3>Step 1</h3>
                                    <h4>Getting started</h4>
                                    <p class="mb-0 py-5">Getting started, you visit course registration link or
                                        click on register to proceed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-5 card mx-auto py-4  m-4" id="steps">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i
                                            class="uil uil-comment-exclamation"></i></span>
                                </div>
                                <div>
                                    <h3>Step 2</h3>
                                    <h4>Registration</h4>
                                    <p class="mb-0 py-3">Proceed by filling the given form appropriately, and
                                        afterwards, you will be prompt to make payment.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-5 card mx-auto py-4  m-4" id="steps">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i
                                            class="uil uil-comment-exclamation"></i></span>
                                </div>
                                <div>
                                    <h3>Step 3</h3>
                                    <h4>Make Payment</h4>
                                    <p class="mb-0 py-3">After the registration step you have to make payments, late
                                        registration attract's charges.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /column -->

                        <div class="col-md-5 card mx-auto py-4  m-4" id="steps">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i
                                            class="uil uil-comment-exclamation"></i></span>
                                </div>
                                <div>
                                    <h3>Step 4</h3>
                                    <h4>Get Reciept</h4>
                                    <p class="mb-0 py-3">Generate a reciept to have a prove of payment.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</div>

@endsection