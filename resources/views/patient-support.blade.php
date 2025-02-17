@extends('layouts.app')
@section("content")
    <header>
        @include('layouts.header')
        <div class="row mt-4">
            <div class="col-lg-6 my-auto pe-lg-5 text-center px-lg-5">

                <h1 class="default-color lh-base text-center px-lg-5">
                    Patient Support
                </h1>
                <img src="{{asset('front-end/images/EfficacyProfile2.png')}}" class="img-fluid headar-img" alt="headerImg"
                     title="headerImg" loading="lazy" decoding="async">
            </div>
            <div class="col-lg-6">
                <img src="{{asset('front-end/images/EfficacyProfile.png')}}" class="img-fluid headar-img" alt="headerImg" title="headerImg"
                     loading="lazy" decoding="async">
            </div>
        </div>
    </header>

    <div class="container px-lg-5 py-5">
        <div class="mt-4">

            <div class="gradient-bg p-lg-5 p-3 mb-5 w-66 mx-auto">
                <p class="text-center mb-0 fw-bold">
                    Contact 告白會 | Hong Kong Vitiligo Support Group to find out more about their programs to support your
                    patient.
                    <br>
                    <br>
                    Room 1917, 19/F, One Midtown, 11 Hoi Shing Road, Tsuen Wan, N.T.
                    <br>
                    Contact number: +852 2114 1666
                </p>
            </div>
        </div>

    </div>

@endsection