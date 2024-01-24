@extends('layouts.admin')

@section('title', 'Opening')

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
    <h1>Opening</h1>
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
        <a href="{{ route('openings.create') }}" class="btn btn-sm btn-primary" data-toggle="tooltip"
            data-placement="top" title="Create New Admin"><i class="fas fa-plus"></i></a>
    </div>
</div>

<div class="container">
    <table class="table table-striped table-bordered" id="myTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Sub-Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($openings as $key => $opening)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $opening->title }}</a></td>
                    <td>{{ $opening->sub_title }}</td>
                    <td>{{ $opening->created_at }}</td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input toggle-status" type="checkbox" id="flexSwitchCheck{{ $key }}"
                                data-opening-id="{{ $opening->id }}"
                                {{ $opening->status ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <a type="button" href="{{ url('/openings/edit/' . $opening->id) }}"
                            class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Edit File"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this document?");
    }

</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('.toggle-status').on('change', function () {
            var openingId = $(this).data('opening-id');
            var status = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: '/update-opening-status/' + openingId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status,
                },
                success: function (response) {
                    console.log(response);
                    // You can handle the response here if needed
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });
    });

</script>

@endsection
