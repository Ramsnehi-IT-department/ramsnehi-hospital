@extends('layouts.admin')

@section('title', 'Contacts')

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
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Contact</th>
                <th scope="col">Query (Topic)</th>
                <th scope="col">Message</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->contact }}</td>
                    <td>{{ $contact->query }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
