var geocoder;
var directionDisplay;
var directionsService;
var map;
var initd = false;

function initialize() {
	if(!initd) {
		geocoder = new google.maps.Geocoder();
	    directionsDisplay = new google.maps.DirectionsRenderer();
		directionsService = new google.maps.DirectionsService();
	    var chicago = new google.maps.LatLng(41.850033, -87.6500523);
	    var myOptions = {
	      zoom:7,
	      mapTypeId: google.maps.MapTypeId.ROADMAP,
	      center: chicago
	    }
	    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	    directionsDisplay.setMap(map);
		initd=true;
	}
  }
  
function calcRoute(start,end) {
	var request = {
	    origin:start, 
	    destination:end,
	    travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	directionsService.route(request, function(response, status) {
	  if (status == google.maps.DirectionsStatus.OK) {
	    directionsDisplay.setDirections(response);
	  }
	});
}

function codeAddress(address) {
	var venueLoc;
	geocoder.geocode( 
		{ 'address': address }, 
		function(results, status) {
	  		if (status == google.maps.GeocoderStatus.OK) {
				venueLoc = results[0].geometry.location;
				//p = results[0].geometry.location;
				//venueLoc=new google.maps.LatLng(p.coords.latitude,p.coords.longitude);
			} else {
			    alert("Geocode was not successful for the following reason: " + status);
			}
	    }
	);
	
	if(geo_position_js.init())
	{
		geo_position_js.getCurrentPosition(
			function(p) {
				var pos=new google.maps.LatLng(p.coords.latitude,p.coords.longitude);
				calcRoute(pos,venueLoc);
				// map.setCenter(pos);
				// map.setZoom(14);
				// 
				// var infowindow = new google.maps.InfoWindow({
				//     content: "<strong>yes</strong>"
				// });
				// 
				// var marker = new google.maps.Marker({
				//     position: pos,
				//     map: map,
				//     title:"You are here"
				// });
				// 
				// google.maps.event.addListener(marker, 'click', function() {
				//   infowindow.open(map,marker);
				// });
			},
			function() {
				alert("not supported.");
			},
			{enableHighAccuracy:true}
		);
	}
	else
	{
		alert("Not supported.");
	}

}