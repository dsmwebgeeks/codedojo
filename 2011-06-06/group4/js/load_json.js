window.addEvent('domready', function() {


	document.id('navrefresh').addEvent('click', function(){

		// this code will send a data object via a GET request and alert the retrieved data.
		var jsonRequest = new Request.JSON({url: 'data.php', onSuccess: function(response){


			document.id('itemlist').empty();			
			response.each(function(data) { 

			var li = new Element('li');
			if(data.completed) {
				li = new Element('li', { 'class':'checked'});		
			}

        		var a = new Element('a').inject(li);

			var checked = new Element('span',{'class':'check'}).inject(a);

			var address = new Element('address', { 'text': data.address }).inject(a);
			var note = new Element('span', { 'class': 'note', 'text': data.note }).inject(a);

			li.inject(document.id('itemlist'),'top');
			

			});


		}}).get(); //{'firstName': 'John', 'lastName': 'Doe'}

		return false;


	});


});
