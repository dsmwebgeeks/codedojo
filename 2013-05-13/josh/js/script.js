function listItems() {
	//var endpoint = './petitions/list2.json';
	var endpoint = './petitions??signatureCountFloor=50000&signatureCountCeiling=99999'; 

	$.getJSON(endpoint, {}, function (data) {
	  var items = [];
	  var results = [];

	  $.each(data.results, function(key, val) {
	    results.push({
	    	'title': val.title,
	    	'count': val.signatureCount,
	    	'url': val.url
	    });
	  });
	
	  results.sort(function(a,b) {
	  	return (a.count - b.count) / -1;
	  });

	  for(var i=0; i<results.length; i++) {
	  	items.push('<li><a href="' + results[i].url + '">' + results[i].title + ': ' + results[i].count + ' signatures</a></li>');
	  }

	  console.log(results);

	  $('<ol/>', {
	    'class': 'petitions',
	    html: items.join('')
	  }).appendTo('.results');
	});

}

$(document).ready(function() {
	listItems();
});