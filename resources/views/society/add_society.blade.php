@extends('layout.master_layout')

@section('title', 'Add Society')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Add Society </h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('society-list') }}">Society Mangement</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Society </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="container-fluid">

                <div class="page-content-wrapper">

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <h4 class="header-title">Add Society </h4> --}}
                                    {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p> --}}


                                    <form class="custom-validation" action="{{ route('store.society') }}" method="POST"
                                        novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Society Type*</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="society_type"
                                                    id="commercial" value="Commercial" required>
                                                <label class="form-check-label" for="commercial">Commercial</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="society_type"
                                                    id="residential" value="Residential" required>
                                                <label class="form-check-label" for="residential">Residential</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>Designation<span class="text-danger">*</span></label>
                                            <select class="form-control select2" name="designation" id="designation"
                                                required>
                                                <option value="">--Select Designation--</option>
                                            </select>

                                        </div>

                                        <div class="mb-3">
                                            <label>Society Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="society_name" id="society_name"
                                                required placeholder="Enter Society Name" value="{{(!empty($society)?$society->society_name:'')}}"/>
                                        </div>



                                        <div class="mb-3">
                                            <label>Address*</label>
                                            <div>
                                                <textarea class="form-control" name="address" id="address"
                                                required>{{(!empty($society)?$society->address:'')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>User Name*</label>
                                            <div>
                                                <input parsley-type="text" type="text" name="user_name" id="user_name"
                                                    class="form-control" required placeholder="Enter User Name" value="{{(!empty($society)?$society->user_name:'')}}" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Email*</label>
                                            <div>
                                                <input data-parsley-type="email" type="text" name="email"
                                                    id="email" class="form-control" required
                                                    placeholder="Enter Email" value="{{(!empty($society)?$society->email:'')}}" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>Mobile No.*</label>
                                            <div>
                                                <input data-parsley-type="number" type="text" name="mobile"
                                                    id="mobile" class="form-control" required
                                                    placeholder="Enter only numbers" value="{{(!empty($society)?$society->mobile:'')}}" />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>Password*</label>
                                            <div>
                                                <input type="password" id="password" name="password" class="form-control"
                                                    required placeholder="Password"  />
                                            </div>
                                            <div class="mt-2">
                                                <input type="password" class="form-control" required
                                                    data-parsley-equalto="#password" id="confirm_password"
                                                    name="confirm_password" placeholder="Re-Type Password" />
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Save
                                        </button>
                                        {{-- <button type="reset" class="btn btn-secondary waves-effect">
                                                            Cancel
                                                        </button> --}}
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->


            </div> <!-- end row -->

            {{-- </div> --}}


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    

    <!-- Display Success Message -->

    <script>
        $(document).ready(function() {

        });

        $("input[name='society_type']").click(function() {
            var selectedValue = $('input[name="society_type"]:checked').val();
            debugger;
            var option = '<option value="">--Select Designation--</option>';
            if (selectedValue == 'Commercial') {
                option += '<option value="Office admin">Office admin</option>';
                option += '<option value="Manager">Manager</option>';
                option += '<option value="Vice president">Vice president</option>';
                option += '<option value="President">President</option>';
            } else if (selectedValue == 'Residential') {
                option += '<option value="Manager">Manager</option>';
                option += '<option value="Chairman">Chairman</option>';
            }
            $("#designation").html(option);
        });
    </script>
@endsection
