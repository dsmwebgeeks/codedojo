<?php if (isset($_SERVER['HTTP_USER_AGENT'])) : ?>
  <?php
  $db = mysql_connect('localhost', 'root', 'password');
  mysql_select_db('shorturls');

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
    do {
      // get microtime part
      list ($time) = explode( ' ', microtime());
      // $time is a unique value
      // create shorter base33 representation
      $short = base33encode($time);
    } while (lookup($short) != null);
    return $short;
  }

  function store($short, $url) {
    mysql_query("insert into urls values ('$short', '$url')");
  }

  function lookup($short) {
    $qry = mysql_query("select * from urls where shortened = $short");
    if ($qry) {
      $res = mysql_fetch_assoc();
      return $res['url'];
    } else { return null; }
  }

  if($_POST){
    $url = $_POST['url'];
    $short = shorten($url);
    store($short, $url);
    echo $short;
  }

  if($_SERVER["REQUEST_URI"]) {
    print lookup(substr($_SERVER["REQUEST_URI"], 1));
    print(substr($_SERVER["REQUEST_URI"], 1));
    print("Location: $url");
    exit;
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
<?php else : ?>
<?php
echo "tests here!";
// tests
echo "\n";
?>
<?php endif; ?>