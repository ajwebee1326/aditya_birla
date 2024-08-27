<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>The Global Address</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/home.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('frontend') }}/Images/Global Logo.png" class="img-fluid logo">
                <div class=" d-flex gap-lg-5 gap-3 header-right">
                    <div class="d-flex align-items-center">
                        <a href="#" class="whatsappno">
                            <img src="{{ asset('frontend') }}/Images/whatsapp.png" class="img-fluid">
                            <span class="d-none d-md-inline ms-2 ">+68 685 88666</span>
                        </a>
                    </div>

                    <a href="#" class="downloadbtn d-none d-sm-inline">Download</a>
                    <a href="#" class="download d-inline d-sm-none"><img src="{{ asset('frontend') }}/Images/download.svg"
                            class="img-fluid"></a>

                </div>
            </div>

        </div>

    </header>

    <div id="hero-section" class="bg-primary">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 hero-content-box text-center text-lg-start">
                        <h5 data-aos="fade-right" data-aos-duration="1000" style="max-width: 500px;">Crack the code to
                            Dubai's Hidden Real Estate Market:</h5>
                        <h1 data-aos="fade-right" data-aos-duration="1500">THE SECRET TO <span>4x Investment
                                Growth</span> </h1>
                        <p data-aos="fade-right" data-aos-duration="2000">Discover Investment Opportunities in the Most
                            Premier Projects with <span class="fw-bold">up to 16.2% ROI</span> </p>

                        <div data-aos="fade-right" data-aos-duration="2500"><a href="#"
                                class="primary-btn mt-3">Download the Brochure</a></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <section id="strategy" class="overflow-hidden">
        <img src="{{ asset('frontend') }}/Images/left-side.png" data-aos="fade-right" data-aos-duration="1500"
            class="left-side img-fluid d-xl-block d-none">
        <img src="{{ asset('frontend') }}/Images/right-side-image.webp" data-aos="fade-left" data-aos-duration="1500"
            class="right-side img-fluid d-xl-block d-none">

        <div class="container ">
            <div class="row">
                <div class="title" data-aos="fade-up" data-aos-duration="1000">
                    <h2>HERE’S THE <span>STRATEGY</span> USED BY THE TOP <span>1%</span> OF <span>INVESTORS</span></h2>
                    <p class="text-center">Choose Dubai- Choose Your Gateway to High Returns</p>
                </div>
            </div>

            <div class="row gy-6 spacing">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="box d-flex flex-column gap-lg-4 gap-3 align-items-center text-center align-items-md-start text-md-start"
                        id="box1">
                        <img src="{{ asset('frontend') }}/Images/investment.webp" class="img-fluid">
                        <p class="box-title">Investment Potential and Returns:</p>
                        <p class="box-content">Dubai's real estate market offers impressive returns with an average
                            annual ROI of 16.2%
                            (source: Knight Frank's Wealth Report 2024)</p>
                        <p class="box-content2">The Dubai real estate market is projected to grow by about 15% in 2024,
                            driven by a robust
                            economy and increasing foreign investor
                            interest. </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="box d-flex flex-column gap-lg-4 gap-3 align-items-center text-center align-items-md-start text-md-start"
                        id="box2">
                        <img src="{{ asset('frontend') }}/Images/text.webp" class="img-fluid">
                        <p class="box-title">Tax Benefits:</p>
                        <p class="box-content">Dubai has no capital gains tax or tax on
                            rental income, enhancing the profitability
                            of real estate investments</p>
                        <p class="box-content2">Dubai offers rental yields ranging from 8-10%
                            annually, with prime locations like Downtown and Business Bay providing even higher
                            short-term rental returns of 11-13% (source: Dubai Land Department). </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="box d-flex flex-column gap-lg-4 gap-3 align-items-center text-center align-items-md-start text-md-start"
                        id="box3">
                        <img src="{{ asset('frontend') }}/Images/marketStability.webp" class="img-fluid">
                        <p class="box-title">Market Stability and Currency Strength:</p>
                        <p class="box-content">The stability of the Emirati Dirham (AED),
                            pegged to the US Dollar, provides a secure investment environment.</p>
                        <p class="box-content2">Dubai is renowned for its cutting-edge
                            infrastructure, top-notch facilities, and
                            luxurious lifestyle offerings. </p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="box d-flex flex-column gap-lg-4 gap-3 align-items-center text-center align-items-md-start text-md-start"
                        id="box4">
                        <img src="{{ asset('frontend') }}/Images/investment.webp" class="img-fluid">
                        <p class="box-title">Investor Sentiment:</p>
                        <p class="box-content">In the first six months of 2023, Indian investors
                            pumped approximately $335 million into Dubai's
                            real estate sector, emerging as the leading investors.</p>
                        <p class="box-content2">Investing in Dubai helps HNIs diversify their
                            portfolios with assets denominated in a stable
                            currency, reducing risk and enhancing returns. </p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="primary-btn">Learn More</a>
            </div>
        </div>

    </section>
    <section id="Apartments" class="overflow-hidden">
        <div class="container">
            <div class="row justify-content-center rowspacing ">
                <div class=" title" data-aos="fade-up" data-aos-duration="1000">
                    <h2><span>TOP 3 PRIME REAL ESTATE OPPORTUNITIES</span> IN 2024 BY <span>EMAAR</span> WITH THE GLOBAL
                        ADDRESS</h2>
                </div>
            </div>
        </div>
        <div class="spacing ">
            <div id="Luxury-Apartments" class="overflow-hidden">
                <div class="right-side-arrow d-none d-xl-block">
                    <img src="{{ asset('frontend') }}/Images/right-side-arrow.png" class="img-fluid">

                </div>
                <div class="container">
                    <div class="row align-items-center gy-4 rowspacing">
                        <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="apartments-img-box apartments-img-box-left">
                                <div class="z-1 position-relative">
                                    <img src="{{ asset('frontend') }}/Images/luxury_apartments.png" width="100%" class="img-fluid">
                                    <h6>Dubai Creek Harbour</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="apartmentDetails d-flex flex-column gap-3">
                                <h6>Luxury Apartments:</h6>
                                <div class="specification">
                                    <p>1 Bed: <span>AED 1.8 MN (750 sqft)</span></p>
                                    <p>2 Beds: <span>AED 2.8 MN (1250 sqft)</span></p>
                                    <p>3 Beds: <span>AED 4.8 MN (1750 sqft)</span></p>
                                </div>
                                <p class="highlight mt-4">Highlight:</p>
                                <p class="discription mb-0">
                                    Dubai Creek Harbour offers a prime investment opportunity due to its strategic
                                    location,
                                    innovative infrastructure, and luxury offerings. Positioned along
                                    the historic Dubai Creek and near key areas like Dubai International Airport and
                                    Downtown Dubai, it ensures excellent connectivity. The development features premium
                                    waterfront properties with top-tier amenities and eco-friendly designs. Combined
                                    with
                                    Dubai's favorable tax environment and strong economic growth, Dubai Creek Harbour
                                    promises significant property value appreciation and high rental yields and stands
                                    out
                                    as a compelling investment for discerning investors.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div id="Townhouses" class="overflow-hidden">
                <div class="left-side-arrow d-none d-xl-block">
                    <img src="{{ asset('frontend') }}/Images/left-side-arrow-image.webp" class="img-fluid">

                </div>
                <div class="container">
                    <div class="row gy-4 align-items-center flex-wrap-reverse">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                            <div class="apartmentDetails d-flex flex-column gap-3">
                                <h6>Townhouses:</h6>
                                <div class="specification">
                                    <p>3 Beds: <span>AED 2.5 MN (2500 sqft)</span></p>
                                    <p>4 Beds: <span>AED 2.8 MN (3000 sqft)</span></p>
                                </div>
                                <p class="highlight mt-4">Highlight:</p>
                                <p class="discription">
                                    The Valley, Dubai, is an outstanding real estate investment due to its strategic
                                    location, visionary development, and luxurious lifestyle offerings. Situated on
                                    Dubai-Al Ain Road, it provides excellent connectivity to key areas like Downtown
                                    Dubai and Dubai International Airport. The Valley features master-planned
                                    residential communities with spacious villas, lush green spaces, and
                                    state-of-the-art amenities, ensuring a high-quality living experience. The
                                    development's focus on sustainability, coupled with future-ready infrastructure and
                                    planned retail, leisure, and recreational facilities, promises strong property value
                                    appreciation and attractive rental yields. These factors, combined with Dubai's
                                    investor-friendly policies and robust economic growth, make The Valley a prime
                                    choice for discerning investors.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                            <div class="apartments-img-box apartments-img-box-right">
                                <div class="position-relative ">
                                    <img src="{{ asset('frontend') }}/Images/The valley.webp" class="img-fluid w-100">
                                    <h6>The Valley</h6>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="Luxury-Apartments" class="overflow-hidden">
                <div class="right-side-arrow d-none d-xl-block">
                    <img src="{{ asset('frontend') }}/Images/right-side-arrow.png" class="img-fluid">

                </div>
                <div class="container">
                    <div class="row gy-4 align-items-center wrap-reverse ">
                        <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="apartments-img-box apartments-img-box-left">
                                <div class="z-1 position-relative">
                                    <img src="{{ asset('frontend') }}/Images/luxury_apartments.png" width="100%" class="img-fluid">
                                    <h6 class="mb-0">Dubai Hills Estate</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="apartmentDetails d-flex flex-column gap-3">

                                <h6>Luxury Apartments:</h6>
                                <div class="specification">
                                    <p>1 Bed: <span>AED 1.7 MN (700 sqft)</span></p>
                                    <p>2 Beds: <span>AED 2.5 MN (1100 sqft)</span></p>
                                    <p>3 Beds: <span>AED 3.7 MN (1550 sqft)</span></p>

                                </div>
                                <p class="highlight mt-4">Highlight:</p>
                                <p class="discription">
                                    A prestigious address and excellent real estate investment Dubai Hills Estate offers
                                    luxury at its best with prime location, premium amenities, and strong growth
                                    potential.
                                    Positioned between Downtown Dubai and Dubai Marina, it offers easy access to major
                                    business, leisure, and retail hubs. The estate features a mix of high-end villas,
                                    townhouses, and apartments set amidst vast green spaces, an 18-hole championship
                                    golf
                                    course, and premium recreational facilities. The area's emphasis on sustainability
                                    and
                                    modern infrastructure, combined with Dubai's favorable tax policies and economic
                                    stability, ensures robust property value appreciation and attractive rental yields,
                                    making Dubai Hills Estate a compelling investment of the season.
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="d-flex justify-content-center align-items-center">
                <a href="" class="primary-btn">Explore Properties</a>
            </div>

        </div>


    </section>
    <section id="Steps">
        <div class="container">

            <div class=" title" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="m-auto">SECURE YOUR MOST PROMISING INVESTMENT IN JUST <span>5 SIMPLE STEPS</span></h2>
            </div>

            <div class="row justify-content-start justify-content-lg-between py-lg-5 py-4">
                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="step">
                        <p class="step-text">Step 1:</p>
                        <img src="{{ asset('frontend') }}/Images/meeting-alt 1.svg" class="img-fluid">
                        <p class="step-discription">Consultation with experts</p>
                    </div>
                </div>
                <div class=" col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <div class="step">
                        <p class="step-text">Step 2:</p>
                        <img src="{{ asset('frontend') }}/Images/apartment 1.svg" class="img-fluid">
                        <p class="step-discription">Property selection and site visit</p>
                    </div>
                </div>
                <div class=" col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="2000">
                    <div class="step">
                        <p class="step-text">Step 3:</p>
                        <img src="{{ asset('frontend') }}/Images/revenue-alt 1.svg" class="img-fluid">
                        <p class="step-discription">Financial planning and investment planning</p>
                    </div>
                </div>
                <div class=" col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="2500">
                    <div class="step">
                        <p class="step-text">Step 4:</p>
                        <img src="{{ asset('frontend') }}/Images/file-edit 1.svg" class="img-fluid">
                        <p class="step-discription">Legal formalities and documentation</p>
                    </div>
                </div>
                <div class=" col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-duration="3000">
                    <div class="step">
                        <p class="step-text">Step 5:</p>
                        <img src="{{ asset('frontend') }}/Images/lead-management 1.svg" class="img-fluid">
                        <p class="step-discription">Property acquisition and management</p>
                    </div>
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="startbtn">Start Your Investment Journey Now</a>
            </div>
        </div>
    </section>
    <section id="testimonial" class="aboutus py-4 text-center overflow-hidden">
        <div class=" container">
            <div class="row justify-content-center rowspacing ">
                <div class=" title my-4" data-aos="fade-up" data-aos-duration="1000">
                    <h2>HEAR FROM <span>OUR INVESTORS</span> AT
                        THE GLOBAL ADDRESS</h2>
                </div>
            </div>
            <div class="row ">
                <div class="mySwiper swiper text-white">
                    <div class="swiper-wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-slide  ">
                            <div class=" d-flex p-4 justify-content-evenly align-items-center">
                                <div class=" d-flex flex-column gap-2 testimonial">
                                    <div class="d-flex justify-content-between  align-items-center">
                                        <div class="d-flex justify-content-between align-items-center gap-2">
                                            <img src="{{ asset('frontend') }}/Images/userCircleImg.png" class="img-fluid align-self-center"
                                                alt="img">
                                            <div class="d-flex flex-column align-items-start gap-1">
                                                <p class="fw-bold mb-0">Anita Patel</p>
                                                <p class="mb-0">Delhi</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend') }}/Images/SVG.png" class="img-fluid">
                                    </div>
                                    <div class="">
                                        <p class="text-start">The investment opportunities in Dubai are unmatched. My
                                            property in Dubai Hills
                                            Estate has appreciated significantly with
                                            an impressive return on investment.

                                        </p>
                                    </div>
                                    <div class="d-flex gap-4 ">
                                        <img src="{{ asset('frontend') }}/Images/leftarrow.png" class="img-fluid arrow prev">
                                        <img src="{{ asset('frontend') }}/Images/rightarrow.png" class="img-fluid arrow next">

                                    </div>

                                </div>
                                <img src="{{ asset('frontend') }}/Images/user.png" class="img-fluid d-lg-block d-none userimg">


                            </div>

                        </div>
                        <div class="swiper-slide  ">
                            <div class=" d-flex p-4 justify-content-evenly align-items-center">
                                <div class=" d-flex flex-column gap-2 testimonial">
                                    <div class="d-flex justify-content-between  align-items-center">
                                        <div class="d-flex justify-content-between align-items-center gap-2">
                                            <img src="{{ asset('frontend') }}/Images/userCircleImg.png" class="img-fluid align-self-center"
                                                alt="img">
                                            <div class="d-flex flex-column align-items-start gap-1">
                                                <p class="fw-bold mb-0">Asif Ali</p>
                                                <p class="mb-0">Delhi</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend') }}/Images/SVG.png" class="img-fluid">
                                    </div>
                                    <div class="">
                                        <p class="text-start">The investment opportunities in Dubai are unmatched. My
                                            property in Dubai Hills
                                            Estate has appreciated significantly with
                                            an impressive return on investment.

                                        </p>
                                        <div class="d-flex gap-4 ">
                                            <img src="{{ asset('frontend') }}/Images/leftarrow.png" class="img-fluid arrow prev">
                                            <img src="{{ asset('frontend') }}/Images/rightarrow.png" class="img-fluid arrow next">

                                        </div>
                                    </div>

                                </div>
                                <img src="{{ asset('frontend') }}/Images/user.png" class="img-fluid d-lg-block d-none userimg">


                            </div>

                        </div>

                    </div>
                    <div class="d-flex gap-4 ">
                        <img src="{{ asset('frontend') }}/Images/leftarrow.png" class="img-fluid arrow next">
                        <img src="{{ asset('frontend') }}/Images/rightarrow.png" class="img-fluid arrow prev">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Brochure" class="my-lg-4 my-0 overflow-hidden">
        <div class="container">
            <div class="row align-items-center spacing">
                <div class="col-lg-7 col-xl-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="brochure-content d-flex flex-column gap-3 text-center text-md-start">
                        <h5>DOWNLOAD THE <span>BROCHURE</span> TO UNVEIL EXCLUSIVE INSIDER TIPS AND LEARN HOW BIG
                            PLAYEROPERATE IN <span>DUBAI’S REAL ESTATE MARKET</span></h5>
                        <div class="brochure-box">
                            <p class="turn">Now it’s your turn!</p>
                            <p class="brochure-para">Your next promising investment awaits you. Fill out the form to get
                                detailed information
                                on top investment opportunities in Dubai's premier communities.</p>
                            <p class="privacy-note">Privacy Note: Your information is secure and will not be shared.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="form-box">
                        <form id="contact-form" class="form my-2 contact-form" method="POST" action="{{ route('contactUs') }}">
                            @csrf
                            <div class="row gy-4 justify-content-between align-items-center">
                                <div class="col-12">
                                    <div class="">
                                        <label for="name" class="form-label">Name</label>
                                        <input required name="name" type="text" id="name" class="form-control" tabindex="1" placeholder=""
                                            value="{{ old('name') }}"
                                        >
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="email" class="form-label">Email</label>
                                        <input required type="email" name="email" id="email" class="form-control" placeholder="" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input required min="7" max="12"  type="text" name="phone" id="phone" class="form-control" placeholder="" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="city" class="form-label">City</label>
                                    <input required type="text" name="city" id="city" class="form-control" placeholder="" value="{{ old('city') }}">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center my-lg-4 my-2 ">
                                    <button type="submit" class="primary-btn submit-btn">Download Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-4">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4 col-lg-3">
                    <div class="footer-col-1 d-flex flex-column gap-3">
                        <a href="#" class=" d-flex gap-3">

                            <img src="{{ asset('frontend') }}/Images/whatsapp.png">
                            <p>+(334) 202-4792</p>
                        </a>
                        <a href="#">
                            <p>haddawy@comcast.net</p>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="footer-col-2 ">
                        <p>998 Devonshire Ave.Camp Hill, PA 17011 Johannesburg, South Africa</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 d-flex flex-column align-items-lg-center">
                    <div class="footer-col-3">
                        <p class="">Follow Us</p>
                        <a href="#">
                            <img src="{{ asset('frontend') }}/Images/insta.svg" class="img-fluid" title="instagram">
                        </a>
                        <a href="#">
                            <img src="{{ asset('frontend') }}/Images/facebook.svg" class="img-fluid" title="facebook">
                        </a>
                        <a href="#">
                            <img src="{{ asset('frontend') }}/Images/linkedin.svg" class="img-fluid" title="linkedin">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="d-flex justify-content-md-end my-3 my-lg-0">
                        <a href="#" class="primary-btn">Contact Us</a>
                    </div>
                </div>
            </div>
            <hr class="footer-line">
            <div class="row">
                <div class="col-12 text-center">
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

        document.getElementById("contact-form").addEventListener("submit", function() {
            setTimeout(function() {
                document.getElementById("contact-form").reset();
            }, 500); // Adjust the timeout as needed
        });

        AOS.init();
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('.header-top');
            let lastScrollY = window.scrollY;
            let ticking = false;

            function onScroll() {
                const currentScrollY = window.scrollY;

                if (currentScrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }

                if (currentScrollY > lastScrollY) {
                    header.classList.add('hidden');
                } else {
                    header.classList.remove('hidden');
                }

                lastScrollY = currentScrollY;
                ticking = false;
            }

            window.addEventListener('scroll', function () {
                if (!ticking) {
                    window.requestAnimationFrame(onScroll);
                    ticking = true;
                }
            });
        });

        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
        });
    </script>
</body>

</html>