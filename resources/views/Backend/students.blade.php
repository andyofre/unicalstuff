@extends('layouts.inc.main')

@section('content')
<style>
    th {
        text-transform: uppercase;

    }

    .table-bordered td {
        border: 1px solid #f7f7fd !important;
    }

    .table-bordered th {
        border: 1px solid #f7f7fd !important;

    }

    td {
        text-transform: capitalize;

    }

    .form-control {
        border: 1px solid #3a4155;
    }

    .dataTables_wrapper .dataTables_filter input {
        border-color: #78797c !important;
        padding-left: 3px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="d-flex align-items-center justify-content-between welcome-content">
                <div class="navbar-breadcrumb">
                    <h4 class="mb-0">Welcome Admin</h4>
                </div>

            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title h5 mt-2 py-1">List of all Registered Students</h4>
                    </div>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="department" class="table data-table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Martic No.</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>


                                @foreach ( $student as $student )

                                <tr>
                                    <th scope="row">{{$student->id}}</th>
                                    <td>{{$student->firstName}} {{$student->middleName}} {{$student->lastName}}</td>
                                    <td>{{$student->matricNumber}}</td>
                                    <td>{{$student->department_id->name}}</td>
                                    <td>{{$student->accountType}}</td>
                                    <td>{{$student->accountType}}</td>
                                    <td>{{$student->accountType}}</td>
                                    <td>{{$student->accountType}}</td>
                                    {{-- <td>{{$student->accountType}}</td> --}}

                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>


{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form action="" method="POST">

                    <div class="form-row">
                        <div class="col-md-12 mb-3 py-2">
                            <label for="validationCustom01">Department name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="name">
                            <div class="valid-feedback">

                            </div>
                        </div>

                        <div class="col-md-12 mb-3 py-2">
                            <label for="validationCustom03">Faculty</label>
                            <select name="" id="" class="form-control" name="faculty">
                                <option selected>Select</option>
                                @foreach ( $faculty as $faculty)

                                <option value="" style="text-transform: uppercase;">{{$faculty->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Account name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="accountName">

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Account Number</label>
                            <input type="text" class="form-control" id="validationCustom02" name="accountNumber">

                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Account Type</label>
                            <select name="accountType" id="" class="form-control" name="accountType">
                                <option selected>Select</option>
                                <option value="Savings">Savings</option>
                                <option value="Currents">Currents</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Amount</label>
                            <input type="text" id="" class="form-control" name="amount">

                        </div>

                    </div>
                    <div class="modal-footer mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div> --}}


@endsection

@section('title')
HOME
@endsection

@section('style')

@endsection

@section('script')
<script src="{{asset('widgets/assets/js/backend-bundle.min.js')}}"></script>

<!-- Flextree Javascript-->
<script src="{{asset('widgets/assets/js/flex-tree.min.js')}}"></script>
<script src="{{asset('widgets/assets/js/tree.js')}}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{asset('widgets/assets/js/table-treeview.js')}}"></script>

<!-- Masonary Gallery Javascript -->
<script src="{{asset('widgets/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('widgets/assets/js/imagesloaded.pkgd.min.js')}}"></script>

<!-- Mapbox Javascript -->
<script src="{{asset('widgets/assets/js/mapbox-gl.js')}}"></script>
<script src="{{asset('widgets/assets/js/mapbox.js')}}"></script>

<!-- Fullcalender Javascript -->
<script src='{{asset(' widgets/assets/vendor/fullcalendar/core/main.js')}}'></script>
<script src='{{asset(' widgets/assets/vendor/fullcalendar/daygrid/main.js')}}'></script>
<script src='{{asset(' widgets/assets/vendor/fullcalendar/timegrid/main.js')}}'></script>
<script src='{{asset(' widgets/assets/vendor/fullcalendar/list/main.jss')}}'></script>

<!-- SweetAlert JavaScript -->
<script src="{{asset('widgets/assets/js/sweetalert.js')}}"></script>


<script src="{{asset(' widgets/assets/js/vector-map-custom.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('widgets/assets/js/customizer.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('widgets/assets/js/chart-custom.js')}}"></script>

<!-- slider JavaScript -->
<script src="{{asset('widgets/assets/js/slider.js')}}"></script>

<!-- app JavaScript -->
<script src="{{asset('widgets/assets/js/app.js')}}"></script>
@endsection