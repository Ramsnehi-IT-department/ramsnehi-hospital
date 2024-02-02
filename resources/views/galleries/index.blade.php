@extends('layouts.admin')

{{-- @section('title', 'Quality Department') --}}

<style>
    .round-image {
        border-radius: 50%;
        margin-right: 10px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    th,
    td {
        vertical-align: middle;
    }

</style>

@section('content')
<!-- Start Page Title -->
<div class="pagetitle">
    <h1>Gallery</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<div class="container mx-end my-1">
    <div class="mb-2">
        @if(auth()->user())
            <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary"
                data-toggle="tooltip" data-placement="top" title="Add New Image">
                <i class="fas fa-plus"></i>
            </a>
        @endif
    </div>
</div>

<div class="container">
    <table class="table table-striped table-bordered" id="myTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Page</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">File</th>
                @if(auth()->user()->role == 'Admin')
                    <th colspan="2">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $key => $gallery)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $gallery->page_url }}</td>
                    <td>
                        @if($gallery->file)
                            <a href="">
                                <img class="round-image"
                                    src="{{ asset('storage/' . $gallery->file) }}"
                                    style="height: 100px; width: 100px;">
                            </a>
                        @else
                            <span>No image found!</span>
                        @endif
                    </td>
                    <td>{{ $gallery->description }}</td>
                    @if(auth()->user()->role == 'admin')
                        <td>
                            <a type="button" href="#" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                data-placement="top" title="View"><i class="fas fa-pencil-alt"></i></a>
                            <a type="button" href="#" class="btn btn-primary btn-sm" onclick="return confirmDelete()"
                                data-toggle="tooltip" data-placement="top" title="Delete Quarter">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this document?");
    }
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
@endsection
