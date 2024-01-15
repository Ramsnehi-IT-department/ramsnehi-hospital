@extends('layouts.admin')

{{-- @section('title', 'Add Document') --}}

@section('content')
<div class="container">
    <!-- Start Page Title -->
    <div class="pagetitle">
        {{-- <h1>{{ $page }}</h1> --}}
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('galleries.index') }}">Gallery</a></li>
                <li class="breadcrumb-item active">Create Gallery</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- display success message start --}}
    @if(session('error'))
        <div class="alert alert-warning">
            {{ session('error') }}
        </div>
    @endif
    {{-- display success message end --}}

    {{-- display error message start --}}
    @if(session('error'))
        <div class="alert alert-warning">
            {{ session('error') }}
        </div>
    @endif
    {{-- display error message end --}}

    <form class="col-lg-6 row" action="{{ route('galleries.store') }}" method="post"
        enctype="multipart/form-data" autocomplete="off">
        @csrf

        {{-- Title --}}
        <div class="row mb-3">
            <label for="title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="form-control" autocomplete="off">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- image --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-floating">
                    <input type="file" name="file" id="file" class="form-control" onchange="previewImage()" />
                    <label for="file">Image</label>
                </div>
                <img id="preview" width="100" height="100" style="display: none;" />
                @error('file')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="sub_title" class="col-lg-3 col-form-label">Description</label>
            <div class="col-lg-9">
                <textarea class="form-control" name="description" id="editor1"
                    style="width:100%">{{ old('description') }}</textarea>
            </div>
        </div>

        {{-- Add button --}}
        <div class="row">
            <div class="mt-3 col-lg-6">
                <input type="submit" hidden id="add_btn" name="">
                <p onclick="add()" class="btn btn-sm btn-primary">Add</p>
                <input type="button" hidden id="onCancleClick" name="" value="Reset">
                <p onclick="cancel()" class="btn btn-sm btn-danger">Reset</p>
                <a href="{{ route('careers.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    if (!CKEDITOR.instances['editor1']) {
        CKEDITOR.replace('editor1');
    }
</script>
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
        var input = document.getElementById('file');
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
