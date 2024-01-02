@extends('frontends.layouts')
@section('title', 'President Message')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg">AWARDS & CERTIFICATES</h1>
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
                <img src="images/certificate.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
