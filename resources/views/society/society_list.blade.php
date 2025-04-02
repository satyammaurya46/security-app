@extends('layout.master_layout')

@section('title', 'Society List')

@section('content')
<div class="main-content">
    <div class="page-content">
        <!-- Start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Societies List</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Society Management</a></li>
                                <li class="breadcrumb-item active">Society List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{ route('add.society') }}" class="btn btn-success">Add Society</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page title -->

        <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <input type="search" class="form-control mb-3 w-25" id="datatable-search-input" placeholder="Search...">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Society Name</th>
                                                <th>Address</th>
                                                <th>User Name</th>
                                                <th>Mobile No</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($society_list as $index => $row)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $row->society_name }}</td>
                                                <td>{{ $row->address }}</td>
                                                <td>{{ $row->user_name }}</td>
                                                <td>{{ $row->mobile }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->designation }}</td>
                                                <td>{{ $row->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{route('edit.society',[$row->id])}}" class="btn btn-outline-secondary btn-sm" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-outline-secondary btn-sm" onclick="deleteData({{ $row->id }})" title="Delete">
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
        const searchInput = document.getElementById("datatable-search-input");
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

    function deleteData(id) {
            $("#deleteForm").attr("action", '{{ url('admin/delete-society') }}' + "/" + id);
        }
</script>
@endsection
