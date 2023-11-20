@extends('layouts.main')
@section('content')
    <div class="cta__three section-padding" data-background="{{ asset('data/bagan.jpg') }}">
        <div class="container">
            <div class="row align-items-center">

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

                <div class="col-xl-6 col-lg-5 lg-mb-30">
                    <div class="cta__three-title">
                        <span class="subtitle-four">Need any Help?</span>
                        <h2>Connect with Our Team for Assistance</h2>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="container contact-us-container animate__animated animate__bounce animate__fadeInDown py-5">
        <div class="row">
            <div class="col-lg-8" style="background-color: #e7f0e7; padding: 20px; border-radius: 30px;">
                <h2 class="text-black">
                    Apply Now
                </h2>
                <p class="p-b-3" style="font-size: 15px; text-align: justify; color: black;">
                    To apply for the desired job, we recommend reading the job requirements
                    carefuly then if you found yourself qualified for it, simply fill in the below form and
                    click APPLY NOW.
                </p>
                <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                    id="create-form" autocomplete="off">
                    @csrf
                    <style>
                        input[type=text] {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 1px solid black;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }

                        input[type=text]:focus {
                            border: 1px solid black;
                        }
                    </style>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Name*</label>
                            <input type="text" name="name" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Phone</label>
                            <input type="text" name="phone" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label class="text-black" style="color: black;">Additional Note</label>
                            <input type="text" name="additional_note" class="form-control " value="">
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <div class="form-group">
                            <label for="img" style="color: black;">
                                Select your CV to upload
                            </label>
                            <br>
                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                class="form-control-file" required>
                        </div>
                    </div>

                    <div>
                        <div class="contact__two-right-form-item">
                            <button class="btn-one" type="submit">Submit Now </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 contact-info" style="background-color: white; padding: 20px;">
                <h2 class="text-black">
                    Job Application
                </h2>


                <p class="p-b-3 py-3" style="font-size: 15px; text-align: justify;">
                    When it comes to choosing an employment agency, there are several factors to consider. Here are
                    some reasons why you may choose us:
                </p>

                <div class="right-content-about">
                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Expertise and Experience:
                        </span> We have a team of experienced professionals who specialize in
                        recruitment and talent acquisition. Our expertise allows us to understand the
                        intricacies of various industries and job markets, enabling us to find the best
                        candidates for your organization.
                    </p>

                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Time and Cost Savings:
                        </span>
                        Recruiting and hiring can be time-consuming and expensive. As an
                        employment agency, we handle the entire process for you, from sourcing candidates to
                        conducting initial screenings and interviews. This saves you valuable time and resources
                        that can be better utilized for other core business activities.
                    </p>


                    <p style="text-align: justify; font-size: 15px;">
                        <span style="color: black; font-weight: bold">
                            Extensive Network:
                        </span>
                        A reputable overseas employment agency often has a broad network of
                        international employers and job opportunities, increasing the chances of finding suitable
                        positions for candidates.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
