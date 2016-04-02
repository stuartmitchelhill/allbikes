<?php
/*
   Template Name: Contact Us
*/

	get_header();

?>

<div class="container-fluid">
	<div class="map" id="map"></div>
	<div class="wrapper">
		<h1 class="page-title">Contact Us</h1>
		<div class="row">
			<div class="col-md-12">
				<div class=" contact-info col-md-6">
					<h5 class="sub-heading">Contact Details</h5>
					<p><i class="ab-phone"></i>(07) 3808 5050</p>
					<p><i class="ab-mail"></i>hello@allbikes.com.au</p>
					<p><i class="ab-location"></i>24 Moss Street Slack Creek<br><span> QLD, Australia 4127</span></p> 	
					<p><i class="ab-clock"></i>Mon - Fri: 8:00am - 5:00pm</p>
					<p class="shop-times">Sat: 8:00am - 12:30pm</p>
					<p class="shop-times">Sun: Closed</p>
				</div>
				
				<div class="contact-form col-md-6">
					<h5 class="sub-heading">Send us a message</h5>
					<form>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Name">
							<input type="email" class="form-control" placeholder="Email">
							<input type="text" class="form-control" placeholder="Subject">
							<textarea type="text" class="form-control textarea" placeholder="Message"></textarea>
							<a href="#" class="btn btn-custom">Send</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
     function initMap() {
        var myLatLng = {lat: -27.623090, lng: 153.1197386};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          scrollwheel: false,
          mapTypeControl: false,
          streetViewControl: false,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'AllBikes - 24 Moss St, Slacks Creek, QLD'
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUumcK6YIvFnEkuxTUqyhr68HBKljmiLY&callback=initMap" async defer></script>


<?php 

	get_footer();

?>