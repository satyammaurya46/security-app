@extends('layout.master_layout')

@section('title','Guard-List')

@section('content')
    


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Gaurd List</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Gaurd Management</a></li>
                                 <li class="breadcrumb-item active">Gaurd List</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{route('add-guard')}}" class="btn btn-success">Add Gaurd</a>
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

                                {{-- <h4 class="header-title">Datatable Editable</h4> --}}
                                {{-- <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p> --}}
                                <input type="search" class="form-control mb-3 w-25" id="search"  name="search" placeholder="Search...">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Society Name</th>
                                                <th>Name</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Aadharcard</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($guard_list as $index => $row )
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{++$index}}</td>
                                                <td data-field="Society Name">{{$row->society}}</td>
                                                <td data-field="Name">{{$row->name}}</td>
                                                <td data-field="Mobile No">{{$row->number}}</td>
                                                <td data-field="Email">{{$row->email}}</td>
                                                <td data-field="Designation">{{$row->designation_category}}</td>
                                                <td data-field="Aadharcard"> @if($row->aadhar_card)
                                                    <a href="{{ asset('storage/app/public/uploads/aadhar_card/' . $row->aadhar_card) }}" target="_blank">View Aadhar</a>
                                                @else
                                                    No Aadhar Uploaded  
                                                @endif</td>
                                                <td style="width: 100px">
                                                    <a href="{{route('edit.guard',$row->id)}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm edit" data-bs-toggle="modal" data-bs-target="#deleteModal" title="delete" onclick="deleteData({{$row->id}})">
                                                        Delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
        </div>
    </div>    

<script>
         
         
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();
            $.ajax({
                url: "{{ route('guard-list') }}",
                type: "GET",
                data: {'search': query},
                success: function(data) {
                    $('#guardTable').html($(data).find('#guardTable').html());
                }
            });
        });
    });




        function deleteData(id) {
            $("#deleteForm").attr("action", '{{ url('admin/delete-guard') }}' + "/" + id);
        }
    
</script>
 @endsection