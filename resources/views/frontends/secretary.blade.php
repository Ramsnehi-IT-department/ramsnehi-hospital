@extends('frontends.layouts')
@section('title', 'Secretary Message')
@section('content')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="block">
                <h1 class="text-capitalize text-lg">{{ __('secretary.secretary') }}</h1>
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
                <h3 class="title-color">SHREE ASHOK KUMAR AJMERA</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, sit rerum aspernatur laudantium ipsa qui perspiciatis quia consequuntur labore, cum totam odit ad ab repudiandae maxime, officia reprehenderit. Recusandae, exercitationem?</p>
            </div>
            <div class="col-lg-6">
                <img src="images/secretary.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
