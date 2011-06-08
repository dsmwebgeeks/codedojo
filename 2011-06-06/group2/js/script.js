/* Author: 

*/




function refresh() {

    var data;
        
    jQuery('#itemlist>li').remove();

    var html = "";
    
    jQuery.getJSON("data.php", 0, function (data, textStatus, jqXHR) {

        data.sort(function(a,b) {
            return a.id - b.id;
        });


        for(var i=0;i<data.length;i++) {

            var date = data[i].date;
            var address = data[i].address;
            var note = data[i].note;
            var completed = data[i].completed;
            var id = data[i].id;

            html += '<li';

            if (completed==true)
                html += ' class="checked"';

            html += '><a href=""><span';

            if (completed==true)
                 html += ' class="check"';

            html += '></span><address>';
            html += address;
            html += '</address><span class="note">';
            html += note + '</span></a></li>';
            
        }
        jQuery(html).appendTo('#itemlist');
    })

}

refresh(); 

var t=setInterval("refresh()",5000);

// var t=setTimeout("refresh()",5000);




