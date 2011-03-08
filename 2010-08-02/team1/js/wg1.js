var geocoder;
var map;

function initialize_map()
{
    var myOptions = {
	      zoom: 4,
	      mapTypeControl: true,
	      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	      navigationControl: true,
	      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	      mapTypeId: google.maps.MapTypeId.ROADMAP      
	    }	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}

function initialize()
{
	jQuery("#map_canvas").show();
	
	if(geo_position_js.init())
	{
		document.getElementById('current').innerHTML="Receiving...";
		geo_position_js.getCurrentPosition(show_position,function(){document.getElementById('current').innerHTML="Couldn't get location"},{enableHighAccuracy:true});
		geocoder = new google.maps.Geocoder();
	}
	else
	{
		document.getElementById('current').innerHTML="Functionality not available";
	}
}

function show_position(p)
{
	document.getElementById('current').innerHTML="latitude="+p.coords.latitude.toFixed(2)+" longitude="+p.coords.longitude.toFixed(2);
	var pos=new google.maps.LatLng(p.coords.latitude,p.coords.longitude);
	map.setCenter(pos);
	map.setZoom(14);

	var infowindow = new google.maps.InfoWindow({
	    content: "<strong>yes</strong>"
	});

	var marker = new google.maps.Marker({
	    position: pos,
	    map: map,
	    title:"You are here"
	});

	google.maps.event.addListener(marker, 'click', function() {
	  infowindow.open(map,marker);
	});
	
}

function codeAddress(address) {
	geocoder.geocode( { 'address': address}, function(results, status) {
	  if (status == google.maps.GeocoderStatus.OK) {
	    map.setCenter(results[0].geometry.location);
	    var marker = new google.maps.Marker({
	        map: map, 
	        position: results[0].geometry.location
	    });
	  } else {
	    alert("Geocode was not successful for the following reason: " + status);
	  }
	});
}