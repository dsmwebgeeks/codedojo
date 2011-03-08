<?php require_once('data.php'); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta name = "viewport" content = "width = device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
    <script src="jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="http://code.google.com/apis/gears/gears_init.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/geo.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/wg1.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#accordion").accordion();
    });
    </script>
    <link type="text/css" rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
  </head>
  <body onload="initialize_map();initialize()">

    <div id="map_canvas"></div>
    <div id="sorter">Sort by: <a href="">Date</a><a href="">Nearest Location</a></div>

    <div id="accordion">
      <?php for ($i = 0; $i < count($data); $i++) : ?>
         <?php $item = $data[$i]; $oddeven = ((($i+1)/2)==0) ? 'even' : 'odd'; ?>
        <h3 class="<?= $oddeven ?>">
          <a href="#"><?= $item['where'] ?> <span><?= $item['date'] ?></span></a>
        </h3>
        <div>
          <p>
            <?= $item['desc'] ?>
            <a href="#" onclick='codeAddress("<?= $item['addr'] ?>");return false'>
              <?= $item['addr'] ?>
            </a>
          </p>
        </div>
      <?php endfor; ?>
    </div>

    <div id="pages">
      <?php for ($i = 1; $i <= floor(count($all_data)/$per_page)+1; $i++) : ?>
        <?php if ($i == $current_page) : ?>
          <?= $i ?>
        <?php else : ?>
          <a href="?p=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
      <?php endfor; ?>
    </div>

  </body>
</html>
