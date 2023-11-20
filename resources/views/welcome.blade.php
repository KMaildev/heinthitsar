@extends('layouts.main')
@section('content')
    @include('layouts.slider')

    <div class="services__two section-padding">
        <img class="services__two-shape-one dark-n" src="{{ asset('assets/img/shape/services-3.png') }}" alt="services-shape">
        <img class="services__two-shape-two dark-n" src="{{ asset('assets/img/shape/services-2.png') }}" alt="services-shape">
        <div class="container">
            <div class="row mb-30">
                <div class="col-xl-12">
                    <div class="services__two-title">
                        <span class="subtitle-two">
                            HEIN THITSAR COMPANY LIMITED
                        </span>
                        <h2>
                            Overseas Employment Agency
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__two-item">
                        <div class="services__two-item-icon">
                            <i class="flaticon-travel"></i>
                        </div>
                        <div class="services__two-item-content">
                            <h4>
                                <a href="javascript::void(0)">
                                    Expertise and Experience
                                </a>
                            </h4>
                            <p style="text-align: justify; color: gray;">
                                With over a decade of experience in overseas employment, we have developed a deep
                                understanding of the intricacies involved in various industries and regions, making us your
                                trusted partner in this journey.
                            </p>
                        </div>
                        <div class="services__two-item-btn">
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__two-item">
                        <div class="services__two-item-icon">
                            <i class="flaticon-logistics-delivery"></i>
                        </div>
                        <div class="services__two-item-content">
                            <h4>
                                <a href="javascript::void(0)">
                                    Quality Assurance
                                </a>
                            </h4>
                            <p style="text-align: justify; color: gray;">
                                Our relentless commitment to quality ensures that job seekers find positions that align with
                                their skills and aspirations, while employers discover talent that propels their businesses
                                forward.
                            </p>
                            <br><br><br>
                        </div>
                        <div class="services__two-item-btn">
                            <a href="tel:+959 429 400 581">
                                Call Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__two-item">
                        <div class="services__two-item-icon">
                            <i class="flaticon-car-insurance"></i>
                        </div>
                        <div class="services__two-item-content">
                            <h4>
                                <a href="javascript::void(0)">
                                    Comprehensive Services
                                </a>
                            </h4>
                            <p style="text-align: justify; color: gray;">
                                From visa procurement to pre-departure orientation and continuous support, we offer a
                                complete suite of services to ensure a smooth and successful overseas employment experience.
                            </p>
                            <br><br>
                        </div>
                        <div class="services__two-item-btn">
                            <a href="mailto:info@heinthitsar.com">
                                Send Mail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__two-item">
                        <div class="services__two-item-icon">
                            <i class="flaticon-farmhouse"></i>
                        </div>
                        <div class="services__two-item-content">
                            <h4>
                                <a href="javascript::void(0)">
                                    Global Network
                                </a>
                            </h4>
                            <p style="text-align: justify; color: gray;">
                                Our vast global network connects you to opportunities you might not find elsewhere. We have
                                strong relationships with employers and job seekers across the world.
                            </p>
                            <br><br><br>
                        </div>
                        <div class="services__two-item-btn">
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="who__area py-5">
        <img class="who__area-shape" src="{{ asset('assets/img/shape/who-we.png') }}" alt="whoWe-shape">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xxl-5 col-lg-6 lg-mb-30">
                    <div class="who__area-left">
                        <div class="who__area-left-title">
                            <span class="subtitle-four">Who We Are</span>
                            <h2>
                                HEIN THITSAR COMPANY LIMITED
                            </h2>
                            <p style="text-align: justify; font-size: 16px; color: black;"
                                class="animate__animated animate__lightSpeedInRight">
                                Our company "HEIN THITSAR COMPANY LIMITED." was established in the year 2021 for the
                                manpower
                                supply.
                                HEIN THITSAR COMPANY LIMITED is one of the registered licence companies in Republic of the
                                Union
                                of
                                Myanmar and authorized by the Ministry of the National Planning & Economic Development and
                                Ministry of
                                Labor, Employment & Social Welfare. We specialize in the supply of manpower to overseas
                                countries.
                                <br><br>
                                "HEIN THITSAR COMPANY LIMITED." has been in this manpower recruitment services for many
                                years and
                                we
                                are proud and modest to inform that we have had substantial success in the supply of labor
                                in the
                                different business sectors.

                                <br><br>
                                We arrange enrollment for Singapore, Malaysia and Thailand.
                                And, we are fully accredited member of Myanmar Overseas Employment Agencies
                                Federation (MOEAF).
                                <br><br>
                                "HEIN THITSAR COMPANY LIMITED." always welcome for your manpower needs and "HEIN THITSAR
                                COMPANY LIMITED." will provide our best services as your reliable agency.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-lg-6">
                    <div class="who__area-right">
                        <div class="who__area-right-image t-right">
                            <img class="who__area-right-image-shape" src="{{ asset('assets/img/shape/who.png') }}"
                                alt="who-image">
                            <img class="who__area-right-image-shape-one left-right-animate"
                                src="{{ asset('assets/img/shape/who-1.png') }}" alt="who-image">
                            <div class="image-overlay dark__image">
                                <img src="{{ asset('data/about.png') }}" alt="who-image" style="width: 90%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="work__area section-padding">
        <img class="work__area-shape" src="{{ asset('assets/img/shape/work.png') }}" alt="work-shape">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="work__area-title t-center">
                        <span class="subtitle-two">
                            Working Process
                        </span>
                        <h2>
                            How Does We Works
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row work-n">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="work__area-item">
                        <div class="work__area-item-icon">
                            <i class="flaticon-select"></i>
                            <span>01</span>
                        </div>
                        <div class="work__area-item-content">
                            <h5>
                                Job Offer
                            </h5>
                            <p>
                                HEIN THITSAR CO.,LTD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="work__area-item">
                        <div class="work__area-item-icon">
                            <i class="flaticon-meeting"></i>
                            <span>02</span>
                        </div>
                        <div class="work__area-item-content">
                            <h5>
                                Interview & Medical Check
                            </h5>
                            <p>
                                HEIN THITSAR CO.,LTD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="work__area-item">
                        <div class="work__area-item-icon">
                            <i class="flaticon-house"></i>
                            <span>03</span>
                        </div>
                        <div class="work__area-item-content">
                            <h5>
                                OWIC Processing & Contract Signing
                            </h5>
                            <p>
                                HEIN THITSAR CO.,LTD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="work__area-item">
                        <div class="work__area-item-icon">
                            <i class="flaticon-protection-1"></i>
                            <span>04</span>
                        </div>
                        <div class="work__area-item-content">
                            <h5>
                                Booking Air ticket & Departure
                            </h5>
                            <p>
                                HEIN THITSAR CO.,LTD
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="cta__area" data-background="{{ asset('assets/img/shape/cta.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 lg-mb-20">
                    <div class="cta__area-title lg-t-center">
                        <h2>
                            Our Purpose
                        </h2>
                    </div>
                    <p style="color: white; font-size: 17px;">
                        Our main purpose is to provide different categories of Myanmar Manpower around the globe and
                        especially Thailand. We supply Skilled, Semi-Skilled, General Worker, Technical, Professional and
                        Unskilled Myanmar Manpower. Currently, we are dealing with various clients from different countries
                        and successful in supply Malaysia, Japan, Thailand, Singapore without any complaints.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="features__two page services section-padding" data-background="assets/img/shape/features.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 lg-mb-30">
                    <div class="features__two-left">
                        <div class="features__two-left-title">
                            <span class="subtitle-four">Core Features</span>
                            <h2>
                                Company Organizational Chart
                            </h2>
                            <p>
                                Our overseas employment agency consists of a skilled team dedicated to connecting talented
                                individuals with international job opportunities. We have a deep understanding of global
                                markets, immigration laws, and visa processes. Our extensive network of contacts allows us
                                to offer a wide range of employment opportunities in various sectors. We prioritize
                                transparency, ethical practices, and open communication, providing personalized guidance and
                                support to job seekers. Our commitment to excellence ensures successful placements and
                                long-term relationships with clients.
                            </p>
                        </div>
                        <div class="features__two-left-bottom" style="width: 100%;">
                            <div class="features__two-left-bottom-item">
                                <div class="features__two-left-bottom-item-icon">
                                    <i class="fa fa-box"></i>
                                </div>
                                <h5 style="text-align: justify">
                                    We are ready to deliver foreign workers to employers directly to the workplace.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="-right dark__image">
                        <img src="{{ asset('data/org.jpg') }}" alt="features-image" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.gallery_slider')

    <div class="cta__three section-padding" data-background="{{ asset('data/banner-mandalay-hill.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 lg-mb-30">
                    <div class="cta__three-title">
                        <span class="subtitle-four">Need any Help?</span>
                        <h2>Connect with Our Team for Assistance</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="cta__three-info">
                        <div class="cta__three-info-item">
                            <div class="cta__three-info-item-icon">
                                <i class="fal fa-phone-alt icon-animation"></i>
                            </div>
                            <div>
                                <span>Call us 24/7</span>
                                <h6><a href="tel: +959 443 088 641"> +959 443 088 641</a></h6>
                            </div>
                        </div>
                        <div class="cta__three-info-item">
                            <div class="cta__three-info-item-icon">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div>
                                <span>Mail us anytime</span>
                                <h6>
                                    <a href="mailto:info@heinthitsar.com">
                                        info@heinthitsar.com
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="services__page  py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="services__two-title">
                        <span class="subtitle-two">Available Solutions</span>
                        <h2>
                            Gallery & Activities
                        </h2>

                        <p class="animate__animated animate__bounce animate__backInUp py-3"
                            style="text-align: justify; font-size: 16px; color: black;">
                            Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                            have successfully found employment through our agency. These visuals depict diverse work
                            environments, cultural experiences, and personal growth opportunities that await those who
                            embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                            natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                            to explore new horizons.
                        </p>

                    </div>
                </div>
                <br>
                @foreach ($activities as $activity)
                    <div class="col-md-12" hidden>
                        <h5 style="font-size: 16px;">
                            {{ $activity->title ?? '' }}
                        </h5>
                        <p style="color: black;">
                            {!! $activity->description ?? '' !!}
                        </p>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 col-sm-12 md-mb-30">
                            <div class="services__one-item m-0">
                                <div class="services__one-item-image">
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                        class="img-enlargeable">
                                </div>
                                <div class="services__one-item-content">
                                    <div class="services__one-item-content-icon">
                                        <i class="fa fa-image"></i>
                                    </div>
                                    <h4>
                                        <a href="javascript::void(0)">
                                            {{ $activity->title ?? '' }}
                                        </a>
                                    </h4>
                                    <p>
                                        {{ $category->title ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
@endsection
