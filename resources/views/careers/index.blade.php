@extends('layouts.admin')
@section('content')

<!-- Start Page Title -->
<div class="pagetitle">
    <h1>Hr Department</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
        <div class="col-lg-6">
            <div class="card custom-card">
                <a href="{{ route('careers.indexApplication') }}">
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="card-title">Applications</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card custom-card">
                <a href="{{ route('careers.indexOpening') }}">
                    <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="card-title">Opening</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



<button onclick="printTables()" class="btn btn-primary">Print Tables</button>

<script>
    function printTables() {
        // Open a new window for printing
        var printWindow = window.open('', '_blank');

        // Get the content of the print area
        var printContent = document.getElementById('printArea').innerHTML;

        // Write the content to the print window
        printWindow.document.write('<html><head><title>Print Tables</title></head><body>' + printContent + '</body></html>');

        // Print the window
        printWindow.print();
    }
</script>



@endsection
