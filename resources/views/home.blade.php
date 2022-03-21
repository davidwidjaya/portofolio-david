@extends('layout.layout')

@section('section')
    {{-- Section Landing Header --}}
    <div class="section-header fade-in animate-bottom container-fluid">
        <div class="container">
            <div class="row">
                {{-- col-12 col-lg-5 col-md-5 banner-new-homepage --}}
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <div class="col">
                        <h1 class="satoshi-bold-40">Build, Grow, and Expand Your Futures Startup with Us!</h1>
                        <div class="satoshi-normal-18">We provide our best service for you with 24-hour consultation,
                            unlimited revisions, beautiful
                            UI/UX for application or website for attract more customer for you.</div>
                        <br>
                        <button class="button-82-pushable" role="button">
                            <span class="button-82-shadow"></span>
                            <span class="button-82-edge"></span>
                            <span class="button-82-front text satoshi-normal-18">
                                See More
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="service_splash__18SnM">
                        <div>
                            <div class="service-splash_decor__2nsyu service-splash_circle__3ssSu">
                                <div class="service-splash_decorBG__3vp0y service-splash_hides__1FsgH"
                                    style="background:#457af5;border-radius:unset;clip-path:circle(40%)"></div><svg
                                    width="100" height="100" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                                    class="service-splash_decorCircle1__2mcjT service-splash_bob__1wHOM service-splash_hides__1FsgH"
                                    fill="#f55c69">
                                    <circle cx="25" cy="25" r="25"></circle>
                                </svg><svg width="100" height="100" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                                    class="service-splash_decorCircle2__2xlPF service-splash_bob__1wHOM service-splash_hides__1FsgH"
                                    style="animation-delay:0.2s" fill="#ffb52e">
                                    <circle cx="25" cy="25" r="25"></circle>
                                </svg><svg width="100" height="100" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                                    class="service-splash_decorCircle3__29Uto service-splash_bob__1wHOM service-splash_hides__1FsgH"
                                    style="animation-delay:0.4s" fill="#f55c69">
                                    <circle cx="25" cy="25" r="25"></circle>
                                </svg>
                            </div><video class="service-splash_video__py_FT" preload="auto" autoplay playsinline="" muted=""
                                loop="" disableremoteplayback="">
                                <source
                                    src="https://cdn.sanity.io/files/kbz1tcxy/production/bc0e95417e2c8d0930199f0b46eed3da27587ea4.webm"
                                    type="video/webm">
                                <source
                                    src="https://cdn.sanity.io/files/kbz1tcxy/production/4ecbc314aed392e08254fe26d28ee8d5c0442782.mov"
                                    type="video/quicktime">
                            </video>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- Section Services --}}
    <div class="section-header fade-in animate-bottom container-fluid">
        <div class="container">
            <div class="title-header__services satoshi-bold-32 text-center">Our Services</div>
            <br>
            <div class="card-services-wrapper__list d-flex flex-wrap justify-content-center">
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Website Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Create and customize your website that suits your bussiness or company with wonderful design that
                            attract more customer.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Mobile Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Build your own mobile apps for expand also attract more visitor from Android and iOS users over worldwide.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Desktop Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Needs company own system services? We provide best, stable, and secure desktop application that very reliable.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Digital Marketing</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            We provide and promise you perfect SEO, CRM, Extremly Percentage Company Growth, Ads Optimizing that you never regret.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Graphic Designer</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Our services that provide you best designer to create logo, ilustration, 2D/3D Digital Art, Animation, Editing Video, etc.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Growth Startup</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/logo-soft.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Our best services for who needs take action for your bussiness ideas with all data is guaranteed secure forever with our legal contract.
                        </div>
                    </span>
                </div>
            </div>
            {{-- <div class="card-services-wrapper__list d-flex flex-wrap">
                <div class="card-services-wrapper">

                </div>
            </div> --}}
        </div>

    </div>
@endsection


@push('script')
@endpush
