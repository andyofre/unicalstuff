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
        <form action="{{route('store.course')}}" method="POST" enctype="multipart/form-data">
            @include('inc.frontMessage')

            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3 py-2">
                    <label for="validationCustom01">Course title</label>
                    <input type="text" class="form-control  @error('course_title') is-invalid @enderror"
                        id="validationCustom01" name="course_title">
                    @error('course_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>







                <div class="col-md-6 mb-3 py-2">
                    <label for="validationCustom02">Course Code</label>
                    <input type="text" class="form-control @error('course_code') is-invalid @enderror"
                        id="validationCustom02" name="course_code" value="{{old('course_code')}}">
                    @error('course_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Course Amount</label>
                    <input type="text" class="form-control @error('course_amount') is-invalid @enderror"
                        id="validationCustom02" name="course_amount" value="{{old('course_amount')}}"
                        placeholder="N 8,000">
                    @error('course_amount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>




                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Course Details</label>
                    <textarea class="form-control @error('course description') is-invalid @enderror"
                        id="validationCustom02" name="course_description" style="height:48px; resize: none"></textarea>
                    @error('course description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>





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