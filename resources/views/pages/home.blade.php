@extends('layouts.app')

@section('content')
    <br><br>
    @include('inc.carousel')

<div class="container text-center">
    <br>
    <h1>Cornerstone Retail Services</h1>
</div>
<br>
<div class="row" style="margin: 0px 5px 0px 5px;">
    <div class="col-12 col-md-6 col-lg-3" style="background-color: #fff; color: #222; display: inline-block; border: solid 10px #222; padding-top: 15px;">
        <h3>Our Mission</h3>
        <p>We are committed to exceed our customers’ expectations through the utilisation of technology and our trained personnel, with the aim to be the UK’s most admired retail support service, for its people and performance.</p>
        <hr>
        <h3>Our Vision</h3>
        <p>We strive to improve our business continually with an innovative approach, to deliver a quality service.</p>
        <p>We want to be the most efficient support service for retail companies in the market, utilising our trained and highly motivated personnel.</p>
        <hr>
        <br><br><br>
        <img style="width: 100%;" src="/cornerstone/storage/images/TT_ILM.jpg"><br>
        <br>
    </div>
    <div class="col-12 col-md-6 col-lg-3" style="background-color: #fff; color: #222; display: inline-block; border: solid 10px #222; padding-top: 15px;">
            <img style="width: 100%;" src="/cornerstone/storage/images/aboutus.png">
        <hr>
        <h3>About Us</h3>
        <h4><u>What we do</u><h4>
        <ul style="font-size: 16px; font-weight: 500; line-height: 25px;">
            <li>New Store Refit Merchandising</li>
            <li>Store Refresh Merchandising</li>
            <li>Category Range Reviews</li>
            <li>Store Development / Seasonal Support</li>
            <li>Click & Collect Support</li>
            <li>Planogram Compliance</li>
            <li>Product Launches</li>
            <li>Store Surveys - Compliance / Mystery Shopper</li>
            <li>Certified and Accredited Training Programmes</li>
            <li>Recycled Plastics Trading</li>
        </ul>
        <br>
    </div>
    <div class="col-12 col-md-6 col-lg-3" style="background-color: #fff; color: #222; display: inline-block; border: solid 10px #222; padding-top: 15px;">
            <img style="width: 100%;" src="/cornerstone/storage/images/ourtech1.png">
        <hr>
        <h3>Our Technology</h3>
        <h4><u>Our USP</u><h4>
        <ul style="font-size: 16px; font-weight: 500; line-height: 25px;">
            <li>Advanced Communications Systems</li>
            <li>Tailor-made Client portals</li>
            <li>Project overview</li>
            <li>Intelligent reporting in real-time</li>
            <li>Structured Scoring and Feedback Data Collection</li>
            <li>Electronic Timesheets</li>
            <li>Compliance Reporting</li>
            <li>Training Tracker</li>
            <li>People Management Tools</li>
            <li>Documentation Toolkit</li>
            <li>Digital Image Collection and Date Stamped Images Gallery</li>
            <li>Documentation Toolkit</li>
            <li>Bespoke Software Development</li>
        </ul>
    </div>
    <div class="col-12 col-md-6 col-lg-3" style="background-color: #fff; color: #222; display: inline-block; border: solid 10px #222; padding-top: 15px;">
            <img style="width: 100%;" src="/cornerstone/storage/images/careers.png">
        <hr>
        <h3>Careers</h3>
        <h4><u>Work with Us</u><h4>
        <ul style="font-size: 16px; font-weight: 500; line-height: 25px;">
            <li>Team Managers</li>
            <li>Merchandisers</li>
            <li>Systems Specialists</li>
            <li>Operations Managers</li>
        </ul>
    </div>
</div>

@include('inc.contactform')

<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#home').addClass('active');
    });
</script>

@endsection
