@extends('templates.front.main')
@section('title')
Expertise
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/insights.css">
@endsection

@section('body')
<div class="container-fluid bredcrups-banner">
    <div class="container py-5">
        <div class="row row-img"></div>
        <div class="row py-2" style="position: relative; z-index: 10000;">
            <div class="col-3">
                <p style="margin-top: -20px;"><a href="/" class="fs-5 text-white">Home</a> <i
                        class="fa-solid fa-chevron-right mx-1 text-white"></i><a href="/about" class="fs-5 text-white">
                        Insights</a></p>
            </div>
            <div class="col-6 text-center">
                <h1 class="text-white">Insights</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
<section class="mt-5 insights">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/insights-top.jpg" alt=""
                    width="100%">
            </div>
            <div class="col-6">
                <div class="content">
                    <h2>Artificial Intelligence in Recruitment</h2>
                    <p class="my-3">In the wake of rapid changes in business needs, workforce demographics, technology,
                        lifestyle,
                        and information technologies, the challenges for the Talent Acquisition function have grown
                        manifold. To change constantly yet remain predictable, being agile yet showing long term
                        benefits, customize yet standardized – these are some of the demands that are placed in front of
                        the TA function. Balancing all these factors prove to be a challenge for recruitment
                        professionals.</p>
                    <p class="mb-3">In the wake of rapid changes in business needs, workforce demographics, technology,
                        lifestyle,
                        and information technologies, the challenges for the Talent Acquisition function have grown
                        manifold. To change constantly yet remain predictable, being agile yet showing long term
                        benefits, customize yet standardized – these are some of the demands that are placed in front of
                        the TA function. Balancing all these factors prove to be a challenge for recruitment
                        professionals.</p>
                    <a href="#" class="gbluebtn" style="display:inline-block">Read More <i
                            class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-center">The PICG Series</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-5">
                <div class="imgcard text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/insight-01.jpg" alt=""
                        width="100%">
                    <h3 class="mt-3">Talent Transformation</h3>
                    <p>The PICG Series</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-5">
                <div class="imgcard text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/insight-01.jpg" alt=""
                        width="100%">
                    <h3 class="mt-3">Talent Transformation</h3>
                    <p>The PICG Series</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="imgcard text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/insight-01.jpg" alt=""
                        width="100%">
                    <h3 class="mt-3">Talent Transformation</h3>
                    <p>The PICG Series</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="imgcard text-center">
                    <img src="https://www.abcconsultants.in/wp-content/uploads/2023/05/insight-01.jpg" alt=""
                        width="100%">
                    <h3 class="mt-3">Talent Transformation</h3>
                    <p>The PICG Series</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('customjs')
<script src="/assets/js/front/services.js"></script>
@endsection