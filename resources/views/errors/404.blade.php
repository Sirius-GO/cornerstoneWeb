@extends('layouts.app')

@section('content')
<br><br>
<div class="jumbotron" style="padding: 0px;">
    <div class="jumbo-logo">
        <img src="/cornerstone/storage/images/Cornerstone_logo.jpg" style="width: 200px; max-width: 20vw;">
    </div>
    <img style="width: 100%;" src="/cornerstone/storage/images/banner4.jpg">
</div>
<div class="container text-center">
    <br>
    <h1>404 - Page not found</h1>
	<br><br>
	<h3>Please use the navigation menu to view an alternative page.</h3>	
</div>



<script>
    $(document).ready(function () {
        $(".nav-item").removeClass("active");
        $('#home').addClass('active');
    });
</script>
@endsection
