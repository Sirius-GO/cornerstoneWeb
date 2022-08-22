@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
      <br>
      <center>
        <img src="/cornerstone/storage/images/stage-1.png">
      <br><br><br>
        <h2 style="color: #013e7d;"><u>Core Details</u><h2>
      <br>
      </center>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Application Form</b></div>
            <div class="card card-body">
                <form action="{{ route('stage1.store') }}" method="post">
                  {{ csrf_field()}}
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Job Role Details</div>
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Choose the job Role you wish to apply for</label>
                  <select name="role" class="form-control" style="background-color: #d3e6fb;">
                       <option value="TM">Team Manager</option>
                       <option value="Merch">Merchandiser</option>
                       <option value="Any" selected="selected">Any Role</option>
                   </select>

                   <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Core Details</div>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Title (Salutation)</label>
                   <select name="tit" class="form-control" style="background-color: #d3e6fb;">
                        <option value="Mr" selected="selected">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                    </select>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">First Name</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="f_name" placeholder="Please enter your First Name">
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Last Name</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="l_name" placeholder="Please enter your Last Name">
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Date of Birth</label>
                   <input type="date" class="form-control"  style="background-color: #d3e6fb;" name="dob" placeholder="Please enter your date of birth">
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">National Insuraance Number</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="ni" placeholder="Please enter your national insurance number">

                   <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Contact Details</div>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Email Address</label>
                    <input type="email" class="form-control"  style="background-color: #d3e6fb;" name="email" placeholder="Please enter your Email Address">
                    <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Mobile Telephone Number</label>
                    <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="telephone" placeholder="Please enter your Mobile Telephone Number">
                    <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Home Telephone Number (Optional)</label>
                    <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="home_tel" placeholder="Please enter your Home Telephone Number">


                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-arrow-circle-right"></i> Continue to Stage 2
                    </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
