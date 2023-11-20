@extends('layouts.main')
@section('title', 'Jobs')
@section('content')
    <div class="work__area section-padding">
        <img class="work__area-shape" src="{{ asset('assets/img/shape/work.png') }}" alt="work-shape">
        <div class="container">
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="work__area-title t-center">
                        <span class="subtitle-two">
                            Available Job in {{ $country->country ?? '' }}
                        </span>
                        <h2>
                            Are you a talent eager to join an international company?
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
                                Find The Right Job
                            </h5>
                            <p>
                                Get your shortlist and review interview-ready candidates matched for your role.
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
                                Submit Resume
                            </h5>
                            <p>
                                Conduct interviews and select your top picks with the help of automated outreach.
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
                                Apply Jobs
                            </h5>
                            <p>
                                Post a job for free by submitting your job details.
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
                            <h5>Purchase Policy</h5>
                            <p>If the individual or business decides to proceed with</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services__one section-padding">
        <div class="shape-slide">
            <div class="sliders scroll">
                <img src="{{ asset('assets/img/shape/services-1.png') }}" alt="service-shape">
            </div>
            <div class="sliders scroll">
                <img src="{{ asset('assets/img/shape/services-1.png') }}" alt="service-shape">
            </div>
        </div>
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-9 col-lg-9 lg-mb-30">
                    <div class="services__one-title lg-t-center">
                        <span class="subtitle-one">
                            Available Job in {{ $country->country ?? '' }}
                        </span>
                        <h2>Job Lists</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="services__one-btn t-right lg-t-center">
                        <a class="btn-one" href="{{ route('contact.index') }}">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__one-item">
                            <div class="services__one-item-image">
                                <img data-enlargeable="" src="{{ $job->photo }}" alt=""
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;"
                                    class="img-enlargeable">
                            </div>
                            <div class="services__one-item-content">
                                <div class="services__one-item-content-icon">
                                    <i class="fa fa-toolbox"></i>
                                </div>
                                <h4>
                                    <a href="{{ route('cv.index') }}">
                                        {{ $job->title ?? '' }}
                                    </a>
                                </h4>
                                <p>
                                    Job in {{ $job->country->country ?? '' }}
                                </p>
                                <a href="{{ route('cv.index') }}">
                                    Apply for Your Job
                                    <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
