@extends('layout.master_layout')

@section('title','Checkpoint-list')

@section('content')
    
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Checkpoints List</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Checkpoints Mangement</a></li>
                                 <li class="breadcrumb-item active">Checkpoint List</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{route('checkpoint.create')}}" class="btn btn-success">Add Checkpoint</a>
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

                                {{-- <h4 class="header-title">Datatable Editable</h4>
                                <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p> --}}
                                <input type="search" class="form-control mb-3 w-25" id="designation-search-input" placeholder="Search...">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Society Name</th>
                                                <th>Checkpoint Name</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($checkpoint as $index=>$row )
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{++$index}}</td>
                                                <td data-field="Society Name">{{$row->society_name}}</td>
                                                <td data-field="Checkpoint Name">{{$row->checkpoint_name}}</td>
                                                <td data-field="Location">{{$row->location}}</td>
                                                <td style="width: 100px">
                                                    <a href="{{route('edit.checkpoint', $row->id)}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteCheckpoint({{$row->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-outline-secondary btn-sm "  title="delete">
                                                        <i class="fa fa-fw fa-trash text-danger"></i>Delete</i>
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
            <script>

                function deleteCheckpoint(id) {
                    $("#deleteForm").attr("action", '{{ url('admin/delete-checkpoints') }}' + "/" + id);
                }
            
            </script>
 @endsection