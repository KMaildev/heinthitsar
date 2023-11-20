<!-- Footer Area Start -->
<div class="footer__one" data-background="{{ asset('assets/img/shape/footer-bg-2.png') }}">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-5 col-sm-7">
                <div class="footer__one-widget">
                    <div class="footer__one-widget-about">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/company/logo.jpg') }}" alt="Logo-image">
                        </a>
                        <p>
                            If you have any queries about recruitments, vacancies, or anything else, our team is ready
                            to response all your queries.
                        </p>
                        <div class="footer__one-widget-about-social">
                            <h6>Follow Us :</h6>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.behance.net/" target="_blank"><i
                                            class="fab fa-behance"></i></a></li>
                                <li><a href="https://dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-sm-5">
                <div class="footer__one-widget">
                    <div class="footer__one-widget-menu footer__area-widget-menu two">
                        <h4>Main Pages</h4>
                        <ul>
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach

                            <li>
                                <a href="{{ route('cv.index') }}">
                                    Apply for Your Job
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employer.index') }}">
                                    Employers
                                </a>
                            </li>

                            <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__one-widget">
                    <div class="footer__one-widget-location">
                        <h4>Official info</h4>
                        <div class="footer__one-widget-location-item">
                            <div class="footer__one-widget-location-item-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="footer__one-widget-location-item-info">
                                <a href="javascript::void(0)">
                                    SHWE KAINAYEE HOUSING, BUILDING NO.S, ROOM NO.104 SA/KHA QUARTER, THINGANGYUN
                                    TOWNSHIP, YANGON REGION, MYANMAR
                                </a>
                            </div>
                        </div>
                        <h6>Working Hours :</h6>
                        <div class="footer__one-widget-location-item">
                            <div class="footer__one-widget-location-item-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="footer__one-widget-location-item-info">
                                <span>Monday - Friday 9: AM- 5: PM Sat - Sun Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__one-widget">
                    <div class="footer__one-widget-gallery">
                        <h4>
                            Facebook
                        </h4>
                        <div class="footer__one-widget-gallery-area">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p>Copyright 2023
                        <a href="javascript::void(0)">
                            HEIN THITSAR COMPANY LIMITED
                        </a>
                        - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up scroll-two">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Scroll Btn End -->
