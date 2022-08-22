@extends('layouts.app')

@section('content')
<br><br>
<div class="jumbotron" style="padding: 0px;">
    <div class="jumbo-logo">
        <img src="/cornerstone/storage/images/Cornerstone_logo.jpg" style="width: 200px; max-width: 20vw;">
    </div>
    <img style="width: 100%;" src="/cornerstone/storage/images/banner8.jpg">
</div>
<div class="container text-center">
    <br>
    <h1>Contact Us</h1>
</div>
<br>
@include('inc.contactform')

<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#contact').addClass('active');
    });
</script>
@endsection
