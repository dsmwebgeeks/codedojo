dojo.addOnLoad(function(){
	var ul = dojo.byId("commentlist");
	function displayComment(comment){
		dojo.query('#opentext').orphan();
		dojo.create("li", {
			innerHTML: ("<span>" + new Date(comment.date)).toString() + "</span>: " + comment.body
		}, ul);
	}
	
	dojo.connect(document, "offline", function(){
		console.log("offline");
	});
	
	dojo.connect(document, "online", function(){
		console.log("online");
	});

	var comments = [];
	if (localStorage["comments"]) {
		comments = dojo.fromJson(localStorage["comments"]);
	}

	for (var i = 0; i < comments.length; i++) {
		var comment = comments[i];
		displayComment(comment);
	}
	
	dojo.connect(dojo.byId("commentform"), "submit", function(e){
		e.preventDefault();

		var comment = {
			date: new Date().getTime(),
			body: dojo.byId("commentfield").value
		};
		dojo.byId("commentfield").value = "";

		comments.push(comment);
		localStorage["comments"] = dojo.toJson(comments);
		
		displayComment(comment);
		
		dojo.xhrPut({
			url: "submit.php",
			content: comment,
			load: function(){
				console.log("online?");
			},
			error: function(e){
				console.dir(e);
				console.log("offline?", e);
			}
		});
	});
});