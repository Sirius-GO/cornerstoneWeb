@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
      <br>
      <center>
        <img src="/cornerstone/storage/images/stage-3.png">
      <br><br><br>
        <h2 style="color: #013e7d;"><u>Skills and Experience</u><h2>
      <br>
      </center>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Application Form</b></div>
            <div class="card card-body">
              <form action="{{ route('stage3.store') }}" method="post">
                {{ csrf_field()}}
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Work Experience - Choose options as appropriate</div>
                  <br>
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="pos" value="1" > Point of Sale</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="rotation" value="1" > Stock Rotation</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="fashion" value="1" > Clothing / Fashion</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="mer" value="1" > Merchandising</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="stock_ord" value="1" > Stock Ordering</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="pro_man" value="1" > Project Management</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="supervisor" value="1" > Supervisory</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="syst" value="1" > Systems</div>
                  </div>
                  <br>


                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Further Skills - Choose options as appropriate</div>
                  <br>
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="cscs" value="1" > CSCS</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="frst_aid" value="1" > First Aid</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="seirs" value="1" > SIERS</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="ipaf" value="1" > IPAF</div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="ppt" value="1" > PPT</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="cnt_bal" value="1" > FLT</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="smsts" value="1" > SMSTS</div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="sssts" value="1" > SSSTS</div>
                  </div>
                  <br>

                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Driving</div><br>
                  <select name="driver" class="form-control" style="background-color: #d3e6fb;">
                    <option value=""> ----- Please Select Appropriate Answer ----- </option>
                    <option value="Driver">I am a driver with use of my own vehicle</option>
                    <option value="Driver - no car">I am a driver, but I do not have use of a vehicle</option>
                    <option value="No">I do not drive</option>
                 </select><br>

                 <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">My Availability - Choose options as appropriate</div>
                 <br>
                 <label>Please confirm shifts you are available to work each week</label>
                 <div class="row">
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="days" value="1" > Daytime</div>
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="evenings" value="1" > Evenings</div>
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="nights" value="1" > Nights</div>
                 </div>
                 <br>
                 <div class="row">
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="saturday" value="1" > Saturday</div>
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="sunday" value="1" > Sunday</div>
                   <div class="col-12 col-sm-6 col-md-3 col-lg-3"><input style="transform: scale(1.5);" type="checkbox" name="all_types" value="1" > All</div>
                 </div>
                 <br>


                 <br>
                 <button type="submit" name="submit" class="btn btn-primary">
                     <i class="fa fa-arrow-circle-right"></i> Continue to Stage 4
                 </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
