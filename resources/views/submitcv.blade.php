@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/submitcv.css">
@endsection

@section('body')
<div class="container-fluid bredcrups-banner">
    <div class="container py-5">
        <div class="row row-img"></div>
        <div class="row py-2" style="position: relative; z-index: 10000;">
            <div class="col-3">
                <p style="margin-top: -20px;"><a href="/" class="fs-5 text-white">Home</a> <i
                        class="fa-solid fa-chevron-right mx-1 text-white"></i><a href="/about" class="fs-5 text-white">
                        Submit your CV</a></p>
            </div>
            <div class="col-6 text-center">
                <h1 class="text-white">Submit your CV</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
<form action="" method="get">
    <section class="mt-5 submitcv">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="First Name*" name="firstName">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Last Name*" name="lastName">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <select name="gender" id="" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female" checked>Female</option>
                    </select>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input class="form-control" type="text" name="dateOfBirth" onfocus="(this.type='date')"
                        onblur="(this.type='text')" value="" placeholder="DOB*">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="email" class="form-control" placeholder="Email ID*" name="email">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="number" class="form-control" placeholder="Mobile No.*" name="mbNumber">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="City Name*" name="city">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Company*" name="company">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Designation*" name="designation">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Experience(in years)*" name="experience">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Current CTC(INR)* Eg. 954000" name="currentctc">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Degree*" name="degree">
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Institute*" name="institute">
                </div>
                <div class="col-12 col-md-4 mb-4">
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
                <div class="col-12 col-md-4 mb-4">
                    <select name="industry" id="" class="form-select">
                        <option value="">Industry*</option>
                        <option value="10000076">Accounting / Auditing</option>
                        <option value="10000002">Advertising &amp; Marketing</option>
                        <option value="10000077">Agriculture / Forestry / Fishing</option>
                        <option value="10000104">Analytics / KPO / Research</option>
                        <option value="10000005">Animation &amp; VFX</option>
                        <option value="1100118">Architecture / Interior Design</option>
                        <option value="10000007">Auto Components</option>
                        <option value="10000008">Automobile</option>
                        <option value="10000009">Aviation</option>
                        <option value="10000010">Banking</option>
                        <option value="10000011">Beauty &amp; Personal Care</option>
                        <option value="10000105">Beverage</option>
                        <option value="10000013">Biotechnology</option>
                        <option value="10000080">BPO / Call Centre</option>
                        <option value="10000015">Building Material</option>
                        <option value="10000016">Chemicals</option>
                        <option value="10000087">Clinical Research / Contract Research</option>
                        <option value="10000018">Consumer Electronics &amp; Appliances</option>
                        <option value="10000081">Content Development / Language</option>
                        <option value="10000082">Courier / Logistics</option>
                        <option value="10000083">Defence &amp; Aerospace</option>
                        <option value="10000084">Design</option>
                        <option value="10000086">E-Learning / EdTech</option>
                        <option value="10000085">Education / Training</option>
                        <option value="10000024">Electrical Equipment</option>
                        <option value="10000088">Electronic Components / Semiconductors</option>
                        <option value="10000026">Electronics Manufacturing</option>
                        <option value="10000027">Emerging Technologies</option>
                        <option value="10000028">Engineering &amp; Construction</option>
                        <option value="10000089">Events / Live Entertainment</option>
                        <option value="10000090">Facility Management Services</option>
                        <option value="10000091">Fertilizers / Pesticides / Agro chemicals</option>
                        <option value="10000092">Film / Music / Entertainment</option>
                        <option value="10000033">Financial Services</option>
                        <option value="10000093">FinTech / Payments</option>
                        <option value="10000035">Fitness &amp; Wellness</option>
                        <option value="10000036">FMCG</option>
                        <option value="1100136">Food Processing</option>
                        <option value="10000037">Furniture &amp; Furnishing</option>
                        <option value="10000038">Gaming</option>
                        <option value="10000039">Gems &amp; Jewellery</option>
                        <option value="10000094">Government / Public Administration</option>
                        <option value="10000041">Hardware &amp; Networking</option>
                        <option value="10000042">Hotels &amp; Restaurants</option>
                        <option value="10000043">Import &amp; Export</option>
                        <option value="10000044">Industrial Automation</option>
                        <option value="10000095">Industrial Equipment / Machinery</option>
                        <option value="1100035">Insurance</option>
                        <option value="10000046">Internet</option>
                        <option value="10000096">Investment Banking / Venture Capital / Private Equity
                        </option>
                        <option value="10000048">Iron &amp; Steel</option>
                        <option value="10000049">IT Services &amp; Consulting</option>
                        <option value="10000097">Law Enforcement / Security Services</option>
                        <option value="10000051">Leather</option>
                        <option value="1100096">Legal</option>
                        <option value="10000052">Management Consulting</option>
                        <option value="10000053">Medical Devices &amp; Equipment</option>
                        <option value="10000098">Medical Services / Hospital</option>
                        <option value="10000055">Metals &amp; Mining</option>
                        <option value="10000056">Miscellaneous</option>
                        <option value="10000057">NBFC</option>
                        <option value="10000099">NGO / Social Services / Industry Associations</option>
                        <option value="10000100">Oil &amp; Gas</option>
                        <option value="10000109">Packaging &amp; Containers</option>
                        <option value="10000101">Petrochemical / Plastics / Rubber</option>
                        <option value="10000061">Pharmaceutical &amp; Life Sciences</option>
                        <option value="10000062">Ports &amp; Shipping</option>
                        <option value="10000063">Power</option>
                        <option value="10000064">Printing &amp; Publishing</option>
                        <option value="10000065">Pulp &amp; Paper</option>
                        <option value="10000066">Railways</option>
                        <option value="10000067">Real Estate</option>
                        <option value="1100159">Recruitment / Staffing</option>
                        <option value="10000102">Retail</option>
                        <option value="10000069">Software Product</option>
                        <option value="10000103">Sports / Leisure &amp; Recreation</option>
                        <option value="10000106">Telecom / ISP</option>
                        <option value="10000071">Textile &amp; Apparel</option>
                        <option value="10000107">Travel &amp; Tourism</option>
                        <option value="10000108">TV / Radio</option>
                        <option value="10000074">Urban Transport</option>
                        <option value="1100169">Water Treatment / Waste Management</option>
                    </select>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <input type="text" class="form-control" placeholder="Enter your skills separated by comma*" name="skills">
                </div>
                <div class="col-12 col-md-4 mb-4 position-relative">
                    <label style="" class="filelabel"><i class="fa-solid fa-upload text-dark me-1"></i> Upload Your
                        CV</label>
                    <input type="file" class="form-control" placeholder="Upload Your CV*" id="imageInput" name="cv"
                        onchange="previewImage()">
                    <div id="preview"
                        style="width:100%;overflow:hidden;margin-top:10px;margin-left:10px;color:green;font-weight:bold">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="gbluebtn"><i class="fa-solid fa-upload text-white me-1"></i> Submit
                        Your CV</button>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection

<script>
function previewImage() {
    var preview = document.getElementById('preview');
    var fileInput = document.getElementById('imageInput');
    var file = fileInput.files[0];

    // Check if a file is selected
    if (file) {
        // Display only the file name in the preview
        preview.innerHTML = 'File Name: ' + file.name;
    } else {
        // If no file is selected, clear the preview
        preview.innerHTML = '';
    }
}
</script>