@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
      <br>
      <center>
        <img src="/cornerstone/storage/images/stage-4.png">
      <br><br><br>
        <h2 style="color: #013e7d;"><u>Legalities</u><h2>
      <br>
      </center>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Application Form</b></div>
            <div class="card card-body">
              <form action="{{ route('stage4.store') }}" method="post">
                {{ csrf_field()}}
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Working Time Regulations</div>
                  <br>
                  <label>Under working time legislation no employee can be made to work more than an average of 48 hours per week, over a 17 week period. If you wish to restrict
                    your working week then you will need to opt in. If you wish to be able to work more than a 48 hour average you need to opt out. Many customers we work with
                    are based on a 50 hour week. If you choose to opt out you will not be expected to work excessive hours.</label>
                  <label>Do you wish to opt in or out? </label>&nbsp;
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" style="transform: scale(1.5);" checked name="wtr" value="In"> Opt In &nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" style="transform: scale(1.5);" name="wtr" value="Out"> Opt Out &nbsp;
                  </div>
                  <br>
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Criminal Convictions</div>
                  <label>Do you have any unspent criminal convictions? </label>&nbsp;
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" style="transform: scale(1.5);" name="crim" value="Yes"> Yes &nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" style="transform: scale(1.5);" checked name="crim" value="No"> No &nbsp;
                  </div>
                  <br>
                  <label style="font-size: 10px; font-weight: 800; line-height: 10px;">If Yes, please enter details</label>
                  <input type="text" class="form-control"  style="background-color: #d3e6fb;" name="crim_det" placeholder="If Yes, please enter details">
                  <br>
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Cornerstone Alcohol and Drugs Policy</div>
                  <label>Cornerstone operates a strict NO alcohol or Drugs policy. From time to time Cornerstone will carry out randomn drugs and alcohol testing.
                  Anyone found in possession or under the influence of drugs or alcohol will face disciplinary proceedings, which may lead to dismissal. </label>
                  <br><br>

                  <br>
                  <button type="submit" name="submit" class="btn btn-primary">
                      <i class="fa fa-arrow-circle-right"></i> Continue to Stage 5
                  </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
