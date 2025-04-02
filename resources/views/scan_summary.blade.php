@extends('layout.master_layout')

@section('title', 'Scan Summary')

@section('content')

<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>SCAN SUMMARY</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Scan summary</a></li>
                                {{-- <li class="breadcrumb-item active">Designation List</li> --}}
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{route('add-designation')}}" class="btn btn-success">Add Designation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Scan Summary</h4>
                                {{-- <div class="main-content"> --}}
                                    <div class="box-body table-responsive">
                                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-6">
                                                    <div id="example1_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div style="overflow-x: auto;"> <!-- Added div for horizontal scrolling -->
                                                        <table id="example1" class="table table-bordered table-striped f1 dataTable no-footer" role="grid" aria-describedby="example1_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">Society Name</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43px;">Guard Name</th>
                                                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" style="width: 32px;">Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">00am-01am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">01am-02am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">02am-03am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">03am-04am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">04am-05am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">05am-06am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">06am-07am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">07am-08am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">08am-09am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">09am-10am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">10am-11am</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">11am-12pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">12pm-01pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">01pm-02pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">02pm-03pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">03pm-04pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">04pm-05pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">05pm-06pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">06pm-07pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">07pm-08pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">08pm-09pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">09pm-10pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">10pm-11pm</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">11pm-12am</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Your existing table rows go here -->
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- End of div for horizontal scrolling -->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                                            <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                                                            <li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                                

                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>  
    </div>
</div>          

@endsection 