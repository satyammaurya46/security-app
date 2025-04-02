@extends('layout.master_layout')

@section('title','Incidence-list')

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
                                     <h4>Incidence List</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Incidence List</a></li>
                                             {{-- <li class="breadcrumb-item active">Data Tables</li> --}}
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

            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            {{-- <h4 class="header-title">Buttons example</h4> --}}
                                            {{-- <p class="card-title-desc">The Buttons extension for DataTables
                                                provides a common set of options, API methods and styling to display
                                                buttons on a page that will interact with a DataTable. The core library
                                                provides the based framework upon which plug-ins can built.
                                            </p> --}}
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Society</th>
                                                    <th>Guard</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>Photos</th>
                                                    
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                       
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
                
               
            </div>
            <!-- end main content-->

        {{-- </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div> --}}
        

       

        <!-- JAVASCRIPT -->
        <script src="{{asset('theme/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('theme/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('theme/assets/libs/node-waves/waves.min.js')}}"></script>

         <!-- Required datatable js -->
         <script src="{{asset('theme/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Buttons examples -->
         <script src="{{asset('theme/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/jszip/jszip.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
         <!-- Responsive examples -->
         <script src="{{asset('theme/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('theme/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

          <!-- Datatable init js -->
        <script src="{{asset('theme/assets/js/pages/datatables.init.js')}}"></script>   
 

        <script src="{{asset('theme/assets/js/app.js')}}"></script>

 @endsection
