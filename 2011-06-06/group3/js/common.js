$(document).ready(function(){
	$.ajax({url: "data.php",
		success: function(data){
			alert(data);
			$(data).each(function(event) {
				$('#itemlist').append(event.address);
			});
		},
		error: function() {
			alert("couldn't retrieve thing");
		}
	});
});