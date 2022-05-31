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
    <section class="wrapper bg-ash">
        <div class="container pt-18 pb-5" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">
                `
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-2">
                    <h5 class="display-6 mb-10 px-xl-14">Validate your registration below to continue<br />
                    </h5>
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
                <div class="card mt-5 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">


                    <p class="lead text-center mb-2 py-12">Validate registration to proceed your Course registrations
                    </p>
                    <form class="contact-form " method="post" action="{{route('check.student')}}"
                        enctype="multipart/form-data">
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger alert alert-danger fade show">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif <br /><br />


                        @if(Session::has('error_message'))
                        <div class="alert alert-danger   fade show" role="alert">

                            {{Session::get('error_message')}}
                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span>&times;</span>
                            </button> --}}
                        </div>
                        @endif
                        <div class="messages"></div>
                        <div class="row gx-4 mx-15">
                            <div class="col-md-12">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text"
                                        name="matricNumber @error('matricNumber') is-invalid @enderror"
                                        class=" form-control" placeholder="Jane" required>
                                    @error('matricNumber')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <label for="form_name">Matric Number/Registration Code</label>


                                </div>
                            </div>


                            <!-- /column -->
                            <div class="col-12 text-center py-5">
                                <button type="submit" class="btn btn-primary rounded-pill btn-send mb-3">Sumbit</button>
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

@endsection