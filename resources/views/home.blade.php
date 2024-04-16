@extends('templates.front.main')
@section('title')
Home
@endsection

@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
@endsection

@section('body')
<section class="hero-section" style="background:#f9f9f9">
    <div class="container mt-4">
        <div class="row row-bg-hero"></div>
        <div class="row position-relative" style="z-index:100">
            <div class="col-6 pe-3 left-clm">
                <h1 class="mt-3">Building careers. Building organisations.</h1>
                <p class="mt-3">DQ Consultants is India's leading executive search and talent advisory firm, proudly
                    shaping the
                    future of multinationals and Indian businesses for over 50 years
                </p>
                <div class="flex-box d-flex justify-content-start align-items-center mt-4">
                    <div class="btn-d">
                        <a href="#" class="btn-custom">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="hero-section-slider">
                    <div style="">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/11/IMGL0097-1.webp" alt=""
                            width="100%" style="border-radius: 15px;">
                    </div>
                    <div>
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/11/mainpg-top-01.webp" alt=""
                            width="100%" style="border-radius: 15px;">
                    </div>
                    <div>
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/06/mainpg-top-03.jpg" alt=""
                            width="100%" style="border-radius: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container rounded p-5" style="background:#f3f7fa">
        <div class="row">
            <div class="col-6 d-flex justifiy-content-center align-items-center">
                <img src="/assets/imgs/certification-shild-1.png" alt="">
                <h2 class="mx-5 fs-2">Great Place to Work Certified™</h2>
            </div>
            <div class="col-6 d-flex justifiy-content-center align-items-center">
                <img src="/assets/imgs/Top-25-Signature-badge-01-1.png" alt="">
                <h2 class="mx-5 fs-2">India's Top 25 Safest Places to Work</h2>
            </div>
        </div>
    </div>
</section>

<section id="third-section">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h2 class="display-5 fw-bold">An integral part of corporate India’s journey</h2>
                <p class="mt-3">Trusted advisors to multinationals, leading Indian businesses and leadership
                    professionals</p>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="icon-box text-center px-5">
                    <div class="ibox">
                        <i class="fa-regular fa-lightbulb text-primary mb-3"></i>
                    </div>
                    <p class="fw-bold">Careers Built To Date</p>
                </div>
                <div class="icon-box text-center px-5">
                    <div class="ibox">
                        <i class="fa-solid fa-chart-gantt text-primary mb-3"></i>
                    </div>
                    <p class="fw-bold">Years of market leadership</p>
                </div>
                <div class="icon-box text-center px-5">
                    <div class="ibox">
                        <i class="fa-solid fa-diagram-project text-primary mb-3"></i>
                    </div>
                    <p class="fw-bold">Years of market leadership</p>
                </div>
                <div class="icon-box text-center px-5">
                    <div class="ibox">
                        <i class="fa-solid fa-chart-gantt text-primary mb-3"></i>
                    </div>
                    <p class="fw-bold">Years of market leadership</p>
                </div>
                <div class="icon-box text-center px-5">
                    <div class="ibox">
                        <i class="fa-solid fa-diagram-project text-primary mb-3"></i>
                    </div>
                    <p class="fw-bold">Years of market leadership</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Leadership Team -->
<section class="mt-5">
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Our Leadership Team</h2>
                <p>From one office in Kolkata to a network of offices pan India, take a look at our fascinating journey
                    in the last five decades</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="icard text-center">
                    <a href="#">
                        <img src="https://www.abcconsultants.in/wp-content/uploads/2023/07/Untitled-1200-%C3%97-1280px-17.png"
                            alt="" width="100%">
                        <h3 class="mt-2">Deepika Rana</h3>
                        <p>- Developer</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Journey -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-5 fw-bold">Our Journey</h2>
                <p class="fs-5 mt-3">From one office in Kolkata to a network of offices pan India, take a look at our
                    <br>
                    fascinating journey in the last five decades
                </p>
            </div>
        </div>
        <div class="row">

            <div class="our-journey">
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-9.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-10.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-11.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-9.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-10.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
                <div class="text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/timeline-11.png" alt=""
                        width="80%" style="display:block;margin-left:auto;margin-right:auto">
                    <h3>2023</h3>
                    <p class="px-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non libero architecto
                        perferendis aspernatur ad? Minus quasi in natus ipsa.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Industry Specialisations -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-center">
                <h2>Industry Specialisations</h2>
                <p class="my-3">We recognize that each industry and has been its own nuances in terms of management
                    style, hiring practices
                    and compensation norms. To provide clients with specialized search solutions, PICG Recruitment has
                    developed
                    expertise in the following all industries.
                </p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="industry-specialisations">
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#">
                            <i class="fa-solid fa-shop"></i>
                            <h3>Financial Services</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Services -->

<section class="other-services-section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">Other Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="other-services col-12">
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Define Job Requirements</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Tap into Industry Networks</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Implement Targeted Sourcing</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Conduct Rigorous Screening</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Reference Checks</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="slide p-3 pb-2">
                    <div class="servicecard">
                        <img src="https://picg.co/assets/images/s_banners/chemical-industry.webp" alt="" width="100%">
                        <h3 class="mt-4">Offer and Negotiation</h3>
                        <p> Our Executive Search consultants play the role of trusted advisors to help firms hire
                            top-of-the-line leaders </p>
                        <p><a href="#"><i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="background-web-fixed">

</section>

<!-- Our blogs -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-center">
                <h2>Our Blogs</h2>
                <p class="my-3">We recognize that each industry and has been its own nuances in terms of management
                    style, hiring practices
                    and compensation norms. To provide clients with specialized search solutions, PICG Recruitment has
                    developed
                    expertise in the following all industries.
                </p>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <div class="bcard">
                        <div class="imgcard">
                            <img src="https://www.abcconsultants.in/wp-content/uploads/2023/10/gabrielle-henderson-HJckKnwCXxQ-unsplash-1.jpg"
                                alt="" width="100%">
                        </div>
                        <p class="date">OCTOBER 06, 1998</p>
                        <h3 class="title">Elevate Your Leadership Interview Performance</h3>
                        <p class="paragraph">When it comes to acing a leadership interview, we all want to make a
                            memorable
                            impression that
                            sets us apart from the competition.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <div class="bcard">
                        <div class="imgcard">
                            <img src="https://www.abcconsultants.in/wp-content/uploads/2023/10/gabrielle-henderson-HJckKnwCXxQ-unsplash-1.jpg"
                                alt="" width="100%">
                        </div>
                        <p class="date">OCTOBER 06, 1998</p>
                        <h3 class="title">Elevate Your Leadership Interview Performance</h3>
                        <p class="paragraph">When it comes to acing a leadership interview, we all want to make a
                            memorable
                            impression that
                            sets us apart from the competition.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials -->
<section class="my-5">
    <div class="container">
        <div class="row" style="position:relative">
            <div class="col-3">
                <img src="/assets/imgs/quotation.svg" alt="" width="90px">
                <p class="fs-1 mt-3">Employee Testimonials. What our customers say</p>
                <a href="#" class="gbluebtn px-4 py-3 fs-5"
                    style="margin-top: 18px!important;display: inline-block;">Read More <i
                        class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <div class="col-9">
                <div id="testimonial">
                    <div class="slide">
                        <div class="innerslide">
                            <div class="d-flex justify-content-between mb-3">
                                <img src="/assets/imgs/Ankit_EMP.jpg" alt="" width="100px">
                                <img src="/assets/imgs/quotation.svg" alt="" width="100px">
                            </div>
                            <p class="">I can honestly say that my experience at ABC Consultants has been the best so
                                far. I
                                have had great opportunities to learn from exceptionally knowledgeable and down-to-earth
                                management and peers. I am particularly impressed by the company's commitment to its
                                employees.</p>
                            <hr>
                            <p class="mt-3 mb-2">Rahul Arya</p>
                            <p class="" style="font-size: 16px!important;">- General Manager</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="innerslide">
                            <div class="d-flex justify-content-between mb-3">
                                <img src="/assets/imgs/Ankit_EMP.jpg" alt="" width="100px">
                                <img src="/assets/imgs/quotation.svg" alt="" width="100px">
                            </div>
                            <p class="">I can honestly say that my experience at ABC Consultants has been the best so
                                far. I
                                have had great opportunities to learn from exceptionally knowledgeable and down-to-earth
                                management and peers. I am particularly impressed by the company's commitment to its
                                employees.</p>
                            <hr>
                            <p class="mt-3 mb-2">Rahul Arya</p>
                            <p class="" style="font-size: 16px!important;">- General Manager</p>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="innerslide">
                            <div class="d-flex justify-content-between mb-3">
                                <img src="/assets/imgs/Ankit_EMP.jpg" alt="" width="100px">
                                <img src="/assets/imgs/quotation.svg" alt="" width="100px">
                            </div>
                            <p class="">I can honestly say that my experience at ABC Consultants has been the best so
                                far. I
                                have had great opportunities to learn from exceptionally knowledgeable and down-to-earth
                                management and peers. I am particularly impressed by the company's commitment to its
                                employees.</p>
                            <hr>
                            <p class="mt-3 mb-2">Rahul Arya</p>
                            <p class="" style="font-size: 16px!important;">- General Manager</p>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="innerslide">
                            <div class="d-flex justify-content-between mb-3">
                                <img src="/assets/imgs/Ankit_EMP.jpg" alt="" width="100px">
                                <img src="/assets/imgs/quotation.svg" alt="" width="100px">
                            </div>
                            <p class="">I can honestly say that my experience at ABC Consultants has been the best so
                                far. I
                                have had great opportunities to learn from exceptionally knowledgeable and down-to-earth
                                management and peers. I am particularly impressed by the company's commitment to its
                                employees.</p>
                            <hr>
                            <p class="mt-3 mb-2">Rahul Arya</p>
                            <p class="" style="font-size: 16px!important;">- General Manager</p>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="innerslide">
                            <div class="d-flex justify-content-between mb-3">
                                <img src="/assets/imgs/Ankit_EMP.jpg" alt="" width="100px">
                                <img src="/assets/imgs/quotation.svg" alt="" width="100px">
                            </div>
                            <p class="">I can honestly say that my experience at ABC Consultants has been the best so
                                far. I
                                have had great opportunities to learn from exceptionally knowledgeable and down-to-earth
                                management and peers. I am particularly impressed by the company's commitment to its
                                employees.</p>
                            <hr>
                            <p class="mt-3 mb-2">Rahul Arya</p>
                            <p class="" style="font-size: 16px!important;">- General Manager</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
@endsection

@section('customjs')
<script src="/assets/js/front/home.js"></script>
<script src="/assets/js/front/services.js"></script>
<script src="/assets/js/front/about.js"></script>
@endsection