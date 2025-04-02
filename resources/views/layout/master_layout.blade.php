<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title> Admin | @yield('title','Alert-Security')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesdesign" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.ico')}}">
   <!-- CDN Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- #region -->
  <link href="{{asset('theme/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('theme/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('theme/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap Css -->
  <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{asset('theme/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{asset('theme/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{asset('theme/assets/libs/jquery/jquery.min.js')}}"></script>
</head>

<body data-sidebar="dark">

  <!-- Begin page -->
  <div id="layout-wrapper">

    @include('layout.header')

    <!-- ========== Left Sidebar Start ========== -->

    @include('layout.sidebar')

    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    @yield('content')

    <!-- End Page-content -->

    @include('layout.footer')


  </div>
  <!-- socity delete -->
  <div class="modal fade staticBackdrop" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Record Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are You sure delete this record ?</p>
            </div>
            <div class="modal-footer">
              <form id="deleteForm" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger waves-effect waves-light">Yes,Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>
  
  <!-- JAVASCRIPT -->
  <script src="{{asset('theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/node-waves/waves.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/select2/js/select2.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
  <script src="{{asset('theme/assets/libs/parsleyjs/parsley.min.js')}}"></script>

  <script src="{{asset('theme/assets/js/pages/form-validation.init.js')}}"></script>
  <script src="{{asset('theme/assets/js/pages/form-advanced.init.js')}}"></script>
  <script src="{{asset('theme/assets/js/app.js')}}"></script>

</body>

</html>