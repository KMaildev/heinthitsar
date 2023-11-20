@extends('layouts.main')
@section('content')
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


    <div class="about__four section-padding">
        <img class="about__five-shape" src="assets/img/shape/about.png" alt="about-shape">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 lg-mb-30">
                    <div class="about__four-left">
                        <div class="about__four-left-image">
                            <img class="about__four-left-image-shape" src="assets/img/shape/benefits.png" alt="shape">
                            <img class="about__four-left-image-shape-one left-right-animate"
                                src="assets/img/shape/about-7.png" alt="shape">

                            <div class="image-overlay dark__image">
                                <img style="width: 100%;" class="about__four-left-image-one"
                                    src="{{ asset('data/independence-monument-myanmar.jpg') }}" alt="benefits-image">
                            </div>
                            <div class="about__four-left-image-two image-overlay dark__image">
                                {{-- <img style="width: 100%; flat-" src="https://images.squarespace-cdn.com/content/v1/55c4cc46e4b034fc5196b455/1453114304991-E3XTDF0GKOMKG0XT2VJL/eatdrinklaos-myanmar-shweddagon" alt="benefits-image"> --}}
                            </div>
                        </div>
                    </div>


                    <br><br>

                    <div id="accordionExamplePage">
                        <div class="faq__area-item">
                            <h6 class="icon page collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOnePage">
                                Our Expertise
                            </h6>
                            <div id="collapseOnePage" class="faq__area-item-body collapse"
                                data-bs-parent="#accordionExamplePage">
                                <p>
                                    Our expertise stands on the Malaysia, Singapore, Japan, Dubai and Middle East Countries
                                    job market.
                                </p>
                            </div>
                        </div>
                        <div class="faq__area-item">
                            <h6 class="icon page" data-bs-toggle="collapse" data-bs-target="#collapseTwoPage">
                                Our Operations
                            </h6>
                            <div id="collapseTwoPage" class="faq__area-item-body collapse show"
                                data-bs-parent="#accordionExamplePage">
                                <p>
                                    HEIN THITSAR COMPANY LIMITED’s operations are managed by a team of professionals.
                                </p>
                            </div>
                        </div>
                        <div class="faq__area-item">
                            <h6 class="icon page collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThreePage">
                                Our Experience
                            </h6>
                            <div id="collapseThreePage" class="faq__area-item-body collapse"
                                data-bs-parent="#accordionExamplePage">
                                <p>
                                    We could provide different level of employees on our client’s demand in various job
                                    categories
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="about__four-right">
                        <div class="about__four-right-title">
                            <span class="subtitle-four">
                                Employer Application Form
                            </span>
                            <h3 style="color:#468ECE;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Post a job
                                    </font>
                                </font>
                                <span style="color:#f7931E;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            and hire talent worker.
                                        </font>
                                    </font>
                                </span>
                            </h3>
                        </div>

                        <div class="about__four-right-bottom">
                            <div class="contact-form" style="background-color: #E7F0E7; padding: 20px;">
                                <form autocomplete="off" method="POST" action="{{ route('employer.store') }}"
                                    id="create-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Company Name</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('company_name') is-invalid @enderror"
                                                    placeholder="Company Name" name="company_name"
                                                    value="{{ old('company_name') }}">
                                                @error('company_name')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Type of Company</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('company_type') is-invalid @enderror"
                                                    placeholder="Type Of Company" name="company_type"
                                                    value="{{ old('company_type') }}">
                                                @error('company_type')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Company Email Address</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Company Email Address" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Company Phone Number</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder="Company Phone Number" name="phone"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Company Website</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('website') is-invalid @enderror"
                                                    placeholder="Company Website" name="website"
                                                    value="{{ old('website') }}">
                                                @error('website')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Company Location</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('location') is-invalid @enderror"
                                                    placeholder="Company Location" name="location"
                                                    value="{{ old('location') }}">
                                                @error('location')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Job Category</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('job_category') is-invalid @enderror"
                                                    placeholder="Job Category" name="job_category"
                                                    value="{{ old('job_category') }}">
                                                @error('job_category')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('age_limit') is-invalid @enderror"
                                                    placeholder="Age Limit: 20-40" name="age_limit"
                                                    value="{{ old('age_limit') }}">
                                                @error('age_limit')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">
                                                    Educational Requirement
                                                </label>

                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('educational_requirement') is-invalid @enderror"
                                                    name="educational_requirement"
                                                    value="{{ old('educational_requirement') }}">

                                                @error('educational_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">
                                                    Working Experience
                                                </label>

                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                                    name="working_experience_requirement"
                                                    value="{{ old('working_experience_requirement') }}">

                                                @error('working_experience_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">
                                                    Other Additional
                                                </label>

                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                                    name="other_additional_requirement"
                                                    value="{{ old('other_additional_requirement') }}">

                                                @error('other_additional_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Estimate Salary Offer</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                                    placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                                    value="{{ old('estimate_salary_offer') }}">
                                                @error('estimate_salary_offer')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Other Allowance</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('other_allowance') is-invalid @enderror"
                                                    placeholder="Other Allowance" name="other_allowance"
                                                    value="{{ old('other_allowance') }}">
                                                @error('other_allowance')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">
                                                    Gender: M/10, F/10
                                                </label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('gender') is-invalid @enderror"
                                                    placeholder="Gender: M/10, F/10" name="gender"
                                                    value="{{ old('gender') }}">
                                                @error('gender')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label">Interview Type</label>
                                                <input autocomplete="off" type="text"
                                                    class="form-control @error('interview_type') is-invalid @enderror"
                                                    placeholder="Interview Type: Online" name="interview_type"
                                                    value="{{ old('interview_type') }}">
                                                @error('interview_type')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 py-5">
                                            <div class="contact__two-right-form-item">
                                                <button class="btn-one" type="submit">Submit Now </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
