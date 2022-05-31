@extends('layouts.inc.main')

@section('content')
@include('sweetalert::alert')

<style>
    .form-control {
        border: 1px solid gray;
    }
</style>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Add Department</h4>
        </div>
    </div>


    <div class="card-body">
        <form action="{{route('store.department')}}" method="POST" enctype="multipart/form-data">
            @include('inc.frontMessage')

            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3 py-2">
                    <label for="validationCustom01">Department name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="
                        validationCustom01" name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 py-2">
                    <label for="validationCustom03">Faculty</label>
                    <select class="form-control @error('accountName') is-invalid @enderror" id="validationCustom02"
                        name="faculty_id">
                        <option selected-force>Select</option>

                        @foreach ( $faculty as $faculty)

                        <option value="{{$faculty->id}}" style="text-transform: uppercase;">{{$faculty->name}}
                        </option>

                        @endforeach
                    </select>
                    @error('faculty_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Account name</label>
                    <input type="text" class="form-control @error('accountName') is-invalid @enderror"
                        id="validationCustom02" name="accountName" value="{{old('accountName')}}">
                    @error('accountName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Account Number</label>
                    <input type="text" class="form-control @error('accountNumber') is-invalid @enderror"
                        id="validationCustom02" name="accountNumber" value="{{old('accountNumber')}}">
                    @error('accountNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Account Type</label>
                    <select name="accountType" id="" class="form-control @error('accountType') is-invalid @enderror"
                        name="accountType">
                        {{old('accountType')}}
                        <option selected="" disabled="">Select</option>
                        <option value="Savings">Savings</option>
                        <option value="Currents">Currents</option>
                        <option value="Fixed Deposit">Fixed Deposit</option>
                    </select>
                    @error('accountType')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                {{-- <div class="col-md-6 mb-3 m-10">
                    <label for="validationCustom04">Date</label>
                    <input type="date" id="" class="form-control @error('accountNumber') is-invalid @enderror"
                        name="date_created" value="{{old('date_created')}}">

                    @error('date_created')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}

            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
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