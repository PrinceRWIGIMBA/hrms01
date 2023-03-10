@extends('layouts.master')
@section('prince','maps')
@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="card card-map">
            <div class="header">
                <h4 class="title">Google Maps</h4>
            </div>
            <div class="map">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $().ready(function(){
        demo.initGoogleMaps();
    });
</script>
@endsection