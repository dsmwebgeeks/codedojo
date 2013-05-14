$(function() {
  var path = '/codedojo/2013-05-13/eheikes/';

  $.getJSON(path + 'petitions/list.js')
  .done(function(data, textStatus, jqXHR) {
    $('#content').html($('#p-list').tmpl(data));
  })
  .fail(function(jqXHR, textStatus, errorThrown) {
    console.log(jqXHR);
    console.log(textStatus);
    console.log(errorThrown);
  });
});
