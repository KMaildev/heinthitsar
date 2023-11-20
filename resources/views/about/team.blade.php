@extends('layouts.main')
@section('content')
    <div class="solution__area section-padding" data-background="https://t4.ftcdn.net/jpg/01/69/07/23/360_F_169072332_IQHVE6UIGXjGFoYlYIUI4H0brVo2l2vu.jpg">
        <img class="solution__area-shape-one" src="{{ asset('assets/img/shape/cta-3.png') }}" alt="shape-image">
        <img class="solution__area-shape-two left-right-animate" src="{{ asset('assets/img/shape/cta-4.png') }}"
            alt="shape-image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                   <div style="height: 150px;"></div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>


    <div class="team-one">
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="team__five-item">
                            <div class="team__five-item-image">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: 280px; background-size: top; object-fit: cover;">
                                <div class="team__five-item-image-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="https://www.behance.net/" target="_blank"><i
                                                    class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team__five-item-content">
                                <span>
                                    {{ $team->name ?? '' }}
                                </span>
                                <h4>
                                    <a href="javascript::void(0)">
                                        {{ $team->position ?? '' }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-xl-12 mt-50 t-center">
                    <h6>Consulting With Our Expert Team Members <a href="{{ route('contact.index') }}">Contact Now</a></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
