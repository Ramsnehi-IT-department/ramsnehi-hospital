@extends('layouts.admin')
@section('content')

<!-- Start Page Title -->
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Career</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

    {{-- display success message start --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{-- display success message end --}}

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card custom-card">
                <a href="#">
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="card-title">View Resume</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card custom-card">
                <a href="{{ (route('careers.addPublish')) }}">
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="card-title">Vacancy Publish</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card custom-card">
                <a href="{{ route('careers.addOpening') }}">
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="card-title">Create Opening</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
