<div class="top__bar-two">
    <div class="custom__container">
        <div class="row">
            <div class="col-lg-8">
                <div class="top__bar-two-left lg-t-center">
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps" target="_blank">
                                <i class="fas fa-map-marker-alt"></i>
                                Location : Yangon, Myanmar
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@heinthitsar.com">
                                <i class="fas fa-envelope"></i>
                                Email: info@heinthitsar.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="top__bar-two-right">
                    <h6>Follow Us :</h6>
                    <div class="top__bar-two-right-social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                    <span>Dribbble</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Area Start -->
<div class="header__area two header__sticky"
    style="box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;">
    <div class="custom__container">
        <div class="header__area-menubar p-relative">

            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo two">
                    <a href="{{ route('home') }}">
                        <img class="dark-n" src="{{ asset('data/company/logo.jpg') }}" alt="Logo-image"
                            style="width: 100px;">
                        <img class="light-n" src="{{ asset('data/company/logo.jpg') }}" alt="Logo-image">
                    </a>
                </div>
            </div>

            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu two menu-responsive">
                    <ul id="mobilemenu">


                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}"
                                style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Home
                            </a>
                        </li>

                        <li class="menu-item-has-children home">
                            <a href="#" style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                About Us
                            </a>
                            <ul class="sub-menu home-area">

                                <li>
                                    <div class="home-area-box">

                                        <div class="home-area-box-item">
                                            <div class="home-area-box-item-thumb">
                                                <img src="assets/img/demo/demo-1.jpg" alt="demo-image">
                                            </div>
                                            <div class="home-area-box-item-content">
                                                <h6 class="two">
                                                    <a href="{{ route('about.index') }}">
                                                        Our Company
                                                    </a>
                                                </h6>
                                                <h6 class="one">
                                                    <a href="{{ route('about.index') }}">
                                                        Our Company
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>


                                        <div class="home-area-box-item">
                                            <div class="home-area-box-item-thumb">
                                                <img src="assets/img/demo/demo-1.jpg" alt="demo-image">
                                            </div>
                                            <div class="home-area-box-item-content">
                                                <h6 class="two">
                                                    <a href="{{ route('ceo_message') }}">
                                                        CEO’s MESSAGE
                                                    </a>
                                                </h6>
                                                <h6 class="one">
                                                    <a href="{{ route('ceo_message') }}">
                                                        CEO’s MESSAGE
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>


                                        <div class="home-area-box-item">
                                            <div class="home-area-box-item-thumb">
                                                <img src="assets/img/demo/demo-1.jpg" alt="demo-image">
                                            </div>
                                            <div class="home-area-box-item-content">
                                                <h6 class="two">
                                                    <a href="{{ route('team') }}">
                                                        Professional Team
                                                    </a>
                                                </h6>
                                                <h6 class="one">
                                                    <a href="{{ route('team') }}">
                                                        Professional Team
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="home-area-box-item">
                                            <div class="home-area-box-item-thumb">
                                                <img src="assets/img/demo/demo-1.jpg" alt="demo-image">
                                            </div>
                                            <div class="home-area-box-item-content">
                                                <h6 class="two">
                                                    <a href="#">
                                                        Company Profile
                                                    </a>
                                                </h6>
                                                <h6 class="one">
                                                    <a href="#">
                                                        Company Profile
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="menu-item-has-children">
                            <a href="#" style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Manpower Services
                            </a>
                            <ul class="sub-menu">
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#" style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Gallery & Activities
                            </a>
                            <ul class="sub-menu">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('cv.index') }}"
                                style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Apply for Your Job
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('employer.index') }}"
                                style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Employers
                            </a>
                        </li>

                        <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                            <a href="{{ route('contact.index') }}"
                                style="color: black; text-shadow: 5px 5px 5px #535552; font-size: 13px;">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">

                <div class="header__area-menubar-right-sidebar">
                    <div class="header__area-menubar-right-sidebar-popup-icon">
                        <i class="flaticon-dots-menu"></i>
                    </div>
                </div>


                <div class="header__area-menubar-right-btn">
                    <a class="btn-two" href="contact.html">Contact now</a>
                </div>

                <div class="header__area-menubar-right-responsive-menu menu__bar">
                    <i class="flaticon-dots-menu"></i>
                </div>


                <!-- sidebar Menu Start -->
                <div class="header__area-menubar-right-sidebar-popup two">
                    <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                    <div class="header__area-menubar-right-sidebar-popup-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/company/logo.jpg') }}" alt="Logo-image">
                        </a>
                    </div>
                    <p>
                        We are ready to deliver foreign workers to employers directly to the workplace.
                    </p>

                    <div class="header__area-menubar-right-sidebar-popup-contact">
                        <h4 class="mb-30">Get In Touch</h4>
                        <div class="header__area-menubar-right-sidebar-popup-contact-item">
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                <i class="fal fa-phone-alt icon-animation"></i>
                            </div>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                <span>Call Now</span>
                                <h6><a href="tel:+959 429 400 581">+959 429 400 581</a></h6>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-sidebar-popup-contact-item">
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                <span>Quick Email</span>
                                <h6><a href="mailto:info@heinthitsar.com">info@heinthitsar.com</a></h6>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-sidebar-popup-contact-item">
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                <span>Office Address</span>
                                <h6>
                                    <a href="">
                                        SHWE KAINAYEE HOUSING, BUILDING NO.S, ROOM NO.104 SA/KHA QUARTER, THINGANGYUN
                                        TOWNSHIP, YANGON REGION, MYANMAR
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-sidebar-popup-social">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-overlay"></div>
                <!-- sidebar Menu Start -->
            </div>
        </div>



        <div class="menu__bar-popup two">
            <div class="menu__bar-popup-close"><i class="fal fa-times"></i></div>
            <div class="menu__bar-popup-left" >
                <div class="menu__bar-popup-left-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/company/logo.jpg') }}" alt="logo-image"></a>
                    <div class="responsive-menu"></div>
                </div>
                <div class="menu__bar-popup-left-social">
                    <h6>Follow Us</h6>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="https://dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li><a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->
