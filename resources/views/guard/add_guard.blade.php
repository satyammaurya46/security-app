@extends('layout.master_layout')

@section('title','add-guard')

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
                                     <h4>Add Guards</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Gaurd Mangement</a></li>
                                             <li class="breadcrumb-item active">Add Guard</li>
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
            
                                            <form class="custom-validation" action="{{route('store.guard')}}" method="POST" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="society" class="form-label">Society<span class="text-danger">*</span></label>
                                                    <select class="form-select" id="society" name="society" required>
                                                        <option value="" disabled selected>Select Society</option>
                                                        <option value="Green Valley">Green Valley</option>
                                                        <option value="Sunrise Apartments">Sunrise Apartments</option>
                                                        <option value="Downtown Residency">Downtown Residency</option>
                                                        <option value="Elite Towers">Elite Towers</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="designation_category" class="form-label">Designation Category<span class="text-danger">*</span></label>
                                                    <select class="form-select" id="designation_category" name="designation_category" required>
                                                        <option value="" disabled selected>Select Designation</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Supervisor">Supervisor</option>
                                                        <option value="Technician">Technician</option>
                                                        <option value="Security Guard">Security Guard</option>
                                                        <option value="Clerk">Clerk</option>
                                                    </select>
                                                </div>
            
                                                <div class="mb-3">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                            name="name" id="name"   parsley-type="text" placeholder="Enter Name "/>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email">Email<span class="text-danger">*</span></label>
                                                    <div>
                                                        <input parsley-type="email" type="email" class="form-control"
                                                            id="email" name="email"    required placeholder="Enter Email"/>
                                                    </div>
                                                </div>
                                               
                                                <div class="mb-3">
                                                    <label for="number">Number<span class="text-danger">*</span></label>
                                                    <div>
                                                        <input data-parsley-type="number" type="number"
                                                                class="form-control" required
                                                              id="number" name="number" placeholder="Enter only numbers"/>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="mb-3">
                                                    <label for="aadhar_card" class="form-label">Upload Aadhar Card<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="file" id="aadhar_card" name="aadhar_card" accept=".jpg, .jpeg, .png, .pdf" required>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="pan_card" class="form-label">Upload PAN Card<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="file" id="pan_card" name="pan_card" accept=".jpg, .jpeg, .png, .pdf" required>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="confirm_password" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" data-parsley-type="#password" placeholder="Re-enter password" required>
                                                    <small id="passwordHelp" class="text-danger d-none">Passwords do not match!</small>
                                                </div>

                                                <div class=" mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="police_verification" name="police_verification" value="1" >
                                                        <label class="form-check-label" for="police_verification"  required>
                                                            Police Verification
                                                        </label>
                                                    </div>
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