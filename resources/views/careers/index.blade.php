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

<div class="container" id="print-content">
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

<!-- Include printJS library -->
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<!-- Your HTML content goes here -->
{{-- <button onclick="printBoth('{{ route('careers.indexApplication') }}', '{{ route('careers.indexOpening') }}', 'Receipt1', 'Receipt2')" class="btn btn-primary">Print Both</button> --}}
<button onclick="printBoth('career/application', 'openings/index', 'Receipt1', 'Receipt2')" class="btn btn-primary">Print Both</button>

<div id="previewContainer" style="display: none;"></div>

<script>
function printBoth(applicationRoute, openingRoute, Receipt1, Receipt2) {
    // Generate URLs for the routes using Laravel's route() function
    const applicationUrl = '{{ route('careers.indexApplication') }}';
    const openingUrl = '{{ route('careers.indexOpening') }}';

    // Fetch content of the applications table
    fetch(applicationUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(applicationData => {
            // Fetch content of the openings table
            fetch(openingUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(openingData => {
                    // Combine the fetched content into the preview container
                    const combinedData = applicationData + openingData;
                    document.getElementById('previewContainer').innerHTML = combinedData;

    
                    // Print the combined content to the specified printers
                    printJS({
                        printable: 'previewContainer',
                        type: 'html',
                        targetStyles: ['*'],
                        documentTitle: 'Combined Document',
                        header: 'Combined Document Header',
                        footer: 'Printed from my website',
                        printerName: [Receipt1, Receipt2] // Specify multiple printer names as an array
                    });
                    

                })
                .catch(error => {
                    console.error('Error fetching openings data:', error);
                    alert('Error fetching openings data. Please try again later.');
                });
        })
        .catch(error => {
            console.error('Error fetching application data:', error);
            alert('Error fetching application data. Please try again later.');
        });
}


</script>




@endsection
