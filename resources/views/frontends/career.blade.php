@extends('frontends.layouts')
@section('title', 'Career with Us')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Career with Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Content Start --}}
<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Current Openings</h2>
                    <form id="#" class="appoinment-form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Choose Department</option>
                                        <option>Doctor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>Select Doctors</option>
                                        <option>Physician</option>
                                        <option>Ortho</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-main btn-round-full" id="applyNow">Apply Now<i class="icofont-simple-right ml-2"></i></a>

                    </form>
                </div>
            </div>
            <div class="col-lg-12 mt-4">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    {{-- <h2 class="mb-2 title-color">Career With Us</h2> --}}
                    <form id="applicationForm" style="display: none;">
                        <!-- Your form fields go here -->
                        <!-- For example: -->
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                        <!-- Other form fields -->
                        <!-- ... -->
                        <button type="submit">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
{{-- Content end --}}
     <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // This code runs when the document is fully loaded

    $('#applyNow').on('click', function(e) {
        // This function is executed when the element with ID "applyNow" is clicked

        e.preventDefault(); // Prevent the default behavior of the anchor tag

        $('#applicationForm').show(); // Show the form with the ID "applicationForm"
    });
});

</script>


@endsection
