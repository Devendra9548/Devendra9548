@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/executive-careers.css">
@endsection
@section('body')
<div class="container-fluid bredcrups-banner">
    <div class="container py-5">
        <div class="row row-img"></div>
        <div class="row py-2" style="position: relative; z-index: 10000;">
            <div class="col-3">
                <p style="margin-top: -20px;"><a href="/" class="fs-5 text-white">Home</a> <i
                        class="fa-solid fa-chevron-right mx-1 text-white"></i><a href="/about" class="fs-5 text-white">
                        Executive Careers</a></p>
            </div>
            <div class="col-6 text-center">
                <h1 class="text-white">Executive Careers</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <p class="mb-3">Due to client confidentiality, we do not publish all the jobs we are currently working
                    on.</p>

                <p>If you cannot find a relevant opportunity by browsing our jobs, please send us your details by
                    clicking here.</p>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <div class="btn-d">
                    <a href="#" class="btn-custom">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2>Browse jobs</h2>
            </div>
        </div>
        <form action="">
            <div class="row border-2">

                <div class="col-12 col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="jobtitle" class="form-label">Job Title</label>
                        <input type="jobtitle" class="form-control" id="jobtitle" placeholder="Job Title, Skills"
                            name="jobtitle">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="function" class="form-label">Function:</label>
                        <select name="function" id="" class="form-select">
                            <option value="">Function*</option>
                            <option value="1472649">Administration &amp; Facilities</option>
                            <option value="2000043">Aviation &amp; Aerospace</option>
                            <option value="1472654">BFSI, Investments &amp; Trading</option>
                            <option value="2000041">Construction &amp; Site Engineering</option>
                            <option value="2000040">Consulting</option>
                            <option value="1472655">Content, Editorial &amp; Journalism</option>
                            <option value="10001282">CSR &amp; Social Service</option>
                            <option value="2000028">Customer Success, Service &amp; Operations</option>
                            <option value="2000078">Data Science &amp; Analytics</option>
                            <option value="10001295">Energy &amp; Mining</option>
                            <option value="2000027">Engineering - Hardware &amp; Networks</option>
                            <option value="10001457">Engineering - Software &amp; QA</option>
                            <option value="10001363">Environment Health &amp; Safety</option>
                            <option value="1445033">Finance &amp; Accounting</option>
                            <option value="1472662">Food, Beverage &amp; Hospitality</option>
                            <option value="2000035">Healthcare &amp; Life Sciences</option>
                            <option value="1472663">Human Resources</option>
                            <option value="2000019">IT &amp; Information Security</option>
                            <option value="2000075">IT Software - Application Programme, Maintenance</option>
                            <option value="2000004">IT Software - Client / Server Programming</option>
                            <option value="2000005">IT Software - DBA, Data warehousing</option>
                            <option value="2000006">IT Software - eCommerce, Internet Technologies</option>
                            <option value="2000077">IT Software - Embed, EDA, VLSI, ASIC, Chip Design</option>
                            <option value="2000009">IT Software - ERP, CRM</option>
                            <option value="2000010">IT Software - Mainframe</option>
                            <option value="2000012">IT Software - Middleware</option>
                            <option value="2000014">IT Software - Mobile</option>
                            <option value="2000021">IT Software - Other</option>
                            <option value="2000023">IT Software - QA &amp; Testing</option>
                            <option value="2000024">IT Software - System Programming</option>
                            <option value="2000025">IT Software - Systems, EDP, MIS</option>
                            <option value="2000026">IT Software - Telecom Software</option>
                            <option value="2000029">Legal &amp; Regulatory</option>
                            <option value="2000030">Marketing &amp; Communication</option>
                            <option value="2000045">Media Production &amp; Entertainment</option>
                            <option value="1472657">Merchandising, Retail &amp; eCommerce</option>
                            <option value="2000031">Other</option>
                            <option value="2000033">Packaging</option>
                            <option value="2000037">Procurement &amp; Supply Chain</option>
                            <option value="10001212">Product Management</option>
                            <option value="2000036">Production, Manufacturing &amp; Engineering</option>
                            <option value="10001226">Project &amp; Program Management</option>
                            <option value="10001259">Quality Assurance</option>
                            <option value="1472656">Research &amp; Development</option>
                            <option value="10001377">Risk Management &amp; Compliance</option>
                            <option value="2000038">Sales &amp; Business Development</option>
                            <option value="2000079">Security Services</option>
                            <option value="1472660">Shipping &amp; Maritime</option>
                            <option value="10001414">Sports, Fitness &amp; Personal Care</option>
                            <option value="2000039">Strategic &amp; Top Management</option>
                            <option value="2000042">Teaching &amp; Training</option>
                            <option value="1460308">UX, Design &amp; Architecture</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-3 mt-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" class="form-control" id="location" placeholder="Location" name="location">
                    </div>
                </div>
                <div class="col-12 text-center mt-4 mb-3">
                    <div class="btn-d text-center">
                        <button class="btn-custom" type="submit" style="margin-left: auto;margin-right: auto;">Get In
                            Touch <i class="fa-solid fa-arrow-right"></i></button></a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h2>Search Results</h2>
        </div>
        <div class="row">
            <table class="table result-table">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="left">
                            <p>Head - School of Pharmacy</p>
                        </td>
                        <td class="d-flex justify-content-end align-items-center">
                            <p class="location me-3"><i class="fa-solid fa-location-dot"></i> Location</p>
                            <div class="btn-d text-center">
                                <button class="btn-custom" type="submit"
                                    style="margin-left: auto;margin-right: auto;">Get In Touch <i
                                        class="fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">
                            <p>Head - School of Pharmacy</p>
                        </td>
                        <td class="d-flex justify-content-end align-items-center">
                            <p class="location me-3"><i class="fa-solid fa-location-dot"></i> Location</p>
                            <div class="btn-d text-center">
                                <button class="btn-custom" type="submit"
                                    style="margin-left: auto;margin-right: auto;">Get In Touch <i
                                        class="fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">
                            <p>Head - School of Pharmacy</p>
                        </td>
                        <td class="d-flex justify-content-end align-items-center">
                            <p class="location me-3"><i class="fa-solid fa-location-dot"></i> Location</p>
                            <div class="btn-d text-center">
                                <button class="btn-custom" type="submit"
                                    style="margin-left: auto;margin-right: auto;">Get In Touch <i
                                        class="fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">
                            <p>Head - School of Pharmacy</p>
                        </td>
                        <td class="d-flex justify-content-end align-items-center">
                            <p class="location me-3"><i class="fa-solid fa-location-dot"></i> Location</p>
                            <div class="btn-d text-center">
                                <button class="btn-custom" type="submit"
                                    style="margin-left: auto;margin-right: auto;">Get In Touch <i
                                        class="fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
@section('customjs')
<script src="/assets/js/front/home.js"></script>
<script src="/assets/js/front/about.js"></script>
@endsection