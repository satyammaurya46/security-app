@extends('layout.master_layout')

@section('title','About Us')

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
                                     <h4>About Us</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">About Us</a></li>
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
                                                    <label>Title*</label>
                                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                                </div>
            
                                                <div class="mb-3">
                                                    <label>Description</label>
                                                    <div>
                                                        <input type="email" class="form-control" required
                                                                parsley-type="text" placeholder="Discription"/>
                                                    </div>
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label>URL</label>
                                                    <div>
                                                        <input parsley-type="url" type="url" class="form-control"
                                                                required placeholder="URL"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Digits</label>
                                                    <div>
                                                        <input data-parsley-type="digits" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only digits"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Number</label>
                                                    <div>
                                                        <input data-parsley-type="number" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only numbers"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Alphanumeric</label>
                                                    <div>
                                                        <input data-parsley-type="alphanum" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter alphanumeric value"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Textarea</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5" placeholder="Type here"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <div> --}}
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
                                </div> <!-- end col -->
            
                                
                            </div> <!-- end row -->

                        {{-- </div> --}}
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
              
  

@endsection