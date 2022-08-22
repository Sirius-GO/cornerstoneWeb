@extends('layouts.app')

@section('content')
<br><br>
<div class="jumbotron" style="padding: 0px;">
    <div class="jumbo-logo">
        <img src="/cornerstone/storage/images/Cornerstone_logo.jpg" style="width: 200px; max-width: 20vw;">
    </div>
    <img style="width: 100%;" src="/cornerstone/storage/images/banner5.jpg">
</div>
<div class="container text-center">
    <br>
    <h1>About Us</h1><br>
</div>

<div class="row" style="margin: 0px 5px 0px 5px;">
    <div class="col-12 col-md-6 col-lg-8" style="color: #eee; display: inline-block; border: solid 10px #222; padding-top: 15px;">
        <br>
        <h3>Retail</h3>
        <ul style="font-size: 20px; font-weight: 500; line-height: 40px;">
            <li>We are a nationwide retail merchandising and development business</li>
            <li>Exceptional standards and technology driven efficiencies are at the core of everything we do</li>
            <li>Our senior team has over 150 years of experience in the retail sector</li>
            <li>We are the CORNERSTONE of the retail development industry</li>
            <li>Put simply.....We deliver!</li>
        </ul>
    </div>
    <div class="col-12 col-md-6 col-lg-4" style="color: #eee; display: inline-block; border: solid 10px #222; padding-top: 15px;">
        <img style="width: 100%;" src="/cornerstone/storage/images/quote.png">
    </div>
</div>

<div class="row" style="margin: 0px 5px 0px 5px; background-color: #333; padding-top: 10px;">
    <h3>&nbsp;&nbsp;&nbsp;Our Values</h3>
    <br><br><br><br>
</div>
<div class="row" style="margin: 0px 5px 0px 5px; background-color: #333;">
    <div class="col-12 col-md-1 col-lg-1"> </div>
    <div class="col-12 col-md-2 col-lg-2">
        <center>
            <img style="width: 90%;" src="/cornerstone/storage/images/relationships.png"><br>
            <p style="padding-top: 20px;"><img style="display: inline;" src="/cornerstone/storage/images/S.png">trengthen &amp; Develop Relationships</p>
        </center>
    </div>
    <div class="col-12 col-md-2 col-lg-2">
        <center>
            <img style="width: 90%;" src="/cornerstone/storage/images/efficiency.png"><br>
            <p style="padding-top: 20px;"><img style="display: inline;" src="/cornerstone/storage/images/M.png">aximise Efficiency</p>
        </center>
    </div>
    <div class="col-12 col-md-2 col-lg-2">
        <center>
            <img style="width: 90%;" src="/cornerstone/storage/images/acc_quality.png"><br>
            <p style="padding-top: 20px;"><img style="display: inline;" src="/cornerstone/storage/images/A.png">ccountability &amp; Quality</p>
        </center>
    </div>
    <div class="col-12 col-md-2 col-lg-2">
        <center>
            <img style="width: 90%;" src="/cornerstone/storage/images/hon_resp.png"><br>
            <p style="padding-top: 20px;"><img style="display: inline;" src="/cornerstone/storage/images/R.png">espect &amp; Honesty</p>
        </center>
    </div>
    <div class="col-12 col-md-2 col-lg-2">
        <center>
            <img style="width: 90%;" src="/cornerstone/storage/images/team.png"><br>
            <p style="padding-top: 20px;"><img style="display: inline;" src="/cornerstone/storage/images/T.png">eamwork &amp; Professionalism</p>
        </center>
    </div>
    <br><br><br><br>
</div>
<div class="row" style="margin: 0px 5px 0px 5px; background-color: #333; padding-top: 20px;">
    <div class="col-12 col-md-6 col-lg-6">
        <h3>Our Mission</h3>
        <p>We are committed to exceed our customers’ expectations through the utilisation of technology and our trained personnel, with the aim to be the UK’s most admired retail support service, for its people and performance.</p>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <h3>Our Vision</h3>
        <p>We strive to improve our business continually with an innovative approach, to deliver a quality service.</p>
        <p>We want to be the most efficient support service for retail companies in the market, utilising our trained and highly motivated personnel.</p>
    </div>
    <br><br>
</div>
<div class="row" style="margin: 0px 5px 0px 5px; padding-top: 20px;">
    <div class="col-12 col-md-6 col-lg-6" style="color: #eee; line-height: 25px;">
        <br>
        <h3>Technology</h3>

        <p>We have developed a bespoke system in-house known to us as CAST. CAST stands
        for Communications And Scheduling Tools, but the system does a whole lot more.</p>

        <p>The system provides facilities for electronic interviews and induction, job
        building and staff deployment, staff scoring and feedback, store feedback and
        project overview, electronic timesheets, training tracker, documentation toolkit
        etc etc. In short the system holds data for every aspect of employment and job
        delivery, allowing Cornerstone to place the right people in the right place at the right time.</p>

        <p>For our clients it means that we can provide you with a secure on-line portal
        which gives you a complete overview of current and past projects, and all updated
        in real-time. We have the capability to create bespoke reporting mechanisms, to suit
        specific client requirements, results of which can then be accessed via your personal login.</p>
        <br>
        <center><img style="padding-top:20px; width: 90%; max-width: 300px;" src="/cornerstone/storage/images/quote2.png"></center>
    </div>
    <div class="col-12 col-md-3 col-lg-3">
        <center><img style="padding-top:20px; width: 90%; max-width: 300px; display: inline;" src="/cornerstone/storage/images/cast.png"></center>
    </div>
    <div class="col-12 col-md-3 col-lg-3">
        <center><img style="padding-top: 20px; width: 90%; max-width: 300px; display: inline;" src="/cornerstone/storage/images/cast2.png"></center>
    <br><br>
    </div>

</div>


@include('inc.polymers')


<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#about').addClass('active');
    });
</script>
    @endsection
