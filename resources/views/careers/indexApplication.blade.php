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
    <h1>Applications</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<div class="container">
    <table class="table table-striped table-bordered" id="myTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Position For</th>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Contact</th>
                <th scope="col">Resume/CV</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $career->opening->title }} - {{ $career->opening->sub_title }}</td>
                    <td>{{ $career->name }}</td>
                    <td>{{ $career->email }}</td>
                    <td>{{ $career->contact }}</td>
                    <td><a href="{{ asset('storage/' . $career->file_path) }}" target="_blank">View File</a></td>
                    <td>{{ $career->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
