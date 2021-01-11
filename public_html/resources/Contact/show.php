<?php

$content = 
'
<style>
  div#map {
    height: 400px;
  }
</style>

<strong class="card-header text-center">
  <span class="fas fa-id-card pr-2"></span>Contact us
</strong>
<div class="card-body">
  <div class="row">
    <div class="col">
      <ul class="list-group">

        <li class="list-group-item">
          <span class="fas fa-address-card text-info mr-2"></span>
          <span>Visit us at: Königsallee street in Duesseldorf, Nordrhein-Westfalen, Germany</span>
        </li>

        <li class="list-group-item">
          <span class="fas fa-phone-square text-info mr-2"></span>
          <span>Phone</span>
          <span>089 98 78 39</span>
        </li>

        <li class="list-group-item">
          <span class="fas fa-envelope text-info mr-2"></span>
          <span>Email</span>
          <a href="mailto:mockup@metacomplex.co">mockup@metacomplex.co</a>
        </li>

        <li class="list-group-item text-center">
          <span class="social_media ">
            <a class="mx-2" href="https://facebook.com" target="_blank"><img
                src="../../public/images/facebook-logo.png" /></a>
            <a class="mx-2" href="https://twitter.com" target="_blank"><img
                src="../../public/images/twitter-icon.png" /></a>
            <a class="mx-2" href="http://www.metacomplex.com/" target="_blank"><img
                src="../../public/images/metaco.jpg" /></a>
          </span>
        </li>
        <li class="list-group-item text-center">
          <div class="my-2" id="map" title="Our location on google map"></div>
        </li>
      </ul>
    </div>
  </div>
</div>

<script src="../../public/librarys/js/googleMapAPI.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0ePqa_vMBueqVRH_ESwC-0lH_YOwHqfI&callback=myMap">
</script>
'
;

$this->layout($content);
?>