@extends('layouts.admin')

@section('title', 'User Manager List')

<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 50px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 50%;
        max-width: 500px;
    }

    /* Caption of Modal Image */
    .modal-content,
    #caption {
        margin: auto;
        display: block;
        width: 50%;
        max-width: 500px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }


    /* The Close Button */
    .close {
        position: absolute;
        top: 30px;
        right: 50px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }

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

<div id="toaster-container"></div>
@if(session()->has('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
@endif


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
                            <a title="Profile" href="#" class="open-modal" data-modal-id="myModal{{ $loop->index }}">
                                <img class="myImg"
                                    src="{{ asset('storage/' . $user->file_path) }}"
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

<!-- The Modals -->
@foreach($users as $key => $user)
    <div id="myModal{{ $loop->index }}" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img{{ $loop->index }}">
    </div>
@endforeach

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
    $(document).ready(function() {
        $('.open-modal').click(function(e) {
            e.preventDefault();
            var modalId = $(this).data('modal-id');
            var imgSrc = $(this).find('img').attr('src');
            $('#' + modalId + ' .modal-content').attr('src', imgSrc);
            $('#' + modalId).css('display', 'block');
        });

        $('.close').click(function() {
            $(this).closest('.modal').css('display', 'none');
        });
    });
</script>

    <!-- Toastr JS File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Set toastr options
        toastr.options = {
            timeOut: 4000, // Set default timeout to 3 seconds
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-center'
        };
    
        // Trigger a success notification
        toastr.success('Your success message here');
    </script>

@endsection
