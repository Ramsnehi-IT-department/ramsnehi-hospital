@extends('frontends.layouts')
@section('title', 'Secretary Message')
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
                      <li class="list-inline-item"><a href="/ramsnehi" class="text-white-50">Ramsnehi</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="/secretary" class="text-white-50">Secretory's Message</a></li>
                  </ul>
                  <h1 class="text-capitalize mb-5 text-lg">Secretory's Message</h1>
              </div>
          </div>
      </div>
  </div>
</section>

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
