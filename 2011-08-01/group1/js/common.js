$(document).ready(function() {
    $.get('data.php', function(data) {
        alert(data);
    });
});
