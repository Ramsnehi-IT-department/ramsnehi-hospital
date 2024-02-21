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
            <li class="breadcrumb-item active"><a href="/career/index">Career</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<div class="container mx-end my-1">
    <div class="mb-2">
        <a href="{{ route('careers.create') }}" class="btn btn-sm btn-primary" data-toggle="tooltip"
            data-placement="top" title="Create New Admin"><i class="fas fa-plus"></i></a>
    </div>
</div>

<div class="container">
    <table class="table table-striped table-bordered" id="myTable2">
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
                        <span id="status{{ $opening->id }}"></span>
                        <div class="form-check form-switch">
                            <input data-id="{{ $opening->id }}" class="form-check-input toggle-class" type="checkbox"
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                data-off="InActive"
                                {{ $opening->status ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <a type="button"
                            href="{{ url('/openings/edit/' . $opening->id) }}"
                            class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Edit File"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<p>Opening Printer: {{ $openingPrinter }}</p>


<script>
    var openingPrinter = '{{ $openingPrinter }}';
</script>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this document?");
    }

</script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(function () {
        $('.toggle-class').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id'); // Use the correct variable name 'id'

            $.ajax({
                type: "post",
                dataType: "json",
                url: '/openings/changeStatus',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'status': status,
                    'id': id // Use the correct variable name 'id'
                },
            });
        });
    });

</script>

@endsection
