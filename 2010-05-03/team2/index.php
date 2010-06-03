<?php
function base33encode($numeric) {
  $short = base_convert($numeric, 10, 33);
  $short = str_replace(array("0","1","2"), array('x','y','z'), $short);
  return($short);
}

function base33decode($str) {
  return base_convert(str_replace(
      array('x','y','z'),
      array('0','1','2'), $str),
    33, 10);
}

function shorten($url) {
  $url = preg_replace('|/$|', '', $url);
  $short = reverse_lookup($url);
  if (!$short) {
    do {
      // get microtime part
      list ($time) = explode( ' ', microtime());
      // $time is a unique value
      // create shorter base33 representation
      $short = base33encode($time);
    } while (lookup($short) != null);
    store($short, $url);
  }
  return $short;
}

function store($short, $url) {
  mysql_query("insert into urls values ('$short', '$url')");
}

function lookup($short) {
  $qry = mysql_query("select * from urls where shortened = '$short'");
  if ($qry) {
    $res = mysql_fetch_assoc($qry);
    return $res['url'];
  } else {
    echo mysql_error();
    return null;
  }
}

function reverse_lookup($url) {
  $qry = mysql_query("select * from urls where url = '$url'");
  if ($qry) {
    $res = mysql_fetch_assoc($qry);
    return $res['shortened'];
  } else {
    echo mysql_error();
    return null;
  }
}

$db = mysql_connect('localhost', 'root', 'password');
mysql_select_db('shorturls');

if (!isset($_SERVER['HTTP_USER_AGENT'])) {
  echo "tests\n";
  exit;
} else {
  if($url = lookup(preg_replace('|^/|', '', $_SERVER["REQUEST_URI"]))) {
    header("Location: $url");
  } else {
    if($_POST) {
      $url = $_POST['url'];
      $short = shorten($url);
      echo $short;
    }
    ?>
    <html>
    <head>
        <title>Shortener</title>
      </head>
      <body>
        <form method="post" action="">
          <input type="text" name="url" value="" />
          <button type="submit">Shorten</button>
        </form>
      </body>
    </html>
  <?php
  }
}
?>