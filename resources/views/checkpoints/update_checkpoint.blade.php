@extends('layout.master_layout')

@section('title','Update-Checkpoints')

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
                                     <h4>Update Checkpoint</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                             {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Checkpoint Management</a></li> --}}
                                             <li class="breadcrumb-item active">Update Checkpoint</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                {{-- <div class="float-end d-none d-sm-block">
                                    <a href="" class="btn btn-success">Add Widget</a>
                                </div> --}}
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
                                            {{-- <h4 class="header-title">Validation type</h4> --}}
                                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p> --}}
            
                                            <form class="custom-validation" action="{{route('update.checkpoint', $checkpoint->id)}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="society_name" class="form-label">Society Name*</label>
                                                    <select class="form-select" id="society_name" name="society_name" required>
                                                        <option value="" disabled selected>Select Society</option>
                                                        <option value="Green Valley"{{ $checkpoint->society_name =='Green Valley'? 'selected': '' }}>Green Valley</option>
                                                        <option value="Sunrise Apartments"{{ $checkpoint->society_name =='Sunrise Apartments'? 'selected': '' }}>Sunrise Apartments</option>
                                                        <option value="Downtown Residency"{{ $checkpoint->society_name =='Downtown Residency'? 'selected': '' }}>Downtown Residency</option>
                                                        <option value="Elite Towers"{{ $checkpoint->society_name =='Elite Towers'? 'selected': '' }}>Elite Towers</option>
                                                    </select>
                                                </div>
            
                                                {{-- <div class="mb-3">
                                                    <label>Equal To</label>
                                                    <div>
                                                        <input type="password" id="pass2" class="form-control" required
                                                                placeholder="Password"/>
                                                    </div>
                                                    <div class="mt-2">
                                                        <input type="password" class="form-control" required
                                                                data-parsley-equalto="#pass2"
                                                                placeholder="Re-Type Password"/>
                                                    </div>
                                                </div> --}}
            
                                                <div class="mb-3">
                                                    <label>Checkpoint Name*</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                parsley-type="text" name="checkpoint_name" id="checkpoint_name" value="{{(!empty($checkpoint)?$checkpoint->checkpoint_name: '')}}" placeholder="Enter Checkpoint Name*"/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Location*</label>
                                                    <div>
                                                        <input parsley-type="url" type="text" class="form-control"
                                                              name="location" id="location" value="{{(!empty($checkpoint)?$checkpoint->location: '')}}"  placeholder="Enter Location"required/>
                                                    </div>
                                                </div>
                                                {{-- <div class="mb-3">
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
                                                </div> --}}
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