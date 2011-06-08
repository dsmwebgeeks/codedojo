$(document).ready(function() {

	 $.getJSON('file:///Users/justinstevens/Dropbox/FileDump/OpenJobs/WebGeeks/www/data.json',
	 function(data) {  
		var item;
	    $.each(data, function(key, val) { 
		    item = ('<li id="' + val.id + '" class="'+ (val.completed ? 'checked' : '') +'"><a href=""><span class="check"></span><address>' + val.address + '</address><span class="note">' + val.note + '</span></a></li>');   
		    $(item).fadeIn(800).appendTo('#itemlist');
	    }); 
	});

});
