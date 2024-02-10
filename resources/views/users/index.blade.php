@extends('layouts.admin')

@section('title', 'User Manager List')

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

    .receipt {
    font-family: Arial, sans-serif;
    /* Add styles for the receipt layout */
}

</style>

@section('content')
<!-- Start Page Title -->
<div class="pagetitle">
    <h1>User Manager</h1>
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
        @if(auth()->user()->role == 'Admin')
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary" data-toggle="tooltip"
                data-placement="top" title="Create New Admin"><i class="fas fa-plus"></i></a>
        @endif
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="container" id="printTable">
    <table class="table table-striped table-bordered" id="myTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Role</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                @if(auth()->user()->role == 'Admin')
                    <th colspan="2">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($user->file_path)
                            <a title="Profile"
                                href="{{ asset('storage/' . $user->file_path) }}">
                                <img src="{{ asset('storage/' . $user->file_path) }}"
                                    alt="{{ $user->file_path }}" style="width: 100px">
                            </a>
                        @else
                            <img src="{{ asset('/admin-assets/img/user.jpg') }}"
                                alt="{{ $user->name }}" style="height: 100px; width: 100px;">
                        @endif
                    </td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span id="status{{ $user->id }}"></span>
                        <div class="form-check form-switch">
                            <input data-id="{{ $user->id }}" class="form-check-input toggle-class" type="checkbox"
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                data-off="InActive"
                                {{ $user->status ? 'checked' : '' }}>
                        </div>
                    </td>
                    <td>
                        <a type="button" href="{{ url('/users/edit/' . $user->id) }}"
                            class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Edit File"><i class="fas fa-pencil-alt"></i></a>
                        <a type="button" href="{{ url('/users/delete/' . $user->id) }}"
                            class="btn btn-primary btn-sm" onclick="return confirmDelete()" data-toggle="tooltip"
                            data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <!-- Button to trigger printing of receipts to two separate printers -->
    <button onclick="printReceipts()" class="btn btn-sm btn-primary">Print Receipts</button>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to remove this user?");
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
                url: '/users/changeStatus',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'status': status,
                    'id': id // Use the correct variable name 'id'
                },
            });
        });
    });

</script>


<script>
    function printReceipts() {
        // Get the HTML content of the table
        var printContents = document.getElementById('printTable').innerHTML;
        var originalContents = document.body.innerHTML;

        // Replace the current page content with the table content
        document.body.innerHTML = printContents;

        // Print the receipt to the first printer
        window.print();

        // Restore the original page content
        document.body.innerHTML = originalContents;

        // Prompt the user to select the second printer
        setTimeout(function () {
            // Get the HTML content of the table (again)
            var printContents = document.getElementById('printTable').innerHTML;

            // Replace the current page content with the table content (again)
            document.body.innerHTML = printContents;

            // Print the receipt to the second printer
            window.print();
        }, 1000); // Delay to allow the first print job to finish
    }
</script>

@endsection
