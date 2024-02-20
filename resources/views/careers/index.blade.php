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


{{-- for print --}}

<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Include printThis library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>

<!-- Your HTML content goes here -->
<button onclick="printBoth()" class="btn btn-primary">Print Both</button>
<div id="applicationDataContainer"></div>
<div id="openingDataContainer"></div>

<script>
    function printBoth() {
        // Function to print application data
        function printApplicationData(applicationData) {
            $('#applicationDataContainer').html(applicationData);
            $('#applicationDataContainer').printThis({
                importCSS: true,
                header: "<h1>Application Document Header</h1>",
                footer: "<footer>Printed from my website</footer>",
                pageTitle: "Application Document",
                beforePrintEvent: function () {
                    // Set printer name for application data
                    var PrintSettings = {
                        printContainer: true,
                        printerName: 'Order' // Specify the printer name for application data
                    };
                    return PrintSettings;
                },
                afterPrint: function () {
                    console.log('Application data printed successfully.');
                    // After printing application data, print opening data with the second printer
                    printOpeningData(openingData);
                },
                onError: function () {
                    console.error('Error printing application data.');
                    alert('Error printing application data. Please try again later.');
                }
            });
        }

        // Function to print opening data
        function printOpeningData(openingData) {
            $('#openingDataContainer').html(openingData);
            $('#openingDataContainer').printThis({
                importCSS: true,
                header: "<h1>Opening Document Header</h1>",
                footer: "<footer>Printed from my website</footer>",
                pageTitle: "Opening Document",
                beforePrintEvent: function () {
                    // Set printer name for opening data
                    var PrintSettings = {
                        printContainer: true,
                        printerName: 'Invoice' // Specify the printer name for opening data
                    };
                    return PrintSettings;
                },
                afterPrint: function () {
                    console.log('Opening data printed successfully.');
                },
                onError: function () {
                    console.error('Error printing opening data.');
                    alert('Error printing opening data. Please try again later.');
                }
            });
        }

        // Fetch content of the applications table
        $.ajax({
            url: '{{ route('careers.indexApplication') }}',
            method: 'GET',
            success: function (applicationData) {
                printApplicationData(applicationData);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching application data:', errorThrown);
                alert('Error fetching application data. Please try again later.');
            }
        });

        // Fetch content of the openings table
        $.ajax({
            url: '{{ route('careers.indexOpening') }}',
            method: 'GET',
            success: function (openingData) {
                // Store opening data to pass to the printOpeningData function after printing application data
                openingDataGlobal = openingData;
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching opening data:', errorThrown);
                alert('Error fetching opening data. Please try again later.');
            }
        });
    }
</script>

@endsection
