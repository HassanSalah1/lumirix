@extends("layouts.app")


@section("content")
    <header>
        <div class="container px-lg-5">

            @include('layouts.header')

            <div class="row mt-4">
                <div class="col-lg-6 my-auto pe-lg-5">
                    <h1 class="default-color lh-base">
                        Reimagine Vitiligo Treatment with Lumirix®
                    </h1>
                    <p class="default-color pe-lg-5 lh-base my-4 me-lg-5 fs-6 pb-lg-3">
                        Lumirix® is the first topical treatment approved for vitiligo.
                    </p>
                    <a href="" class="btn default-btn">
                        Learn more
                    </a>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('/front-end/images/headerImg.png')}}" class="img-fluid headar-img" alt="headerImg" title="headerImg"
                         loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </header>
    <!-- why choose -->
    <div class="why-choose mt-5">
        <div class="container px-lg-5">
            <h2 class="default-color fw-normal w-lg-45 din-next mb-5 pb-4">
                Why Choose <span class="purple">Lumirix®</span> for Your Vitiligo Treatment?
            </h2>
            <div class="row">
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <h3 class="fs-6 bold default-color">
                            1.
                        </h3>
                        <h3 class="fs-6 bold default-color">
                            Clinically Proven Results
                        </h3>
                        <p class="default-color">
                            Lumirix® is supported by clinical studies that show significant improvements in skin
                            repigmentation.
                        </p>
                        <img src="{{asset('front-end/images/choose/image (27).png')}}" class="img-fluid" title="Clinically Proven Results"
                             loading="lazy" decoding="async" alt="Clinically Proven Results">
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <h3 class="fs-6 bold default-color">
                            2.
                        </h3>
                        <h3 class="fs-6 bold default-color">
                            Easy-to-Use Application
                        </h3>
                        <p class="default-color">
                            Design for daily use, Lumirix® cream integrates easily into your patient's routine with a
                            convenient twice daily application.
                        </p>
                        <img src="{{asset('front-end/images/choose/image (28).png')}}" class="img-fluid" title="Clinically Proven Results"
                             loading="lazy" decoding="async" alt="Clinically Proven Results">
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <h3 class="fs-6 bold default-color">
                            3.
                        </h3>
                        <h3 class="fs-6 bold default-color">
                            Good Safety Profile
                        </h3>
                        <p class="default-color">
                            Lumirix® has good safety and tolerability profile, making it a trusted choice for both
                            patients and healthcare providers.
                        </p>
                        <img src="{{asset('front-end/images/choose/image (29).png')}}" class="img-fluid" title="Clinically Proven Results"
                             loading="lazy" decoding="async" alt="Clinically Proven Results">
                    </div>
                </div>
                <div class="col-lg-3 my-3">
                    <div class="card">
                        <h3 class="fs-6 bold default-color">
                            4.
                        </h3>
                        <h3 class="fs-6 bold default-color">
                            Patient Support
                        </h3>
                        <p class="default-color">
                            Find out more about the useful programs run by Vitiligo Support Group, a non-profit patient
                            support group.
                        </p>
                        <img src="{{asset('front-end/images/choose/Rectangle 5.png')}}" class="img-fluid" title="Clinically Proven Results"
                             loading="lazy" decoding="async" alt="Clinically Proven Results">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection