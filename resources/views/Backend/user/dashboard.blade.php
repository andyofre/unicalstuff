@extends('layouts.inc.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex align-items-center justify-content-between welcome-content">
                <div class="navbar-breadcrumb">
                    <h4 class="mb-0">Welcome Admin</h4>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                {{-- <div class="col-md-6">
                    <div class="card card-block card-stretch card-height rtl-mode ">
                        <div class="card-body">
                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-danger">{{number_format($student)}}</h3>
                                <div class="bg-danger icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                    <i class="lar la-user"></i>
                                </div>
                            </div>
                            <h4>Students</h4>
                            <div class="mt-1">
                                <p class="mb-0"> </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="card card-block card-stretch card-height rtl-mode">
                        <div class="card-body">
                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-primary">{{number_format($faculty)}}</h3>
                                <div class="bg-primary icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                    <i class="lar la-hospital"></i>
                                </div>
                            </div>
                            <h4>Faculties</h4>
                            <div class="mt-1">
                                <p class="mb-0"> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block card-stretch card-height rtl-mode">
                        <div class="card-body">
                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-info">{{number_format($department)}}</h3>
                                <div class="bg-info icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                    <i class="las la-desktop"></i>
                                </div>
                            </div>
                            <h4>Departments</h4>
                            <div class="mt-1">
                                <p class="mb-0"> </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card card-block card-stretch card-height rtl-mode ">
                        <div class="card-body">
                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                <h3 class="text-danger">{{number_format($student)}}</h3>
                                <div class="bg-danger icon iq-icon-box-2 mr-2 rounded rtl-mr-0  rtl-ml-2">
                                    <i class="lar la-folder-open"></i>
                                </div>
                            </div>
                            <h4>Courses</h4>
                            <div class="mt-1">
                                <p class="mb-0"> </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Page end  -->
</div>
@endsection

@section('title')
HOME
@endsection

@section('style')

@endsection

@section('script')

@endsection