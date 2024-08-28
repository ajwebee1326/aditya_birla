<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Best Multispeciality Hospital in Pune | Expert Maternity, Neurology</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/images/Logo--rotate.png">
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend') }}/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend') }}/images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendors.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/icon.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />
    {{-- <link rel="stylesheet" href="{{ asset('frontend') }}/demos/medical/medical.css" /> --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/custom.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body data-mobile-nav-style="classic">
    <div>
        <!-- start header -->
        <nav class="navbar navbar-expand-lg fixed-top bg-white py-1 py-xxl-3 border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('frontend') }}/images/Logo.webp" data-at2x="{{ asset('frontend') }}/images/Logo.webp" alt="" class="default-logo img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clinicalServices">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Doctorsteam">Team</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="fs-18 text-dark fw-500 d-flex justify-content-lg-center justify-content-start align-items-center gap-2"
                                href="tel:8630925837">
                                <span
                                    class=" bg-secondary w-40px h-40px rounded-circle text-center text-white fs-14 justify-content-center d-flex align-items-center">
                                    <i class="feather icon-feather-phone"></i>
                                </span>
                                +91 98811 23006
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end header -->
        <!-- Header Main -->
        <div id="content">
            <section class="hero z-0 position-relative overflow-hidden p-0">
                <div class="swiper1 mySwiper1  d-flex justify-content-center align-items-center position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="position-relative sliderimg">
                                <img src="{{ asset('frontend') }}/images/banner1.webp">
                                <div class="overlay"></div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="position-relative sliderimg">
                                <img src="{{ asset('frontend') }}/images/banner2.webp">
                                <div class="overlay"></div>

                            </div>
                        </div>
                       
                    </div>
                    <div class="form col-12">
                        <div class="container ">
                            <div class="row align-items-center">
                                <div class="col-lg-7"
                                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span class="fs-20 mb-lg-4 d-block text-center text-lg-start">Welcome to Aditya Birla Memorial Hospital </span>
                                    <h1 class="fs-55 lh-60 xs-fs-30 xs-lh-35 ls-1px text-white fw-600 d-block text-center text-lg-start">Leading the Way in Quality Healthcare, Where Your Well-being Matters</h1>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-header p-3 text-white fw-800 text-capitalize">
                                        <h6 class="mb-0 fw-500 text-white">Get an appointment</h6>
                                    </div>
                                    <div class="formbg shadow bg-white p-5">
                                        <!-- start contact form -->
                                        {{-- <form action="email-templates/contact-form.php" method="post" action="{{ route('contactUs') }}"> --}}
                                            <form id="contact-form" method="post" action="{{ route('contactUs') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form_icons">
                                                        <input class="xs-mb-10px mb-15px form-control required" type="text"
                                                            name="name" placeholder="Name*" />
                                                        <i class="fa-regular fa-user"></i>
                                                    </div>
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <div class="form_icons">
                                                        <input class="xs-mb-10px mb-15px form-control required" type="text"
                                                            name="phone" placeholder="Number*" />
                                                        <i class="fa-solid fa-phone"></i>
                                                    </div>
                                                    @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form_icons">
                                                        <input class="xs-mb-10px mb-15px form-control required" type="text"
                                                            name="email" placeholder="Email*" />
                                                        <i class="fa-regular fa-envelope"></i>
                                                    </div>
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-15px select form_icons ">
                                                        <select class="form-control" name="select"
                                                            aria-label="select-doctor">
                                                            <option value="">Specialty</option>
                                                            <option value="Cardiologist">Cardiologist</option>
                                                            <option value="Neurologist">Neurologist</option>
                                                            <option value="Orthopedic">Orthopedic</option>
                                                            <option value="Gynecologist/obstetrician">
                                                                Gynecologist/Obstetrician</option>
                                                            <option value="Pediatrician">Pediatrician</option>
                                                            <option value="General Physician ">General Physician
                                                            </option>
                                                            <option value="Oncologist">Oncologist</option>
                                                            <option value="Urologist">Urologist</option>
                                                            <option value="Gastroenterologist">Gastroenterologist
                                                            </option>
                                                            <option value="Nephrologists">Nephrologists</option>
                                                            <option value="Ear-Nose-Throat (ENT) specialist">
                                                                Ear-Nose-Throat (ENT) specialist</option>
                                                            <option value="Dermatologist">Dermatologist</option>
                                                            <option value="Hypertension/ Diabetes Clinic">
                                                                Hypertension/Diabetes Clinic</option>
                                                            <option value="Stroke Clinic">Stroke Clinic</option>
                                                            <option value="PCOD Clinic">PCOD Clinic</option>
                                                            <option value="other">Other
                                                            </option>
                                                        </select>
                                                        <i class="fa-solid fa-circle-check"></i>
                                                    </div>
                                                    @error('select')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form_icons">
                                                    <textarea class="form-control mb-15px" cols="20" rows="2"
                                                        name="comment" placeholder="Your message"></textarea>
                                                        @error('comment')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-12">
                                                    <div class="form_icons">
                                                        <input class=" form-control" type="file" name="file"
                                                            placeholder="Choose file" />
                                                        <i class="fa-solid fa-file"></i>

                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-black  ps-3 text-muted">Prescription
                                                            (Optional)</p>
                                                    </div>

                                                </div>
                                                {{-- <div class="col-12 text-center mt-25px sm-mt-20px">
                                                    <input type="hidden" name="redirect" value="">
                                                    <button
                                                        class="btn btn-medium w-100 btn-base-color btn-round-edge left-icon btn-box-shadow submit p-2" type="submit"><i class="feather icon-feather-phone"></i>Request a Call Back</button>
                                                </div> --}}

                                                <div class="text-start my-lg-4 my-3 ">
                                                    <button type="submit" class="btn btn-medium w-100 btn-base-color btn-round-edge left-icon btn-box-shadow submit p-2" >Request a Call Back</button>
                                                </div>
                                            </div>

                                    </div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Header end  -->

    <!-- NEw About us Section -->

    <section class="" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6 pe-lg-4 pe-xxl-5 md-mb-50px position-relative">
                    <div class="position-absolute z-1 rotateicon left-minus-70px lg-left-minus-15px md-left-minus-50px bottom-130px lg-bottom-90px md-mb-50px d-none d-md-flex flex-column align-items-center justify-content-center w-140px h-140px bg-white border-radius-100 p-10px " data-anime='{"translateY": [-15, 0], "scale": [0.5, 1], "opacity": [0,1], "duration": 800, "delay": 800, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <img src="{{ asset('frontend') }}/images/Logo--rotate.png"
                            class="position-absolute top-50 translate-middle-y" alt="">
                        <img src="{{ asset('frontend') }}/images/demo-medical-home-07.png" class="animation-rotation" alt="">
                    </div>
                    
                    <div class="swiper" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-three-slide-next4&quot;, &quot;prevEl&quot;: &quot;.slider-three-slide-prev4&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 1 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 1 }, &quot;320&quot;: { &quot;slidesPerView&quot;: 1 } }, &quot;effect&quot;: &quot;slide&quot;, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false } }">

                        <div class="swiper-wrapper align-items-center">
                            <!-- end carousal item -->
                            <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/AB_building-img.jpg" alt="" class="rounded w-100"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/ab_about_img2.jpg" alt="" class="rounded w-100"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/ab_about_img3.jpg" alt="" class="rounded w-100"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontend') }}/images/ab_about_img4.jpg" alt="" class="rounded w-100"></div>
                        </div>
                        <!-- start slider navigation -->
                        <div class="d-flex gap-2 justify-content-center position-absolute w-100 z-index-1 bottom-0px">
                            <!-- start slider navigation -->
                            <div class="slider-three-slide-prev4 icon-small text-dark-gray bg-white w-30px h-30px"><i class="fa-solid fa-arrow-left fs-14"></i></div>
                            <div class="slider-three-slide-next4 icon-small text-dark-gray bg-white w-30px h-30px"><i class="fa-solid fa-arrow-right fs-14"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6 text-center text-lg-start appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">                    
                    <h2 class="heading">About Our Hospital</h2>
                    <p>At Aditya Birla Memorial Hospital, we are
                        committed to delivering exceptional healthcare with compassionate care. As a premier
                        multi-specialty quaternary care facility, we provide 500 beds, 16 advanced operation theaters,
                        and state-of-the-art technology like the da Vinci Surgical System. Our comprehensive services
                        include 2 hybrid Cath labs, 156 critical care beds, 49 dialysis units, a dedicated mother &
                        child wing, and a wellness center.
                    </p>
                    <p>
                        The dedicated oncology wing at Aditya Birla Memorial Hospital is a testament to our commitment
                        to providing comprehensive care, guiding patients through every stage of their cancer journey,
                        from prevention to rehabilitation. Our holistic and personalized approach is enhanced by
                        cutting-edge technology, including the da Vinci Surgical System, Versa HD, PET-CT, and
                        Brachytherapy or Internal Radiation Therapy, chemotherapy all available under one roof.
                    </p>

                </div>
            </div>
            <div class="row counter-style-07 mt-3 numbersBg">
                <!-- start counter item -->
                <div class="col-6 col-lg-3 text-center sm-mb-35px ">
                    <div class="d-flex gap-2 justify-content-center mb-10px">
                        <h3 class="alt-font vertical-counter  d-inline-flex xs-fs-24 fs-50 fw-800 mb-0 ls-minus-2px md-ls-0px position-relative z-index-0" data-to="20+"></h3>
                        <span class="fs-50 fw-500">+</span>
                    </div>
                    <span class="d-block xs-fs-12 fs-15 lh-20 fw-600 text-uppercase expertDoc">Dedicated Doctors</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-6 col-lg-3 text-center sm-mb-35px">
                    <div class="d-flex gap-2 justify-content-center mb-10px">
                        <h3 class="alt-font vertical-counter d-inline-flex  xs-fs-24 fs-50 fw-800 mb-0 ls-minus-2px md-ls-0px position-relative z-index-0"
                            data-to="100,0+"></h3>
                        <span class="fs-50 fw-500">+</span>
                    </div>
                    <span class="d-block xs-fs-12 fs-15 lh-20 fw-600 text-uppercase expertDoc">Lives of Patients and
                        Caregivers Impacted Annually</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-6 col-lg-3 text-center sm-mb-35px">
                    <div class="d-flex gap-2 justify-content-center mb-10px">
                        <h3 class="alt-font vertical-counter d-inline-flex xs-fs-24 fs-50 fw-800 mb-0 ls-minus-2px md-ls-0px position-relative z-index-0"
                            data-to="1500+"></h3>
                        <span class="fs-50 fw-500">+</span>
                    </div>
                    <span class="d-block xs-fs-12 fs-15 lh-20 fw-600 text-uppercase expertDoc">Complex Surgeries Performed
                        Each Year</span>
                </div>
                <div class="col-6 col-lg-3 text-center sm-mb-35px">
                    <div class="d-flex gap-2 justify-content-center mb-10px">
                        <h3 class="alt-font vertical-counter d-inline-flex xs-fs-24 fs-50 fw-800 mb-0 ls-minus-2px md-ls-0px position-relative z-index-0"
                            data-to="200+"></h3>
                        <span class="fs-50 fw-500">+</span>
                    </div>
                    <span class="d-block xs-fs-12 fs-15 lh-20 fw-600 text-uppercase expertDoc">Positive Patient Reviews
                    </span>
                </div>

                <!-- end counter item -->
            </div>
        </div>
    </section>
    <!-- New About us Section end -->
    <!-- Specialist treatments start section -->
    <section id="clinicalServices" class="medicalSevices bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-8" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="heading mb-0">Our Center Of Excellence </h2>
                </div>
                <div class="col-4">
                    <div class="d-flex gap-3 justify-content-end iconbox ">
                        <!-- start slider navigation -->
                        <div class="slider-three-slide-prev3 icon-small text-dark-gray  bg-white " tabindex="0"><i
                                class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-three-slide-next3 icon-small text-dark-gray  bg-white" tabindex="0"
                            role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
            <div class="row mx-1">
                <div class="col-md-12 p-0" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="swiper "
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 3500, "disableOnInteraction": false },   "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-three-slide-next3", "prevEl": ".slider-three-slide-prev3" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1800": { "slidesPerView": 3 }, "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>

                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/cardiology.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Cardiology</span>
                                        <p>Providing advanced care for heart defects, congenital disease, coronary issues, and more, with expert treatments like TAVI, angioplasty, and pediatric cardiac surgery.</p>

                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Neuroscience.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Neuroscience</span>
                                        <p>Advanced neurology care offering expert diagnosis, treatment for stroke, epilepsy, Parkinson's, and more. Specialized Neuro ICU for critical cases.</p>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Orthopedics & Joint Replacement Center.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Orthopedics & Joint
                                            Replacement</span>
                                        <p>We provide comprehensive orthopedic care for
                                            knee, hip, and joint issues, with specialties in sports medicine, pediatric
                                            orthopedics, arthritis, and pain management. </p>

                                    </div>

                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Mother and child care.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Mother & Child</span>
                                        <p>Comprehensive care for mother and child:
                                            NICU, PICU, advanced birthing center, and pediatric services, ensuring the
                                            best care at every step.</p>

                                    </div>

                                </div>

                            </div>


                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Cancer Care Oncology.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Cancer
                                            Care/Oncology</span>
                                        <p>We deliver holistic, integrated cancer care
                                            through our expert team specializing in Surgical, Radiation, and Medical
                                            Oncology, utilizing advanced technology and world-class facilities. </p>

                                    </div>

                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Nephrology.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Nephrology</span>
                                        <p>Expert nephrology care with advanced
                                            diagnostics and personalized plans for optimal kidney function.</p>

                                    </div>

                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Urology.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Urology</span>
                                        <p>We provide comprehensive treatment for
                                            urological conditions, specializing in urology, uro-oncology, robotic
                                            surgery, kidney transplants, and more.</p>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Gastroenterology.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Gastroenterology</span>
                                        <p>Our state-of-the-art facility offers expert
                                            gastro care with advanced diagnostics for digestive and hepatobiliary
                                            diseases in children and adults. </p>


                                    </div>

                                </div>

                            </div>




                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Robotic Surgery.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Robotic Surgery</span>
                                        <p>Introducing Robotic Surgery with the da
                                            Vinci Robot—an advanced system for minimally invasive procedures with
                                            precision in Urology, Gynaecology, Oncology, and Gastroenterology. </p>

                                    </div>

                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="feature-box-content1 d-flex flex-column gap-3 px-3 py-4 align-items-center   bg-white justify-content-center justify-content-md-start ">
                                    <div class="imgbox">
                                        <img src="{{ asset('frontend') }}/images/Critical Care.png">
                                    </div>
                                    <div class="content-box text-center">
                                        <span class="d-block text-dark-gray fs-20 fw-700 mb-5px">Critical Care</span>
                                        <p>Our Critical Care Unit is a specialized
                                            facility offering exceptional care and continuous monitoring for critically
                                            ill patients, surpassing standard hospital room capabilities.</p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Specialist treatments end section -->
    <!-- Anoter Sliders for text -->
    <!-- slide end -->
    <section id="Doctorsteam" class=" pt-30px pb-0 position-relative border-radius-10px lg-no-border-radius doctors">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-8"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="heading m-0">Meet Our Team of Specialized Experts</h2>
                </div>
                <div class="col-4">
                    <div class="d-flex gap-3 justify-content-end  iconbox">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev bg-white box-shadow-large"
                            tabindex="0"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next bg-white box-shadow-large"
                            tabindex="0" role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="col-md-12 py-0 review-style-09">
                    <div class="swiper doc_slider ">
                        <div class="swiper-wrapper ">
                            <!-- start slider item -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color   position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative">
                                                    <img class="rounded-circle doctorImg" src="{{ asset('frontend') }}/images/dr_Rajiv_Sethi_Sr_Consultant_Interventional_Cardiology.jpg" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Rajiv Sethi</a>
                                            <p class="mb-0">Senior Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Cardiology</span></p>
                                            <p class="mb-0">Experience: 25+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Cardiac Science</p>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- Slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Rajesh Badani_ Sr.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Rajesh
                                                Badani</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Cardiology</span></p>
                                            <p class="mb-0">Experience: 20+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Cardiac Science</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Rakesh_Ranjan.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Rakesh
                                                Ranjan</a>
                                            <p class="mb-0">Senior Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Neurology</span></p>
                                            <p class="mb-0">Experience: 25+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Neuroscience</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/sawali.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Savali
                                                Sultane</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Neurology</span></p>
                                            <p class="mb-0">Experience: 12 Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Neuroscience</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Ravikumar _Narayan.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Ravikumar
                                                Wategaonkar</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Oncology</span></p>
                                            <p class="mb-0">Experience: 15+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Oncology</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{ asset('frontend') }}/images/dr_Jaipalreddy_R_Pogal_Surgical_Oncology.jpg"
                                                        alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Jaipal Reddy</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Oncology</span></p>
                                            <p class="mb-0">Experience: 20+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Oncology</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Nikhil_Parwate.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Nikhil
                                                Parwat</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Gynae-Oncology</span> </p>
                                            <p class="mb-0">Experience: 21 Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Oncology</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>

                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="">
                                    <div class="col  lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Amit_Patil.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Amit
                                                Patil</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Gynecology</span> </p>
                                            <p class="mb-0">Experience: 17+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Gynecology & Obsetrtics</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/molsari.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Molshri
                                                Misra</a>
                                            <p class="mb-0">Gynecologist</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Gynecology</span> </p>
                                            <p class="mb-0">Experience: 8+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Gynecology & Obsetrtics</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Kiran_Kharat.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Kiran
                                                Kharat</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in
                                                <span class="text-dark-gray  fw-600">Orthopedic & Joint
                                                    replacement</span>
                                            </p>
                                            <p class="mb-0">Experience: 35+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Orthopedics & Joint
                                                    replacement</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{ asset('frontend') }}/images/d_Kailas_Jorule_Orthopaedic_Surgeon.jpg" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Kailas
                                                Jorule</a>
                                            <p class="mb-0">Associate Consultant</p>
                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Orthopedic & Joint
                                                    replacement</span></p>

                                            <p class="mb-0">Experience: 14+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Orthopedics & Joint
                                                    replacement</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Rahul_Kallaynpur.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Rahul
                                                Kallianpur</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Pediatric</span></p>
                                            <p class="mb-0">Experience: 30+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Peadiatrics</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg" src="{{asset('frontend')}}/images/priya.webp"
                                                        alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Priya
                                                Mankare</a>
                                            <p class="mb-0">Sr. Consultant</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Pediatric</span></p>
                                            <p class="mb-0">Experience: 20+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Peadiatrics</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Sandeep_ Bhavsar.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Sandeep
                                                Bhavsar</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in <span class="text-dark-gray  fw-600">Internal
                                                    Medicine</span></p>
                                            <p class="mb-0">Experience: 20+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of medical management</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>

                            <!-- slider end -->

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Rahul_Baste.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Rahul
                                                Baste</a>
                                            <p class="mb-0">Sr. Consultant</p>

                                            <p class="mb-0">Specialize in <span class="text-dark-gray  fw-600">Internal
                                                    Medicine</span></p>
                                            <p class="mb-0">Experience: 33 Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of medical management</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Avinash.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Avinash
                                                Munde</a>
                                            <p class="mb-0"> Consultant and A&E Head</p>

                                            <p class="mb-0">Specialize in <span class="text-dark-gray  fw-600">Accident
                                                    & Emergency</span></p>
                                            <p class="mb-0">Experience: 10+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Accident & Trauma management
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Abhijeet.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px ">Dr. Abhijeet
                                                Karad</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in
                                                <span class="text-dark-gray  fw-600">Gastroenterology</span>
                                            </p>
                                            <p class="mb-0">Experience: 5+ Years</p>

                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Gastroscience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>

                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Manish_Mali.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Manish
                                                Mali</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in
                                                <span class="text-dark-gray  fw-600">Nephrology</span>
                                            </p>
                                            <p class="mb-0">Experience: 20+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of renal science</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Anand_Vijay.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Anand
                                                Vijay</a>
                                            <p class="mb-0">Associate Director</p>

                                            <p class="mb-0">Specialize in
                                                <span class="text-dark-gray  fw-600">Pulmonologist</span>
                                            </p>
                                            <p class="mb-0">Experience: 17+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Pulmonolgy</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{ asset('frontend') }}/images/dr_charushila.jpg" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Charusheela
                                                Dhole</a>
                                            <p class="mb-0">Consultant Diabetologist</p>
                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Endocrinology</span> </p>

                                            <p class="mb-0">Experience: 7+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Endocrinology</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Kakaraniya.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Ritesh
                                                Kakrania </a>
                                            <p class="mb-0"> Associate Director</p>

                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Opthaology</span></p>
                                            <p class="mb-0">Experience: 20 Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Opthaolomogy</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Radheshay.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Radheshyam
                                                Chaudhri</a>
                                            <p class="mb-0">Sr. Consultant</p>
                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Urology</span></p>

                                            <p class="mb-0">Experience: 16+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of UroScience</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white ">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Vaishali_Bafna.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Vaishali
                                                Bafna</a>
                                            <p class="mb-0">Associate Director </p>
                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">ENT</span></p>

                                            <p class="mb-0">Experience: 21+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of ENT</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column  text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Varsha.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Varsha
                                                Rangari</a>
                                            <p class="mb-0">Consultant</p>
                                            <p class="mb-0">Specialize in <span
                                                    class="text-dark-gray  fw-600">Dermatology</span></p>

                                            <p class="mb-0">Experience: 24+ Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Dermatology</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->

                            <!-- slider start -->
                            <div class="swiper-slide">
                                <!-- start review item -->
                                <div class="border-radius-10px bg-white">
                                    <div class="col team-style-06 lg-mb-30px">
                                        <div
                                            class="d-flex flex-column text-center border-radius-6px bg-base-color  position-relative">
                                            <div class="position-relative pt-4">
                                                <a href="#" class="d-inline-block position-relative"><img
                                                        class="rounded-circle doctorImg"
                                                        src="{{asset('frontend')}}/images/Harshawardhan.webp" alt="">

                                                </a>
                                            </div>
                                            <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Harshawardhan
                                                Oak</a>
                                            <p class="mb-0">Consultant</p>

                                            <p class="mb-0">Specialize in
                                                <span class="text-dark-gray  fw-600">Vascular Surgery</span>
                                            </p>
                                            <p class="mb-0">Experience: 17 Years</p>
                                            <div class="bg-main-color text-white department">
                                                <p class=" mx-auto m-0 p-3">Department of Vascular</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end review item -->
                            </div>
                            <!-- slider end -->
                            <!-- slider start -->

                            <!-- slider end -->



                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- copy -->

    <!-- Copy -->

    <section id="Reviews" class="pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="heading mb-0">Patient Reviews </h2>
                </div>
                <div class="col-4">
                    <div class="d-flex gap-3 justify-content-end iconbox">
                        <!-- start slider navigation -->
                        <div class="slider-three-slide-prev3 icon-small text-dark-gray  bg-white " tabindex="0"><i
                                class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-three-slide-next3 icon-small text-dark-gray  bg-white" tabindex="0"
                            role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-0 "
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="swiper "
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },   "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-three-slide-next3", "prevEl": ".slider-three-slide-prev3" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1800": { "slidesPerView": 2 }, "1200": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-35px pb-35px">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="testimonial p-3 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{ asset('frontend') }}/images/man.png" class="user_test" alt="user"/>
                                            <p class="mb-0 fw-700 alt-font text-dark-gray d-inline-block username ">
                                                Ayush
                                                Harsana</p>
                                        </div>
                                        <div class="d-inline-block starIcons ">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                height="24" viewBox="0 0 48 48">
                                                <path fill="#FFC107"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                                <path fill="#FF3D00"
                                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                                </path>
                                                <path fill="#4CAF50"
                                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                                </path>
                                                <path fill="#1976D2"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                            </svg>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                    </div>
                                    <p class="mb-10px lh-28 p-10px">Heartfelt thankyou/ Deep gratitude to Dr.
                                        Shalini and Dr. Pratibha for their exceptional ENT care. Your expertise,
                                        compassion, and support made a significant difference in my recovery.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial p-3 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{asset('frontend')}}/images/man.png" class="user_test" alt="user"/>                                            <p class="mb-0 fw-700 alt-font text-dark-gray d-inline-block">Mangesh
                                                Dhore</p>
                                        </div>
                                        <div class="d-inline-block starIcons ">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                height="24" viewBox="0 0 48 48">
                                                <path fill="#FFC107"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                                <path fill="#FF3D00"
                                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                                </path>
                                                <path fill="#4CAF50"
                                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                                </path>
                                                <path fill="#1976D2"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                            </svg>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                    </div>
                                    <p class="mb-10px lh-28 p-10px">Remarkable service at Aditya Birla Group. Helpful
                                        staff, smooth processes, and comfort for patients and families. Thanks for
                                        the outstanding care.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial p-3 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{asset('frontend')}}/images/man.png" class="user_test" alt="user"/>                                            <p class="mb-0 fw-700 alt-font text-dark-gray d-inline-block">Vivek Shah
                                            </p>
                                        </div>
                                        <div class="d-inline-block starIcons ">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                height="24" viewBox="0 0 48 48">
                                                <path fill="#FFC107"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                                <path fill="#FF3D00"
                                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                                </path>
                                                <path fill="#4CAF50"
                                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                                </path>
                                                <path fill="#1976D2"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                            </svg>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                    </div>
                                    <p class="mb-10px lh-28 p-10px">Aditya Birla offers excellent staff and pleasant
                                        facilities. The doctors are highly skilled and specialized.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial p-3 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <img src="{{asset('frontend')}}/images/female-student.png" class="user_test" alt="user-female"/>
                                            <p class="mb-0 fw-700 alt-font text-dark-gray d-inline-block">Tejaswini Verma</p>
                                        </div>
                                        <div class="d-inline-block starIcons ">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                                height="24" viewBox="0 0 48 48">
                                                <path fill="#FFC107"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                                <path fill="#FF3D00"
                                                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                                </path>
                                                <path fill="#4CAF50"
                                                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                                </path>
                                                <path fill="#1976D2"
                                                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                            </svg>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                    </div>
                                    <p class="mb-10px lh-28 p-10px">Aditya Birla provided exceptional care during my
                                        41-day stay, including 36 days in ICU. Special thanks to Dr. Zeya Alam, Dr.
                                        Anand Vijay, and the MICU staff for their outstanding support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video review Section with Youtube video into slider -->
    <section class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="heading mb-0">Patient Testimonials </h2>
                </div>
                <div class="col-4">
                    <div class="d-flex gap-3 justify-content-end iconbox ">
                        <!-- start slider navigation -->
                        <div class="slider-three-slide-prev4 icon-small text-dark-gray  bg-white " tabindex="0"><i
                                class="fa-solid fa-arrow-left"></i></div>
                        <div class="slider-three-slide-next4 icon-small text-dark-gray  bg-white" tabindex="0"
                            role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-0 "
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="swiper"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },   "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-three-slide-next4", "prevEl": ".slider-three-slide-prev4" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1800": { "slidesPerView": 2 }, "1200": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-35px pb-35px">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="youtubeSection position-relative">
                                    <!-- Button trigger modal -->
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#test_video1">
                                        <a style="position: relative; display: block;">
                                            <img width="100%" height="300" 
                                                 src="https://img.youtube.com/vi/0j9Mta-Mr1I/hqdefault.jpg" 
                                                 alt="YouTube Video Thumbnail" 
                                                 title="Click to watch the video" 
                                                 style="object-fit: cover;" />
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                                    <circle style="fill:#FF0000;" cx="50" cy="50" r="50"></circle>
                                                    <polygon style="fill:#FFFFFF;" points="40,30 70,50 40,70"></polygon>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <p class="video_title d-block text-dark-gray fs-20 fw-700 mb-5px mt-2">
                                    Internal Medicine
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <div class="youtubeSection position-relative">
                                    <!-- Button trigger modal -->
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#test_video2">
                                        <a style="position: relative; display: block;">
                                            <img width="100%" height="200" 
                                                 src="https://img.youtube.com/vi/S0yRl7yXf_c/hqdefault.jpg" 
                                                 alt="YouTube Video Thumbnail" 
                                                 title="Click to watch the video" 
                                                 style="object-fit: cover;" />
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                                    <circle style="fill:#FF0000;" cx="50" cy="50" r="50"></circle>
                                                    <polygon style="fill:#FFFFFF;" points="40,30 70,50 40,70"></polygon>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                    
                                <p class="video_title d-block text-dark-gray fs-20 fw-700 mb-5px mt-2">
                                    Knee Replacement
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <div class="youtubeSection position-relative">
                                    <!-- Button trigger modal -->
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#test_video3">
                                        <a style="position: relative; display: block;">
                                            <img width="100%" height="200" 
                                                 src="https://img.youtube.com/vi/uLdUiFRh8fw/hqdefault.jpg" 
                                                 alt="YouTube Video Thumbnail" 
                                                 title="Click to watch the video" 
                                                 style="object-fit: cover;" />
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                                    <circle style="fill:#FF0000;" cx="50" cy="50" r="50"></circle>
                                                    <polygon style="fill:#FFFFFF;" points="40,30 70,50 40,70"></polygon>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                               
                                <p class="video_title d-block text-dark-gray fs-20 fw-700 mb-5px mt-2">
                                    Nephrology Care
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <div class="youtubeSection position-relative">
                                    <!-- Button trigger modal -->
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#test_video4">
                                        <a style="position: relative; display: block;">
                                            <img width="100%" height="200" 
                                                 src="https://img.youtube.com/vi/CPR0zkDXPx0/hqdefault.jpg" 
                                                 alt="YouTube Video Thumbnail" 
                                                 title="Click to watch the video" 
                                                 style="object-fit: cover;" />
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                                    <circle style="fill:#FF0000;" cx="50" cy="50" r="50"></circle>
                                                    <polygon style="fill:#FFFFFF;" points="40,30 70,50 40,70"></polygon>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                              
                                <p class="video_title d-block text-dark-gray fs-20 fw-700 mb-5px mt-2">
                                    Robotic Surgery
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <div class="youtubeSection position-relative">
                                    <!-- Button trigger modal -->
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#test_video5">
                                        <a style="position: relative; display: block;">
                                            <img width="100%" height="200" 
                                                 src="https://img.youtube.com/vi/BTWEIi9q9sA/hqdefault.jpg" 
                                                 alt="YouTube Video Thumbnail" 
                                                 title="Click to watch the video" 
                                                 style="object-fit: cover;" />
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
                                                    <circle style="fill:#FF0000;" cx="50" cy="50" r="50"></circle>
                                                    <polygon style="fill:#FFFFFF;" points="40,30 70,50 40,70"></polygon>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <p class="video_title d-block text-dark-gray fs-20 fw-700 mb-5px mt-2">
                                    Brain Stroke Case
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video review Section with Youtube video into slider -->


    <section class="overflow-hidden familycare bg-gradient-very-light-gray ">
        <div class="container ">
            <div class="row  gy-4 align-items-center">
                <div class="col-lg-5   overflow-hidden appear anime-complete"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1000, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                    style="">
                    <div class="position-relative">
                        <img src="{{ asset('frontend') }}/images/familyImage.webp" class="rounded">
                    </div>
                </div>
                <div class="col-lg-7  appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h2 class="heading">Expert Care,<br> Exceptional Outcomes</h2>
                    <p>At our Specialty Clinic,
                        care isn’t just what we provide. Our clinic was
                        established to make your healthcare journey smoother, more personalized, and more compassionate.

                    </p>
                    <div class="d-flex flex-wrap gap-2 flex-column flex-md-row">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-20px h-20px  rounded-circle border border-2 border-color-transparent-white-light box-shadow-large me-10px">
                                    <i class="fa-solid fa-check fs-12 text-white"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="fw-600 xs-fs-12 fs-14">DIABETES & HYPERTENSION CLINIC</span>
                                </div>
                            </div>
                        </div>
                        <!-- start features box item -->
                        <!-- end features box item -->
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-20px h-20px rounded-circle border border-2 border-color-transparent-white-light box-shadow-large me-10px">
                                    <i class="fa-solid fa-check fs-12 text-white"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="fw-600 xs-fs-12 fs-14">STROKE REHAB CLINIC</span>
                                </div>
                            </div>
                        </div>
                        <!-- start features box item -->
                        <!-- end features box item -->
                        <div class="icon-with-text-style-08" style="">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-20px h-20px rounded-circle border border-2 border-color-transparent-white-light box-shadow-large me-10px">
                                    <i class="fa-solid fa-check fs-12 text-white"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="fw-600 xs-fs-12 fs-14">PCOD CLINIC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="fs-22 fw-600 mb-2 my-lg-2 my-2">Why <span class="text-primary">Choose us?</span></h4>
                    <div class="d-flex flex-wrap gap-3 flex-column flex-md-row">
                        <!-- start features box item -->
                       
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#bd2a20" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M11,4c-3.89844,0 -7,3.10156 -7,7v28c0,3.89844 3.10156,7 7,7h28c3.89844,0 7,-3.10156 7,-7v-24l-2,2.3125v21.6875c0,2.80078 -2.19922,5 -5,5h-28c-2.80078,0 -5,-2.19922 -5,-5v-28c0,-2.80078 2.19922,-5 5,-5h26.40625l1.59375,-2zM43.25,7.75l-19.34375,22.8125l-8.125,-7.59375l-1.375,1.46875l8.90625,8.28125l0.78125,0.71875l0.65625,-0.78125l20,-23.625z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>       
                                <div class="feature-box-content">
                                    <span class="fw-600  xs-fs-12 fs-15 ">3 Experts, 1 Seamless Consultation</span>
                                </div>
                                  </div>
                            </div>
                       
                        <!-- start features box item -->
                        <!-- end features box item -->
                        <div class="" style="">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div
                                    class="d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#bd2a20" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M11,4c-3.89844,0 -7,3.10156 -7,7v28c0,3.89844 3.10156,7 7,7h28c3.89844,0 7,-3.10156 7,-7v-24l-2,2.3125v21.6875c0,2.80078 -2.19922,5 -5,5h-28c-2.80078,0 -5,-2.19922 -5,-5v-28c0,-2.80078 2.19922,-5 5,-5h26.40625l1.59375,-2zM43.25,7.75l-19.34375,22.8125l-8.125,-7.59375l-1.375,1.46875l8.90625,8.28125l0.78125,0.71875l0.65625,-0.78125l20,-23.625z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>       
                                <div class="feature-box-content">
                                    <span class="fw-600 xs-fs-12 fs-15">Convenient & Accessible</span>
                                </div>
                                  </div>
                            </div>
                        </div>
                        <!-- start features box item -->
                        <!-- end features box item -->
                       
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                    viewBox="0,0,256,256">
                                    <g fill="#bd2a20" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M11,4c-3.89844,0 -7,3.10156 -7,7v28c0,3.89844 3.10156,7 7,7h28c3.89844,0 7,-3.10156 7,-7v-24l-2,2.3125v21.6875c0,2.80078 -2.19922,5 -5,5h-28c-2.80078,0 -5,-2.19922 -5,-5v-28c0,-2.80078 2.19922,-5 5,-5h26.40625l1.59375,-2zM43.25,7.75l-19.34375,22.8125l-8.125,-7.59375l-1.375,1.46875l8.90625,8.28125l0.78125,0.71875l0.65625,-0.78125l20,-23.625z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>       
                                <div class="feature-box-content">
                                    <span class="fw-600  xs-fs-12 fs-15">Affordable Cost</span>
                                </div>
                                  </div>
                            </div>
                       
                    </div>
                    <div class="icon-with-text-style-08 ctabtnBox" style="">
                        <div class="feature-box feature-box-left-icon-middle">

                            <div class="ctabtnBox">
                                <a href="#" class="btn btn-medium w-100 btn-base-color btn-round-edge left-icon btn-box-shadow">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- start features box item -->
                </div>
            </div>

        </div>
    </section>

    <section id="KeyStrength" class="pb-0 position-relative border-radius-10px lg-no-border-radius">
        <div class="container">
            <div class="row gy-5 ">
                <div class="col mb-2"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="heading text-center text-md-start">Emergency</h2>
                </div>
            </div>
            <div class="row py-3 gy-3 KeyStrengthbox row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-sm-2 justify-content-center mb-6"
                data-anime='{"el": "childs", "translateY": [15, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- start features box item -->
                <div class="col d-flex d-md-block">
                    <div
                        class="feature-box px-2 py-4 border-radius-10px bg-white box-shadow-double-large position-relative ">
                        <div class="feature-box-icon emergencyservices keyIcon ">
                            <img src="{{ asset('frontend') }}/images/24x7 Emergency care.png " alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fs-18 font_custom fw-700 mb-5px mt-3">24*7 Emergency Care</span>

                        </div>
                        <div class="feature-box-overlay border-radius-6px"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col d-flex  d-md-block ">
                    <div
                        class="feature-box px-2 py-4 border-radius-10px bg-white box-shadow-double-large position-relative ">
                        <div class="feature-box-icon feature-box-icon-rounded keyIcon emergencyservices ">
                            <img src="{{asset('frontend')}}/images/Expert Medical Team.png" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fs-18 font_custom font_custom fw-700 mb-5px mt-3">Expert Medical Team</span>

                        </div>

                        <div class="feature-box-overlay border-radius-6px"></div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col d-flex d-md-block ">
                    <div
                        class="feature-box px-2 py-4 border-radius-10px bg-white box-shadow-double-large position-relative ">
                        <div class="feature-box-icon feature-box-icon-rounded emergencyservices keyIcon ">
                            <img src="{{ asset('frontend') }}/images/Integrated care.png" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fs-18 font_custom fw-700 mb-5px mt-3">Integrated Care Approach
                            </span>

                        </div>
                        <div class="feature-box-overlay border-radius-6px"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col d-flex d-md-block">
                    <div
                        class="feature-box px-2 py-4 border-radius-10px position-relative  bg-white box-shadow-double-large">
                        <div class="feature-box-icon feature-box-icon-rounded emergencyservices keyIcon ">
                            <img src="{{asset('frontend')}}/images/Emergency hotline.png" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fs-18 font_custom fw-700 mb-5px mt-3">Dedicated Emergency
                                Hotline
                                For Rapid Response
                            </span>

                        </div>
                        <div class="feature-box-overlay border-radius-6px"></div>
                    </div>
                </div>
              


            </div>
        </div>
    </section>

   


    <footer class="p-0">
        <div class="footer-top bg-main-color pt-20px pb-20px lg-no-border-radius position-relative overflow-hidden">

            <div class="container py-3">
                <div class="row gy-5 align-items-start justify-content-between py-2">
                    <!-- start footer column -->
                    <div class="col-md-5 col-lg-4 col-sm-6 text-center text-sm-start ">
                        <div class="d-flex flex-column gap-3">
                            <img src="{{ asset('frontend') }}/images/footerlogo.png" class="img-fluid footerimg">
                            <div>
                                <ul class="small-icon light d-flex gap-2 text-white mt-4 p-0 ">
                                    <li><a class="facebook" href="https://www.facebook.com/ABMHPune" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a class="instagram"
                                            href="https://www.instagram.com/aditya_birla_memorial_hospital/?igshid=12cbmsde7tye3"
                                            target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/abmhpune_" target="_blank "><i
                                                class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li><a class="dribbble" href="https://adityabirlahospital.com/" target="_blank"><i
                                                class="fa-solid fa-globe"></i></a></li>
                                </ul>

                            </div>

                        </div>
                        <div class="text-start">
                            <h5 class="text-white fs-18 ls-minus-05px fw-600 mb-3"> <span class="fs-30 me-3">Need Immediate Help?</span> </h5>
                            <p class="text-white fs-18 mb-2">For Urgent Assistance</p>
                            <a href="tel:9881123033" class="fw-700 text-white">Call Us +91 98811 23033</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <h5 class="text-white fs-18 ls-minus-05px fw-600 mb-3"> <span class="fs-30 me-3">Book an Appointment</span> </h5>
                        <div class="d-flex gap-2 flex-column">
                            <div class="fw-600 text-white d-flex gap-1 align-items-center">
                                <i class="feather icon-feather-phone text-white fs-30"></i></span>
                                <span class="fw-600 text-white"><a href="tel:12345678910" class="fs-18 ls-minus-05px fw-600">+91 98811 23006</a></span>
                            </div>
                            <div class="emailbox fw-600 text-white d-flex gap-1 align-items-center">
                                <i class="fa-solid fa-envelope text-white fs-30"></i>
                                <a href="mailto:care@adityabirla.com" class="text-white">
                                    <span class="fs-18 ls-minus-05px fw-600 text-white">care@adityabirla.com</span>
                                </a>                            
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="col ">
                            <div class="d-flex flex-column gap-2 ">
                                <h6 class="mb-0 fs-22 fw-800 text-white lh-28">Join the Arogya Care Privilege Program Today!</h6>
                                <p class="fw-500 text-white fs-15 lh-20 mb-0">Experience exclusive benefits and premium care with our Arogya Care Privilege Program. Enroll now to access personalized health services, priority appointments, and more</p>
                                <div>
                                    <img src="{{ asset('frontend') }}/images/footerSecondLogo.png">

                                </div>
                                <div class="icon-with-text-style-08 " style="">
                                    <div class="feature-box feature-box-left-icon-middle">
            
                                        <div class="ctabtnBox2">
                                            <a href="# "
                                                class="btn cta-btn2 btn-medium w-100  btn-round-edge left-icon btn-box-shadow">Join
                                                Now</a>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div>
                                <div>
                                </div>
                            </div>

                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->

                        <!-- end footer column -->


                    </div>


                </div>
                <hr class="footerhr">
                <div class="col-12">
                    <div class="col last-paragraph-no-margin fs-15 text-center sm-mb-10px">
                        <p class="text-white fs-16 ls-minus-05px fw-600">© 2024 | Aditya Birla Health Services
                            Ltd.
                            | All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
    </footer>
    <!-- end footer -->
    <!-- start sticky column -->
    <!-- end sticky column -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="test_video1" tabindex="-1" aria-labelledby="test_video1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="btn-box">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" class="video-player"
                src="https://www.youtube.com/embed/0j9Mta-Mr1I?si=iJksnovBPDKFyvfA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="test_video2" tabindex="-1" aria-labelledby="test_video2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="btn-box">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/S0yRl7yXf_c?si=Ju85ql-dd9GP_SZD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="test_video3" tabindex="-1" aria-labelledby="test_video3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="btn-box">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/uLdUiFRh8fw?si=FCpLHCQdIpAZtx2C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="test_video4" tabindex="-1" aria-labelledby="test_video4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="btn-box"> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/CPR0zkDXPx0?si=sbIHoPIA0nDIzdo7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="test_video5" tabindex="-1" aria-labelledby="test_video5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="btn-box">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/BTWEIi9q9sA?si=Wmrg-XNWtLho7iev" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        </div>
    </div>

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->


    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="toast-msg" class="toast bg-primary text-white" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-warning text-dark">
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
               Request Submitted Successfully.
            </div>
        </div>
    </div>


    @push('script')
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/vendors.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.doc_slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                        disableOnInteraction: false,
                },
                pagination: {
                    el: '.slider-three-slide-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },
                breakpoints: {
                    1800: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                },
                effect: 'slide',
            });
        });

    </script>

    <script>
        var swiper = new Swiper(".swiper1", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,             
            autoplay: {
            delay: 3000,
                disableOnInteraction: false,
             },
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mySwiper = new Swiper('.patient_swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.slider-three-slide-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.patient-slider-next',
                    prevEl: '.patient-slider-prev',
                },
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },
                breakpoints: {
                    1800: {
                        slidesPerView: 2,
                    },
                    1200: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                },
                effect: 'slide',
            });
        });

        document.querySelectorAll('.nav-link').forEach(item => {
            item.addEventListener('click', function () {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
  </script>
<script>


    document.getElementById("contact-form").addEventListener("submit", function() {
        alert("hello aj");
            setTimeout(function() {
                document.getElementById("contact-form").reset(); 
                $('#toast-msg').toast('show');
            }, 500);    
    });


    document.querySelectorAll('.youtubeSection .overlay').forEach(overlay => {
        overlay.addEventListener('click', function(event) {
            event.preventDefault();
            const iframe = overlay.previousElementSibling;
            const videoUrl = iframe.src.split('?')[0];
            window.open(videoUrl, '_blank');
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const modals = document.querySelectorAll('.modal');

    modals.forEach(function (modal) {
        modal.addEventListener('hidden.bs.modal', function () {
            const iframe = modal.querySelector('iframe');
            if (iframe) {
                const src = iframe.src;
                iframe.src = ''; 
                iframe.src = src; 
            }
        });
    });
});
</script>

@endpush
</body>


</html>