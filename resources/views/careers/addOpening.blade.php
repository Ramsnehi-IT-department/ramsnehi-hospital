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
                <li class="breadcrumb-item"><a href="{{ route('careers.index') }}">Career</a></li>
                <li class="breadcrumb-item active">Create Opening</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- display error message start --}}
    @if(session('error'))
        <div class="alert alert-warning">
            {{ session('error') }}
        </div>
    @endif
    {{-- display error message end --}}

    <form class="col-lg-6 row" action="{{ route('careers.storeOpening') }}" method="post" enctype="multipart/form-data" autocomplete="off">
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
        {{-- Sub-Title --}}
        <div class="row mb-3">
            <label for="sub_title" class="col-sm-3 col-form-label">Sub-Title</label>
            <div class="col-sm-9">
                <input type="text" name="sub_title" id="sub_title" value="{{ old('sub_title') }}"
                    class="form-control" autocomplete="off">
                @error('sub_title')
                    <div class="alert alert-danger">{{ $message }}</div>
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
                <a href="{{ route('careers.index') }}" class="btn btn-sm btn-warning mb-3">Back</a>
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
@endsection
