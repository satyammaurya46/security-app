@extends('layout.master_layout')

@section('title','Set-timezone')

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
                            <h4>Update Timezone</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Set Timezone</a></li>
                                {{-- <li class="breadcrumb-item active">Form Validation</li> --}}
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="" class="btn btn-success">Add Widget</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            {{-- <div class="page-content-wrapper"> --}}

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Validation type</h4> --}}
                                {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}

                                <form class="custom-validation" action="#">
                                    <div class="mb-3">
                                        <label>Current Date/Time*</label>
                                        <input type="text" class="form-control" required placeholder="Type something"
                                            name="current_datetime" value="{{now()->format('Y-m-d H:i:s')}}" readonly required/>
                                    </div>

                                    <div class="mb-3">
                                        <label>Current Timezone*</label>
                                        <div>
                                            <input type="text" class="form-control" required parsley-type="email"
                                                name="timezone" value="{{config('app.timezone')}}" readonly required/>
                                        </div>
                                    </div>

                                    <div class=" mb-3">
                                        <label for="timezoneSelect" class="form-label">Select Timezone*</label>
                                        <select class="form-select" id="timezoneSelect" name="selected_timezone" required>
                                            <option value="">-- Select Timezone --</option>
                                            @foreach (timezone_identifiers_list() as $timezone )
                                               <option value="{{ $timezone  }}">{{ $timezone }}</option>
                                            
                                            @endforeach
                                            {{-- <option value="UTC-12:00">UTC-12:00</option>
                                            <option value="UTC-11:00">UTC-11:00</option>
                                            <option value="UTC-10:00">UTC-10:00 (Hawaii)</option>
                                            <option value="UTC-09:00">UTC-09:00 (Alaska)</option>
                                            <option value="UTC-08:00">UTC-08:00 (Pacific Time)</option>
                                            <option value="UTC-07:00">UTC-07:00 (Mountain Time)</option>
                                            <option value="UTC-06:00">UTC-06:00 (Central Time)</option>
                                            <option value="UTC-05:00">UTC-05:00 (Eastern Time)</option>
                                            <option value="UTC-04:00">UTC-04:00 (Atlantic Time)</option>
                                            <option value="UTC+00:00">UTC+00:00 (Greenwich Mean Time)</option>
                                            <option value="UTC+05:30">UTC+05:30 (India Standard Time)</option>
                                            <option value="UTC+08:00">UTC+08:00 (China Standard Time)</option>
                                            <option value="UTC+09:00">UTC+09:00 (Japan Standard Time)</option>
                                            <option value="UTC+12:00">UTC+12:00 (New Zealand Time)</option> --}}
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Update
                                    </button>
                                    {{-- <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button> --}}
                            </div>
                        </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            {{-- </div> <!-- end col --> --}}


        </div> <!-- end row -->

    </div>


</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        let timezoneDropdown = document.getElementById("timezoneSelect");

        for (let i = 0; i < timezoneDropdown.options.length; i++) {
            if (timezoneDropdown.options[i].value.includes(userTimezone)) {
                timezoneDropdown.options[i].selected = true;
                break;
            }
        }
    });
</script>




@endsection