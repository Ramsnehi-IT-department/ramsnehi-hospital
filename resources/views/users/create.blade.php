@extends('layouts.admin')

@section('title', 'Create New User')

@section('content')
<form method="POST"
    action="{{ isset($user) ? route('users.update', ['user' => $user->id]) : route('users.store') }}"
    enctype="multipart/form-data" autocomplete="off">

    @csrf

    @if(isset($user))
        @method('PUT')
        <input type="hidden" name="user_id" value="{{ $user->id }}">
    @endif

    {{-- Name --}}
    <div class="row mb-3">
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" id="name" value="{{ old('name', isset($user) ? $user->name : '') }}" class="form-control"
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
            <input type="text" name="email" id="email" value="{{ old('email', isset($user) ? $user->email : '') }}" class="form-control"
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
                <input type="file" name="file_path" id="file_path" class="form-control" onchange="previewImage()">
                <label for="file_path">Image</label>
            </div>
            <img id="preview" width="100" height="100" style="display: none;" />
            @error('file_path')
                {{ $message }}
            @enderror
        </div>
    </div>

    <!-- Add a hidden input with the same name and value 0 to ensure the unchecked value is submitted -->
    <input type="hidden" name="status" value="0">

    <button type="submit">
        {{ isset($user) ? 'Update' : 'Create' }}
    </button>
</form>

<script>
    // create action
    function add() {
        if (confirm("Are you wants to add User!")) {
            document.getElementById("add_btn").click();
        }
    }
    // reset
    function cancel() {
        if (confirm("Are you wants to reset User data!")) {
            location.reload();
        }
    }

</script>
<script>
    function previewImage() {
        var input = document.getElementById('file_path');
        var preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
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
