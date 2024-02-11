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

<!-- Define the URLs in data attributes -->
<button onclick="printBoth(
    '{{ route('careers.indexApplication') }}',
    '{{ route('careers.indexOpening') }}',
    'Printer Name 1', // Specify the first printer name here
    'Printer Name 2'  // Specify the second printer name here
)" class="btn btn-primary">Print Both</button>

{{-- <div id="previewContainer" style="display: none;"></div> --}}

<script>
    function printBoth(applicationRoute, openingRoute, Receipt, printerName2) {
        console.log("Button clicked!"); // Check if the function is accessible

        // Fetch content of the applications table
        fetch(applicationRoute)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(applicationData => {
                // Fetch content of the openings table
                fetch(openingRoute)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(openingData => {
                        // Display the fetched content in the preview container
                        document.getElementById('previewContainer').innerHTML = applicationData + openingData;
                        document.getElementById('previewContainer').style.display = 'block';
                        
                        // Print the content of each table to the corresponding printer
                        printJS({
                            printable: applicationData,
                            type: 'html',
                            targetStyles: ['*'],
                            documentTitle: 'Applications', // Optional: specify document title
                            header: 'Applications', // Optional: specify header
                            footer: 'Printed from my website', // Optional: specify footer
                            printerName: Receipt // Specify the first printer name
                        });

                        printJS({
                            printable: openingData,
                            type: 'html',
                            targetStyles: ['*'],
                            documentTitle: 'Openings', // Optional: specify document title
                            header: 'Openings', // Optional: specify header
                            footer: 'Printed from my website', // Optional: specify footer
                            printerName: printerName2 // Specify the second printer name
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
