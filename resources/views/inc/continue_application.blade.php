<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12" style="background-color: #333; color: #fff;">
      <br>
      <center>
        <button
            style="font-size: 0.9em;"
            class="btn btn-success"
            data-toggle="modal"
            data-target="#appcont"
            type="button"
            name="button"> <i class="fa fa-wpforms"></i> Continue with a previously started application </button>
      </center>
      <br>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="appcont">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="position:absolute; top: 5px; right: 5px;">&times;</span></button>
        <h5 style="position: relative; padding: 5px; top: 10px; width: 100%; text-align: center;">Continue with a previously started application<br></h5>
      </div>
      <div class="modal-body">
          <!-- Check for NI Number -->
          <center>
          <form action="{{ route('ni.check') }}" method="post">
              {{ csrf_field()}}
              <div class="form-group">
                  <label style="color: #333;">Please enter your National Insurance Number</label>
                  <input type="ni" style="width: 250px;" class="form-control" id="ni" name="ni">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">
                  <i class="fa fa-file"></i> Continue with Application
              </button>
          </form>
          </center>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
