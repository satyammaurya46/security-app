@extends('layout.master_layout')

@section('title','Login-Logs')

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
                                     <h4>Login Logs</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Login Logs</a></li>
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
                                                    <th>Date & Time</th>
                                                    <th>User</th>
                                                    <th>Ip Address</th>
                                                    <th>Browser</th>
                                                    <th>Platform</th>
                                                    <th>Login Status</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>

                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>

                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>

                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>

                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                       
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content --

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
