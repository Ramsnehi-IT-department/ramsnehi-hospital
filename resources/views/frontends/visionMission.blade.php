@extends('frontends.layouts')
@section('title', 'Vission and Mission')
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
                        <li class="list-inline-item"><a href="/visionMission" class="text-white-50">Vission and Mission</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Vission and Mission</h1>
                </div>
            </div>
        </div>
    </div>
  </section>

{{-- Vision Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-color">OUR MISSION</h3>
                <p>Ramsnehi Hospital’s Mission is to provide quality care and satisfaction to the patient; every patient
                    impending our hospital is equally important to us. For us, treating our patient with better and
                    upmost facility is the prime motto of our hospital. Once the patient enters the hospital premises,
                    they become an integral part of the hospital. We consider treating patient as an another form of
                    worshipping God.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/vision/mission.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- Vision Content End --}}

{{-- Mission Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/vision/research-promotions-img.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
            <div class="col-lg-6">
                <h3 class="title-color">OUR VISION</h3>
                <p>Our vision is to make our hospital recognized not only at regional level; although at national level
                    where patients get peerless facilities and quality care.</p>
            </div>
        </div>
    </div>
</section>
{{-- Mission Content End --}}

{{-- SPECIALTY HOSPITAL Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-color">SPECIALTY HOSPITAL</h3>
                <p>This hospital is well equiped with all specialties like Gynae, Obstretics, Orthopedics, General
                    surgery, Pediatrics, General physician, Nephrology .We are having all investingatory Facilities i.e
                    Biochemistry, Microbiology, Pathology, Digital X-ray, ultra sound, Doppler, E.C.G, Echocardiography
                    etc. We provide a large range of consulative, diagnostic and surgical services to people whose
                    health complaints do not warrant hospitalization, through our Out-patient Dept.(OPD Services).
                    Consultant from various specialties have an OPD clinic schedule and patients can consult them during
                    their OPD hours.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/vision/ramsnehi-img.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- SPECIALTY HOSPITAL Content End --}}

@endsection
