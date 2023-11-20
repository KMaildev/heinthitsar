@extends('layouts.main')
@section('content')
    <div class="team__single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 lg-mb-30">
                    <div class="team__single-left">

                        <div class="team__single-left-thumb dark__image">
                            <img class="img__full" src="{{ asset('data/mdmessage.jpeg') }}" alt="">
                            <div class="team__single-left-thumb-social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.behance.net/" target="_blank">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team__single-left-info">
                            <span>
                                HEIN THITSAR COMPANY LIMITED
                            </span>
                            <h3>
                                U Kyaw Min Oo
                            </h3>

                            <div class="team__single-left-info-contact">
                                <div class="team__single-left-info-contact-item">
                                    <i class="far fa-envelope"></i>
                                    <div class="team__single-left-info-contact-item-info">
                                        <span>Quick Email</span>
                                        <h5><a href="mailto:info@heinthitsar.com">info@heinthitsar.com</a></h5>
                                    </div>
                                </div>

                                <div class="team__single-left-info-contact-item">
                                    <i class="fal fa-phone-alt"></i>
                                    <div class="team__single-left-info-contact-item-info">
                                        <span>Tell With US</span>
                                        <h5><a href="tel:+959 443 088 641">+959 443 088 641</a></h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7">
                    <div class="team__single-right">
                        <div class="team__single-right-experience">
                            <h3>
                                CEO’s MESSAGE
                            </h3>
                            <p style="text-align: justify; font-size: 16px; color: black;">
                                As the President of our esteemed overseas employment agency, I want to extend a
                                heartfelt welcome to all aspiring professionals seeking exceptional
                                opportunities abroad and to our valued clients entrusting us with their talent
                                acquisition needs.
                                <br><br>
                                Our mission is clear: to connect global talent with remarkable employment
                                prospects while fostering cultural exchange. We are committed to providing
                                comprehensive and reliable overseas employment services, guiding you every step
                                of the way to ensure your success.
                                <br><br>
                                With integrity, excellence, diversity, and responsiveness as our guiding
                                principles, we strive to deliver superior services and create a positive impact
                                on individuals and societies worldwide.
                                <br><br>
                                Thank you for trusting us with your aspirations and requirements. Together,
                                let's achieve new heights in your career or find the exceptional talent your
                                organization deserves.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
