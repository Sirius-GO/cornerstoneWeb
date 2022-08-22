@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
      <br>
      <center>
        <img src="/cornerstone/storage/images/stage-2.png">
      <br><br><br>
        <h2 style="color: #013e7d;"><u>Core Details ...cont</u><h2>
      <br>
      </center>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Application Form</b></div>
            <div class="card card-body">
              <form action="{{ route('stage2.store') }}" method="post">
                {{ csrf_field()}}
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Address</div>
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">House Name / No</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="add1" placeholder="Please enter your House Name or Number">
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Street</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="add2" placeholder="Please enter your Street Name">
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Town</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="add3" placeholder="Please enter your Town Name">
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">County</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="add4" placeholder="Please enter your County Name">
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Postcode (Please Include a Space)</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="add5" placeholder="Please enter your Post Code">
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Region</label>
                  <select name="region" class="form-control" style="background-color: #d3e6fb;">
                    <option value="Wales">Wales</option>
                    <option value="South West">South West</option>
                    <option value="South East">South East</option>
                    <option value="Midlands">Midlands</option>
                    <option value="London">London</option>
                    <option value="North West">North West</option>
                    <option value="North East">North East</option>
                    <option value="Scotland">Scotland</option>
                 </select>

                   <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Right to Work in the United Kingdom</div>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Do you have the right to work in the UK?</label> &nbsp;
                   <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" style="transform: scale(1.5);" checked name="rtw" value="Yes"> Yes &nbsp;&nbsp;&nbsp;
                     <input class="form-check-input" type="radio" style="transform: scale(1.5);" name="rtw" value="No"> No &nbsp;
                   </div>
                   <br>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">If No, please enter the expiry date</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="rtw_exp" placeholder="Please enter expiry date of certificate">

                   <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Other Information</div>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Nationality</label>
                   <select name="nat" class="form-control" style="background-color: #d3e6fb;">
                          <option value="British">British</option>
                          <option value="French">French</option>
                          <option value="German">German</option>
                          <option value="Spanish">Spanish</option>
                          <option value="Italian">Italian</option>
                          <option value="Polish">Polish</option>
                          <option value="Romanian">Romanian</option>
                          <option value="Lithuanian">Lithuanian</option>
                          <option value="Indian">Indian</option>
                          <option value="Pakistani">Pakistani</option>
                          <option value="Turkish">Turkish</option>
                          <option value="Russian">Russian</option>
                          <option value="Korean">Korean</option>
                          <option value="Japanese">Japanese</option>
                          <option value="Chinese">Chinese</option>
                          <option value="South African">South African</option>
                          <option value="Nigerian">Nigerian</option>
                          <option value="Other">Other</option>
                      </select>
                      <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Country of Origin</label>
                      <select name="coo" class="form-control" style="background-color: #d3e6fb;">
                        <option value="UK">United Kingdom</option>
                        <option value="EU">European Union</option>
                        <option value="NonEU">Non European Union</option>
                      </select>

                   <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Next of Kin</div>
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Next of Kin Name</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="nok1" placeholder="Please enter your Next of Kin Full Name">
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Next of Kin Relationship</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="nok2" placeholder="Please enter your Next of Kin Relationship e.g. Mother or Spouse">
                   <label style="font-size: 10px; font-weight: 800; line-height: 10px;">Next of Kin Contact Telephone Number</label>
                   <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="nok3" placeholder="Please enter your Next of Kin Contact Telephone Number">

                   <br>
                   <button type="submit" name="submit" class="btn btn-primary">
                       <i class="fa fa-arrow-circle-right"></i> Continue to Stage 3
                   </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
