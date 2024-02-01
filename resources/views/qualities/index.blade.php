@extends('layouts.admin')

@section('title', 'Quality Department')

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
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            </ol>
            <h1>Quality Department</h1>
        </nav>
    </div>
    <!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card custom-card">
                    <a href="#">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                            <h1 class="card-title">Patient Success Stories</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card custom-card">
                    <a href="#">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                            <h1 class="card-title">Awards & Achievements</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card custom-card">
                    <a href="#">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                            <h1 class="card-title">Media</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card custom-card">
                    <a href="#">
                        <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                            <h1 class="card-title">Gallery</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection