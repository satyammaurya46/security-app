@extends('layout.master_layout')

@section('title','designation-list')

@section('content')

<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Editable Table</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Designation</a></li>
                                <li class="breadcrumb-item active">Designation List</li>
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
                                {{-- <h4 class="header-title">Designation List</h4> --}}
                                <input type="search" class="form-control mb-3 w-25" id="designation-search-input" placeholder="Search...">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($designation_list as $index => $list)
                                            <tr>
                                                <td style="width: 80px">{{ ++$index }}</td>
                                                <td>{{ $list->designation_category }}</td>
                                                <td>
                                                    <a href="{{route('edit-designation', $list->id)}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="confirmDelete({{ $list->id }})" title="Delete">
                                                        <i class="fa fa-fw fa-trash text-danger"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>  
    </div>
</div>        

<script>
     document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("designation-search-input");
        const table = document.getElementById("myTable");
        const rows = table.getElementsByTagName("tr");
        
        searchInput.addEventListener("keyup", function () {
            const filter = searchInput.value.toLowerCase();
            
            for (let i = 1; i < rows.length; i++) { // Skipping the header row
                let cells = rows[i].getElementsByTagName("td");
                let rowContainsFilter = false;
                
                for (let cell of cells) {
                    if (cell.textContent.toLowerCase().includes(filter)) {
                        rowContainsFilter = true;
                        break;
                    }
                }
                
                rows[i].style.display = rowContainsFilter ? "" : "none";
            }
        });
    });

    function confirmDelete(id) {
        $("#deleteForm").attr("action", '{{ url('admin/delete-designation') }}' + "/" + id);
    }

</script>

@endsection
