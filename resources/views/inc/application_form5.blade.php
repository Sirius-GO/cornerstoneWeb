@include('inc.continue_application')

<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
      <br>
      <center>
        <img src="/cornerstone/storage/images/stage-5.png">
      <br><br><br>
        <h2 style="color: #013e7d;"><u>Upload C.V.</u><h2>
      <br>
      </center>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Application Form</b></div>
            <div class="card card-body">
              <form action="{{ route('stage5.store') }}" enctype="multipart/form-data"  method="POST">
                {{ csrf_field()}}
                  <div style="margin-top: 5px; padding-left: 5px; width: 100%; height: 12px; background-color: teal; color: #fff; font-size: 9px;">Upload Curriculum Vitae</div>
                  <br>
                  <label>Curriculum Vitae - Only Word or PDF files are accepted up to 2Mb</label><br>
                  <label>Upload CV</label>
                  <input name="resume" class="form-control" type="file" required><br>
                  <input type="hidden" name="submitted_application" value="TRUE" />

                  <br><br><br>
                  <button type="submit" name="submit" class="btn btn-primary">
                      <i class="fa fa-upload"></i> Upload CV and Finish
                  </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
