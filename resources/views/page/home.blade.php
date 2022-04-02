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
    <div class="section-header-services fade-in animate-bottom container-fluid" id="section-services">
        <div class="container">
            <div class="title-header__services satoshi-bold-32 text-center">Our Services</div>
            <br>
            <div class="card-services-wrapper__list d-flex flex-wrap justify-content-center">
                <div class="card-services-pushable card-services-01" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Website Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/7b214fa3635c7727d860e6bfb55f282f.webp') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Create and customize your website that suits your bussiness or company with wonderful design
                            that
                            attract more customer.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable card-services-02" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Mobile Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/Designing-Mobile-Apps.jpg') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Build your own mobile apps for expand also attract more visitor from Android and iOS users over
                            worldwide.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable card-services-03" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Desktop Development</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/preview.jpg') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Needs company own system services? We provide best, stable, and secure desktop application that
                            very reliable.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable card-services-04" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Digital Marketing</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/616d57f1be7476649738a837_digital marketing.jpeg') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            We provide and promise you perfect SEO, CRM, Extremly Percentage Company Growth, Ads Optimizing
                            that you never regret.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable card-services-05" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Graphic Designer</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/h5J594mu7Wh2NG4cYEyesj-1200-80.png') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Our services that provide you best designer to create logo, ilustration, 2D/3D Digital Art,
                            Animation, Editing Video, etc.
                        </div>
                    </span>
                </div>
                <div class="card-services-pushable card-services-06" role="button">
                    <span class="card-services-shadow"></span>
                    <span class="card-services-edge"></span>
                    <span class="card-services-front text">
                        <div class="title-services satoshi-bold-20 text-center">Growth Startup</div>
                        <br>
                        <div class="images-services">
                            <img class="img-fluid" src="{{ asset('resources/assets/Perbedaan_Unicorn__Decacorn__Hectocorn.jpeg') }}" alt="">
                        </div>
                        <div class="desc-services satoshi-normal-18 text-center">
                            Our best services for who needs take action for your bussiness ideas with all data is guaranteed
                            secure forever with our legal contract.
                        </div>
                    </span>
                </div>
            </div>
        </div>

    </div>

    {{-- Section Made By Us --}}
    <div class="section-header-portofolio fade-in animate-bottom container-fluid">
        <div class="container">
            <div class="title-header__services satoshi-bold-32 text-center">Made By Us</div>
            <br>
            <div class="card-services-wrapper__list d-flex flex-wrap justify-content-center">

            </div>
        </div>

    </div>
    {{-- Section Client & Reviews --}}
    <div class="section-header-portofolio fade-in animate-bottom container-fluid">
        <div class="container">
            <div class="title-header__services satoshi-bold-32 text-center">Our Client & Reviews</div>
            <br>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-item__flex">
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse was very professional. I never came to a meeting doubting whether or not they
                                    would be
                                    prepared
                                    for it.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Robert Julian</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">IT Specialist at Microsoft</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse was very professional. I never came to a meeting doubting whether or not they
                                    would be
                                    prepared
                                    for it.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Kevin Cortney</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">CEO of Kindertime</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse was very professional. I never came to a meeting doubting whether or not they
                                    would be
                                    prepared
                                    for it.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Alex Calee</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">Founder of Workhardy
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-item__flex">
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs is one of the best development houses in the nation, if not the world.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Melaney Vania</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">CEO and Founder of HacKitchen
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs is one of the best development houses in the nation, if not the world.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Freddy Robert</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">CEO of MakanQ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs is one of the best development houses in the nation, if not the world.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Gilbert Monic</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">College Student in University
                                            of Bhayangkara
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="carousel-item__flex">
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs ensures on-time delivery. The team’s passion and seamless service
                                    distinguish
                                    them from competitors. Excellent UX design and detailed builds create value for
                                    end-users.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Galeel
                                                Hatcherburg</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">Founder of TasKiller
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs ensures on-time delivery. The team’s passion and seamless service
                                    distinguish
                                    them from competitors. Excellent UX design and detailed builds create value for
                                    end-users.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Kim Young</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">CEO of BeroMart
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-client__reviews">
                                <div class="col desc__reviews d-flex justify-content-center align-items-center">
                                    “TechHouse Labs ensures on-time delivery. The team’s passion and seamless service
                                    distinguish
                                    them from competitors. Excellent UX design and detailed builds create value for
                                    end-users.”
                                </div>
                                <div class="col author__reviews">
                                    <div class="author-img">
                                        <img src="{{ asset('resources/assets/gp.jpg') }}" alt="">
                                    </div>
                                    <div class="author-profile">
                                        <div class="author-profile__name satoshi-black-20"><strong>Lee De Jong</strong>
                                        </div>
                                        <div class="author-profile__role satoshi-normal-18">President of MarkPoint
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="card-services-wrapper__list d-flex flex-wrap justify-content-center">
            </div> --}}

        </div>

    </div>
@endsection


@push('script')
    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
        });
        var isScrolled = false;
        $(window).on('scroll', function() {
            if ($(window).scrollTop() >= $('.section-header').offset().top + $('.section-header').outerHeight() -
                window.innerHeight && isScrolled == false) {
                isScrolled = true;
                setTimeout(() => {
                    $('.card-services-01').addClass('animate-slide__right');
                }, 200);
                setTimeout(() => {
                    $('.card-services-02').addClass('animate-slide__right');
                }, 400);
                setTimeout(() => {
                    $('.card-services-03').addClass('animate-slide__right');
                }, 600);
                setTimeout(() => {
                    $('.card-services-06').addClass('animate-slide__left');
                }, 800);
                setTimeout(() => {
                    $('.card-services-05').addClass('animate-slide__left');
                }, 1000);
                setTimeout(() => {
                    $('.card-services-04').addClass('animate-slide__left');
                }, 1200);
            }
        });
    </script>
@endpush
