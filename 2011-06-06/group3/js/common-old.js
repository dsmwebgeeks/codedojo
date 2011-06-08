$(document).ready(function(){
	$.get('data.php',function(data){
		$(data).each(function(event) {
			alert(event.address);
		});
	});
});