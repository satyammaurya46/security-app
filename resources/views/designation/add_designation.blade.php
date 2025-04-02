@extends('layout.master_layout')

@section('title','add-designation')


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
                                     <h4>Add Designation</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Designation</a></li>
                                             <li class="breadcrumb-item active">Add Designation</li>
                                         </ol>
                                 </div>
                             </div>
                             {{-- <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="" class="btn btn-success">Add Widget</a>
                                </div>
                             </div> --}}
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
                                            {{-- <h4 class="header-title">Validation type</h4> --}}
                                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p> --}}
            
                                            <form class="custom-validation" action="{{ route('store.designation') }}" method="POST" novalidate>
                                                @csrf
                                               
                                                <div class="mb-3">
                                                    <label>Cotegory<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="designation_category" id="designation_category" required placeholder="Type something" value="{{(!empty( $designation)? $designation->designation_category:'')}}"/>
                                                </div>
                                                
                                                <div class="mb-0">
                                                    <div> 
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                            Add
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
                        </div>                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
@endsection