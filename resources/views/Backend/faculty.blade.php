@extends('layouts.inc.main')

@include('sweetalert::alert')

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
                        <h4 class="card-title h5 mt-2 py-1">List Of all Faculties Registered</h4>
                    </div>
                    <div class="">
                        <button type="button" class="btn  btn-primary float-right" data-toggle="modal"
                            data-target="#facultyModal">Add
                            Faculty</button>

                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="faculty" class="table data-table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Faculty Name</th>
                                    <th scope="col">Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($faculty as $faculty )

                                <tr>
                                    <th scope="row">{{$faculty->id}}</th>
                                    <td style="text-transform: capitalize;">{{$faculty->name}}</td>
                                    <td>{{date_format(date_create($faculty->created_at),"d M,Y")}}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <button class=" btn btn-sm btn-danger ml-3" data-toggle="modal"
                                            data-target="#exampleModal">Delete</button>
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








{{-- Adding faculties modal form --}}



<div class="modal modal-dialog-centered  fade" id="facultyModal" tabindex="-1" aria-labelledby="facultyLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog py-3" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="facultyModalLabel">Add Faculty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>


            <div class="modal-body">
                <form action="{{route('add.faculty')}}" method="POST" id="faculty_form">
                    @csrf
                    @include('inc.frontMessage')

                    <p class="text-danger text-center" id="facultError"></p>


                    <div class="form-group m-3 py-3">
                        <label class="control-abel col-sm-3 align-self-center" for="faculty">Faculty</label>
                        <div class="col-md-12">
                            <input type="text" id="faculty_input"
                                class=" form-control @error('name') is-invalid @enderror" placeholder="Enter Faculty"
                                style="border:1px solid #9696eb" name="name" id="name">

                            @error('name')
                            <span class=" invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer mt-3">
                        <div id="faculty_form_submit_button" class="btn btn-primary">
                            Add faculty
                        </div>
                        {{-- <button type="submit" class="btn btn-primary" onclick="storeData()">Add Faculty</button>
                    </div> --}}
                </form>
            </div>


        </div>
    </div>
</div>


{{-- Delete confirmation alert --}}

<div class="modal modal-dialog-centered  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="py-3 mx-5"> Are you sure you want to delete this Faculty?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href=" " class="btn btn-danger">Yes</a>
                {{-- {{route('delete.faculty', $faculty->id)}} --}}
            </div>
        </div>
    </div>
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


<script>
    // function storeData(){
    //     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    //     var name = $('#name').val();

    //     $('#facultError').addClass('d-none');

    //     $(ajax{
    //         type: 'POST',
    //         url: "{{route('add.faculty')}}",
    //         data: {_token: CSRF_TOKEN,
    //             name:name,
    //         },
    //         success: function (data) {
    //             alert("Successful");
    //         },
    //         errors: function (data){
    //             var errors = data.responseJSON;
    //             if($.isEmptyObject(errors) == false){
    //                 $.each(errors.errors, function (key, value){
    //                     var ErrorID = '#' + key + 'Error';
    //                     $(ErrorID).removeClass('d-none');
    //                     $(ErrorID).text(value);
    //                 })
    //             }
    //         }
    //     });

    // }




     //Sugaray script for the add faculty form
     let fform = document.querySelector("#faculty_form");
    let fformInput = fform.querySelector("#faculty_input");
    let ffbutton = document.querySelector("#faculty_form_submit_button");
    ffbutton.addEventListener("click", ()=>{
        if(fformInput.value == ""){
            let errTag = document.querySelector("#facultError");
            errTag.textContent = "faculty is required";
            
        }else {
            fform.submit();
        }
    });
</script>

{{-- <script>
    $(function(){
    $(document).on('click', '#delete', function (e){
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: 'Are your sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete faculty'
        }).then((result) => {
            if(result.isconfirmed){
                window.location.href = link
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
    });
</script> --}}

{{-- <script>
    $(document).ready(function(){

$('#formSubmit').click(function(e){

    e.preventDefault();

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

        }

    });

    $.ajax({

        url: "{{ url('http://127.0.0.1:8000/user/faculty-store') }}",

        method: 'post',

        data: {

            name: $('#name').val(),

        },

        success: function(result){

            if(result.errors)

            {

                $('.alert-danger').html('');


                $.each(result.errors, function(key, value){

                    $('.alert-danger').show();

                    $('.alert-danger').append('<strong>'+value+'</strong>');

                });

            }

            else

            {
                $('.alert-danger').hide();

                $('#faculty').modal('hide');

            }

        }
    });

});

});

</script> --}}
<script>

</script>

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