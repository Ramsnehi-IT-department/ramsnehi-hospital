@extends('frontends.layouts')
@section('title', 'Secretary Message')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg">SECRETORY'S MESSAGE</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Gallery End --}}

{{-- Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-color">Secretory's Message</h3>
                <h5>SHREE ASHOK KUMAR AJMERA</h5>
                <p>This hospital is well equipped with all specialties like Gynae, Obstetrics, Orthopedics, General surgery, Pediatrics, General physician, Nephrology .We are having all investigatory Facilities i.e Biochemistry, Microbiology, Pathology, Digital X-ray, ultra sound, Doppler, E.C.G, Echocardiography etc. We provide a large range of consultative, diagnostic and surgical services to people whose health complaints do not warrant hospitalization, through our Out-patient Dept. (OPD Services). Consultants from various specialties have an OPD clinic schedule and patients can consult them during their OPD hours or after taking prior appointment from the OPD Desk.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/secretary.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
