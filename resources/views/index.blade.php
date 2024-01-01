@extends('frontends.layouts')
@section('title', 'Home')
@section('content')

<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">WELCOME TO RAMSNEHI HOSPITAL</span>
                    <h1 class="mb-3 mt-3">Your Health Is Our Priority</h1>

                    <p class="mb-4 pr-5">Ramsnehi Hospital is a Multi Specialty & General Hospital , Professionally
                        managed fully equiped with modern equipments and surgical gadgets.</p>
                    {{-- <div class="btn-container ">
                        <a href="#" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make
                            appoinment <i class="icofont-simple-right ml-2  "></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider End -->

<!-- Appointment, Working hours & Emergency cases Start -->
{{-- <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                            family medicine.</p>
                        <a href="#" class="btn btn-main btn-round-full">Make a appoinment</a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Morning : <span>8:00 AM - 01:00 PM</span></li>
                            <li class="d-flex justify-content-between">Evening : <span>5:00 PM - 07:00 PM</span></li>
                        </ul>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Appointment, Working hours & Emergency cases End -->

<!--  About Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>ABOUT US</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/shree-maharaj.jpg" alt="Shree Maharaj" class="img-fluid">
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/ramniwasDham.jpg" alt="Ramniwas Dham, Shahapura" class="img-fluid">
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/acharya.jpg" alt="Acharya Shree" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="/about" class="btn btn-primary mt-3">View More</a>
        </div>

    </div>
</section>
<!--  About End -->

<!--  achievements starts -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>ACHIEVEMENTS AND FACILITIES</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 cta-section cta position-relative">
                <div class="row">
                    <div class="col-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3 counter" data-count="58">0</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3 counter" data-count="700">0</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3 counter" data-count="40">0</span>+
                            <p>Staffs</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3 counter" data-count="20">0</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="background: crimson">
                <h1>Working Hours</h1>
                <hr>
                <ul>
                    <li>
                        <h3>Our Activities 24/7</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>OPD's Consultation 09:00 AM - 01:00 PM 05:00 PM - 07:00 PM</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>Pharmacy 24/7 Open</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>Ambulance 24/7 Open</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>Treatment 24/7 Open</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>Security 24/7 Open</h3>
                    </li>
                    <hr>
                    <li>
                        <h3>Emergency 24/7 Open</h3>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
<!--  achievements end -->

<!--  Patient Care Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>PATIENT CARE</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <h4 class="mb-3">OPD's CONSULTATION </h4>
                        <p class="mb-2">MORNING: 09:00 AM - 01:00 PM</p>
                        <p class="mb-2">EVENING: 05:00 PM - 07:00 PM</p>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">HEALTH CHECKUP PLAN</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">GOVERNMENT SCHEMES</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="/departments" class="btn btn-primary mt-3">View More</a>
        </div>

    </div>
</section>
<!--  Patient Care End -->

<!--  Events Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Events</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <h4 class="mb-3">Hospital Events </h4>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>

                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">Health Camps</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">Health Talks</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Events End -->

<!--  Health Information Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Health Information </h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <h4 class="mb-3">Medi Updates </h4>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>

                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">Health Tips</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">Blogs</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Events End -->

<!--  Testimonial Start -->
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Patient's Feedbacks</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
						<p class="mt-4">
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
						<p>
							They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  Testimonial end -->

@endsection
