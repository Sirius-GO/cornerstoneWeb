@extends('layouts.app')

@section('content')
<br><br>
<div class="jumbotron" style="padding: 0px;">
    <div class="jumbo-logo">
        <img src="/cornerstone/storage/images/Cornerstone_logo.jpg" style="width: 200px; max-width: 20vw;">
    </div>
    <img style="max-width: 100vw;" src="/cornerstone/storage/images/banner2.jpg">
</div>
<div class="container text-center">
    <br>
    <h1>Work with Us</h1>
</div>

@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #333; color: #eee; display: inline-block;">
      <br>
      <h2>Team Manager</h2>
      <p>Department: Operations</p>
      <p>Reports to: Operations Manager</p>
      <p>Location: Field Based</p>
      <p>Grade Level: TM4 - TM1</p>
      <br>
      <p>Job Purpose</p>
      <p>The daily planning, problem solving and operation of a project is the main task of the Team manager. To get the most from their team and to work continuously to develop the individuals in the group. Will be required to be flexible enough to work unsociable hours, which will include working away from home, throughout the UK.</p>
      <p>Responsibilies/Duties</p>
      <ul>
        <li>Supervise, train and guide team members.</li>
        <li>Implement planograms, profile shelving, replenish shelves, cleaning and EPOS labelling.</li>
        <li>Provide and collect data, timesheet and team feedback utilising technology effectively.</li>
        <li>Compliance with Health and safety at work, by following all safety standards, policy/procedures and guidelines.</li>
        <li>Communicate effectively with the Project Manager, Operations Manager and other colleagues.</li>
      </ul>
      <br>
      <p>Person Specification</p>
      <ul>
        <li>One year’s work experience in a retail (preferable) and managing people.</li>
        <li>Ability to work on own initiative, as well as part of a team. </li>
        <li>Be able to meet targets in a high pressure environment.</li>
        <li>Be able to make responsible and effective decisions.</li>
        <li>Reliable, trustworthy and efficient. </li>
        <li>Good organisational, Customer service and technical skills relevant to the role.</li>
        <li>Good literacy and numeracy skills.</li>
        <li>Professional at all times. Manage and motivate a team of people and lead by example.</li>
      </ul>
      <br>
      <p>Preferred</p>
      <ul>
        <li>Prior experience and/or ability to carry out training.</li>
        <li>Full UK driving licence.</li>
      </ul>
      <br>
      <a href="apply_online"  title="Click here to apply for this vacancy" class="btn btn-primary">Apply for this vacancy</a>
      <br><br><br>
    </div>
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #333; color: #eee; display: inline-block;">
      <br><br><br>
      <img src="/cornerstone/storage/images/hiring.png" style="width: 375px; max-width:95%;">
      <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="/cornerstone/storage/images/quote5.png" style="width: 375px; max-width:95%;">
      <br><br><br>
      <img src="/cornerstone/storage/images/career_man.png" style="width: 375px; max-width:95%;">
      <br><br>
    </div>
</div>
<br>
<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #333; color: #eee; display: inline-block;">
      <br>
      <h2>Merchandiser</h2>
      <p>Department: Operations</p>
      <p>Reports to: Team Manager</p>
      <p>Location: Field Based</p>
      <p>Grade Level: M4-M1</p>
      <br>
      <p>Job Purpose</p>
      <p>You will be joining an exciting company, we’re always looking out for talented and enthusiastic team players.</p>
      <p>As part of the Cornerstone team you will successfully implement planograms, maintain presentation by working stock, setting up, cleaning and organising product displays.</p>
      <p>Flexible enough to work throughout the UK, working unsociable hours, which will include working away from home.</p>
      <p>Responsibilies/Duties</p>
      <ul>
        <li>Utilising planograms and briefs.</li>
        <li>Merchandise and replenish shelves.</li>
        <li>Profile shelving, cleaning and EPOS labelling.</li>
        <li>Compliance with health and safety at work by following all safety standards, policy/procedures and guidelines.</li>
        <li>Communicate effectively with Team Manager and other colleagues.</li>
      </ul>
      <br>
      <p>Person Specification</p>
      <ul>
        <li>Be Confident in implementing planograms and shop floor plans.</li>
        <li>Be reliable and flexible.</li>
        <li>Work independently, as well as part of the Team.</li>
        <li>Be passionate, in maintaining high standards.</li>
        <li>Communicate effectively with Co-workers and Managers.</li>
        <li>Be able to meet targets in a high pressure environment.</li>
        <li>Trustworthy and efficient. </li>
        <li>Good literacy and numeracy skills.</li>
      </ul>
      <br>
      <p>Preferred</p>
      <ul>
        <li>Prior experience in a retail environment.</li>
        <li>Full UK driving licence.</li>
      </ul>
      <br>
      <a href="apply_online"  title="Click here to apply for this vacancy" class="btn btn-primary">Apply for this vacancy</a>
      <br><br><br>
    </div>
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #333; color: #eee; display: inline-block;">
      <br><br><br><br><br><br><br><br><img src="/cornerstone/storage/images/quote4.png" style="width: 375px; max-width:95%;">
      <br><br><br><br><br><br><br><br><br><br><br><img src="/cornerstone/storage/images/training.png" style="width: 375px; max-width:95%;">
      <br><br>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#careers').addClass('active');
    });
</script>
    @endsection
