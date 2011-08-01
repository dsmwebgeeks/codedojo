google.load('maps','3',{other_params:'sensor=false'});

function dostuff() {
	var l = document.createElement('script');
	l.type = 'text/javascript';
	l.src = 'data.php?callback=finishup';
	document.getElementsByTagName('head')[0].appendChild(l);
	
}

function finishup(obj) {

	for(var i = 0; i<obj.length; i++) {
		var l = obj[i];
		var li = l.html = document.createElement('li');
		var address = document.createElement('address');
		var link = document.createElement('a');
		li.appendChild(link);
		link.appendChild(address);
		link.onclick = createclosure(l);
		address.appendChild(document.createTextNode(l.address));
		
		document.getElementById('itemlist').appendChild(li);
	}
	
}

function createclosure(obj) {
	return function() {
		domap(obj);
	};
}


function domap(obj) {
	document.getElementById('itemlist').style.display = 'none';
	var map = document.getElementById('gmap');
	map.style.display = 'block';
	map.style.height="500px";
	map.style.width="100%";
	
	var themap = new google.maps.Map(document.getElementById('gmap'),{
		center:new google.maps.LatLng(obj.lat,obj.lng),
		mapTypeId:google.maps.MapTypeId.HYBRID,
		zoom: 15
	});
	
	var marker = obj.marker = obj.marker ? obj.marker : new google.maps.Marker({position:new google.maps.LatLng(obj.lat,obj.lng)})
|	marker.setMap(themap);
	
	
}

window.onload = dostuff;
