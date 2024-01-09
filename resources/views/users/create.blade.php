@extends('layouts.admin')

@section('title', 'Create New Admin')

@section('content')
    <div class="container">
        <!-- Start Page Title -->
        <div class="pagetitle">
            <h1>User Manager</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">List</a></li>
                    <li class="breadcrumb-item active">Create Admin</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <form class="col-lg-6 row" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"
            autocomplete="off">
            @csrf
            {{-- Name --}}
            <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                        autocomplete="off">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- Email --}}
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        autocomplete="off">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- Password --}}
            <div class="row mb-3">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Confirm Password --}}
            <div class="row mb-3">
                <label for="password-confirm" class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control" autocomplete="off">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Role --}}
            <div class="row mb-3">
                <label for="role" class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                    <select name="role" id="role">
                        <option value="" selected>Select</option>
                        <option value="admin">Admin</option>
                        <option value="quality">Quality</option>
                        <option value="hr">Hr</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             {{-- image --}}
             <div class="row">
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="file" name="image" id="image" class="form-control" onchange="previewImage()">
                        <label for="image">Image</label>
                    </div>
                    <img id="preview" width="100" height="100" style="display: none;" />
                    @error('image')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
            {{-- Add button --}}
            <div class="row">
                <div class="mt-3 col-lg-6">
                    <input type="submit" hidden id="add_btn" name="">
                    <p onclick="add()" class="btn btn-sm btn-primary">Add</p>
                    <input type="button" hidden id="onCancleClick" name="" value="Reset">
                    <p onclick="cancel()" class="btn btn-sm btn-danger">Reset</p>
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        // create action
        function add() {
            if (confirm("Are you wants to add document!")) {
                document.getElementById("add_btn").click();
            }
        }
        // reset
        function cancel() {
            if (confirm("Are you wants to reset document data!")) {
                location.reload();
            }
        }
    </script>
        <script>
            function previewImage() {
                var input = document.getElementById('image');
                var preview = document.getElementById('preview');
    
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
    
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }
    
                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.src = '';
                    preview.style.display = 'none';
                }
            }
        </script>
@endsection
