$(document).ready(function() {


function getQueryVariable(variable) {
	var query = window.location.search.substring(1);
	var vars = query.split("&");
	for (var i=0;i<vars.length;i++){
		var pair = vars[i].split("=");
		if (pair[0] == variable){
			return pair[1];
		}
	}
} 


  function initialize() {

	var lat = getQueryVariable('lat');
	var long = getQueryVariable('long');
	
	console.log(lat +" : "+long);
	
    var houseLatlng = new google.maps.LatLng(lat,long);
    //var myLatLong = new google.maps.LatLng(myLat, myLong);
    var myOptions = {
      zoom: 8,
      center: houseLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    var houseMarker = new google.maps.Marker({
        position: houseLatlng, 
        //map: map,
        title:"The House"
    });   
/*
    var myMarker = new google.maps.Marker({
        position: myLatLong, 
        //map: map,
        title:"You are here!"
    });   
*/
    
houseMarker.setMap(map);
/* myMarker.setMap(map); */
    
    
    
    
  }
if($('#map_canvas').length > 0){  
  initialize();
}



var myLat, myLong;

function getMyposition() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			return position;			
			myLat = position.coords.latitude;
			myLong = position.coords.longitude; 
		});
	} else {
	  //alert("I'm sorry, but geolocation services are not supported by your browser.");
	  return null;
	}
}

/*
function geoCoding(address){
	var addressEncoded = encodeURI(address);	
	var gApiCall = 'http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address='+ addressEncoded;
	$.getJSON(gApiCall, function(data) {	
		var items = [];
		
		$.each(data, function(key, val) {
			items.push('Key ' + key + ' : val ' + val);
		});		
		console.log(items);
	});
};
geoCoding('2805 E Porter Ave Des Moines IA');
*/


/*
$('#itemlist a').each(function(index) {

	$(this).click(function(){
		
	});	
});

*/

/*
    $.get('data.php', function(data) {
        alert(data);
    });
*/



});
