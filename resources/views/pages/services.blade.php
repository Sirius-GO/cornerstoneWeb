@extends('layouts.app')

@section('content')
<br><br>
<div class="jumbotron" style="padding: 0px;">
    <div class="jumbo-logo">
        <img src="/cornerstone/storage/images/Cornerstone_logo.jpg" style="width: 200px; max-width: 20vw;">
    </div>
    <img style="width: 100%;" src="/cornerstone/storage/images/banner3.jpg">
</div>
<div class="container text-center">
    <br>
    <h1>Our Services</h1>
</div>

@include('inc.retailservices')

@include('inc.polymers')

<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#services').addClass('active');
    });
</script>
@endsection
