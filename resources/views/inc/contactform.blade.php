<div class="row" style="margin: 0px 5px 0px 5px; border: solid 10px #222;">
    <div class="col-12 col-md-4 col-lg-4" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <h2>Contact Us</h2>
        <br>
        <h4><u>Address</u><h4>
        <br>
        <p>Visit our head office at:</p>
        <div style="line-height: 30px;"><i style="color: #013e7d;" class="fa fa-map-marker"></i> <p style="font-size: 15px; display: inline;"> Tudor House | Hanbury Road | Pontypool | Gwent | NP4 6JL</p><br></div>
        <div style="line-height: 30px;"><i style="color: #013e7d;" class="fa fa-phone"></i> <p style="font-size: 15px; display: inline;"> 01633 740245</p><br></div>
        <div style="line-height: 30px;"><i style="color: #013e7d;" class="fa fa-fax"></i> <p style="font-size: 15px; display: inline;"> 01633 485514</p><br></div>
        <div style="line-height: 30px;"><i style="color: #013e7d;" class="fa fa-envelope"></i> <p style="font-size: 15px; display: inline;"> enquiries@cornerstoneretail.co.uk</p></div>
        <br><p style="font-size: 15px;">Registered Address:</p>
        <p style="font-size: 15px;">Tudor House | Hanbury Road | Pontypool | NP4 6JL</p>
        <p style="font-size: 15px;">Registered in England & Wales Reg No. 10688757</p>
    </div>
    <br>
    <div class="col-12 col-md-8 col-lg-8" style="background-color: #eee; color: #222; display: inline-block;">
        <br>
        <div class="card" style="box-shadow: 5px 7px 1px 1px rgba(0,0,0,0.2);">
            <div class="card card-header" style="background-color: #013e7d; color: #fff;"><b>Contact Form</b></div>
            <div class="card card-body">
              <form action="{{ route('contact.form') }}" method="post">
                {{ csrf_field()}}
                    <input type="text" class="form-control" style="background-color: #d3e6fb;" name="name" placeholder="Please enter your Name"><br>
                    <input type="email" class="form-control" style="background-color: #d3e6fb;" name="email" placeholder="Please enter your Email Address"><br>
                    <input type="text" class="form-control" style="background-color: #d3e6fb;" name="tel_no" placeholder="Please enter your Telephone Number"><br>
                    <textarea class="form-control" style="background-color: #d3e6fb;" name="message" placeholder="Please enter your message"></textarea><br>
                    <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-envelope"></i> Send
                    </button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
<div class="row" style="margin: -19px 5px 0px 5px; border: solid 10px #222;">
    <!-- Google Maps -->
    <div id="googleMap" style="width:100%;height:420px;"></div>
    <script>
    function myMap()
    {
    myCenter=new google.maps.LatLng(51.7019256,-3.0400791);
    var mapOptions= {
        center:myCenter,
        zoom:9, scrollwheel: false, draggable: false,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
        position: myCenter,
    });
    marker.setMap(map);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM0ERWi_9VlGshhy902l6opsLkwYDWGBo&callback=myMap"></script>
</div>
