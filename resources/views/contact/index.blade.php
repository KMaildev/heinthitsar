@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <div class="contact__three section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{ asset('assets/img/icon/locationss.png') }}" alt="locations">
                        </div>
                        <h4>Office Location</h4>
                        <span style="color: black">
                            SHWE KAINAYEE HOUSING, BUILDING NO.S, ROOM NO.104 SA/KHA QUARTER, THINGANGYUN TOWNSHIP, YANGON
                            REGION, MYANMAR
                        </span>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 wow fadeInUp" data-wow-delay=".8s">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{ asset('assets/img/icon/phone-call.png') }}" alt="phone-call">
                        </div>
                        <h4>Tell With US</h4>
                        <span>Keeping you always better connected.</span>
                        <p>
                            <a href="tel:+959 429 400 581">
                                +959 429 400 581
                            </a>
                            <br>
                            <a href="tel:09443088641">
                                +959 443 088 641
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="contact__three-info">
                        <div class="contact__three-info-icon">
                            <img src="{{ asset('assets/img/icon/emails.png') }}" alt="email">
                        </div>
                        <h4>Quick Email</h4>
                        <span>Drop us a mail we will answer you asap.</span>
                        <p>
                            <a href="mailto:info@heinthitsar.com">
                                info@heinthitsar.com
                            </a>
                        </p>
                        <p>
                            <a href="mailto:heinthitsar3@gmail.com">
                                heinthitsar3@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact__three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact__three-form t-center">
                        <div class="contact__three-form-title">
                            <span class="subtitle-four">Get in Contact</span>
                            <h2>We are always Ready for your solution</h2>
                            <p class="py-2">
                                If you have any queries about recruitments, vacancies, or anything else, our team is ready
                                to response all your queries.
                            </p>
                        </div>
                        <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                            autocomplete="off" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item contact-item">
                                        <span class="fal fa-user"></span>
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6 md-mb-30">
                                    <div class="contact__two-right-form-item contact-item">
                                        <span class="far fa-envelope-open"></span>
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item contact-item">
                                        <span class="fal fa-phone"></span>
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="contact__two-right-form-item contact-item">
                                        <span class="fal fa-book"></span>
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="contact__two-right-form-item contact-item">
                                        <span class="far fa-comments"></span>
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact__two-right-form-item">
                                        <button class="btn-one" type="submit">Submit Message </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
