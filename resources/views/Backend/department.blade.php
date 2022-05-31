@extends('layouts.inc.main')

@section('content')

@section('style')
{{--
<link rel="stylesheet" href="{{asset('widgets/assets/datatables/datatables.min.css')}}">
<link rel="stylesheet"
    href="{{asset('widgets/assets/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}"> --}}
@endsection

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
        <div class="col-lg-12 mb-3 ">
            <div class="d-flex align-items-center justify-content-between welcome-content">
                <div class="navbar-breadcrumb card">
                    <h4 class="mb-0">Welcome Admin</h4>
                </div>

            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title h5 mt-2 py-1">List of All Department Registered</h4>
                    </div>
                    <div class="">
                        <a href="{{route('departmentCreate')}}" class="btn  btn-primary float-right">Add
                            Department</a>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table">
                        <table id="department" class="table data-table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Account Number</th>
                                    <th scope="col">Account Type</th>
                                    <th scope="col">Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($departments as $department)


                                <tr>
                                    <th scope="row">{{$department->id}}</th>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->accountName}}</td>
                                    <td>{{$department->accountNumber}}</td>
                                    <td>{{$department->accountType}}</td>
                                    <td>{{date_format(date_create($department->created_at), "d M, Y")}}
                                    </td>


                                    <td>
                                        <a href="{{route('edit.department', $department->id)}}"
                                            class="btn btn-sm btn-warning">Edit</a>
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