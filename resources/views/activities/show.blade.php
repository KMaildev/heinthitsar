@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    @include('components.gallery_slider')

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
