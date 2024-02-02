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

    {{-- Display success message start --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- Display success message end --}}

    {{-- Display error message start --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    {{-- Display error message end --}}

    <form class="row" action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <div class="col-lg-3">
                    <label for="page_url" class="col-form-label">Page</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="page_url" id="page_url" value="{{ old('page_url') }}"
                        class="form-control" autocomplete="off">
                    @error('page_url')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="col-lg-3">
                    <label for="title" class="col-form-label">Title</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="form-control" autocomplete="off">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="dateInput">Start Date</label>
                <input type="date" id="start_date" name="start_date">
            </div>
            <div class="col">
                <label for="dateInput">End Date:</label>
                <input type="date" id="end_date" name="end_date">
            </div>
        </div>

        <div class="row">
            <label for="sub_title" class="col-lg-3 col-form-label">Content</label>
            <div class="col-lg-9">
                <textarea class="form-control" name="file" id="editor1"
                    style="width:100%">{{ old('file') }}</textarea>
            </div>
        </div>

        {{-- Add button --}}
        <div class="row">
            <div class="mt-3 col-lg-6">
                <input type="submit" hidden id="add_btn" name="">
                <p onclick="add()" class="btn btn-sm btn-primary">Add</p>
                <input type="button" hidden id="onCancelClick" name="" value="Reset">
                <p onclick="cancel()" class="btn btn-sm btn-danger">Reset</p>
                <a href="{{ route('careers.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    if (!CKEDITOR.instances['editor1']) {
        CKEDITOR.replace('file');
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
