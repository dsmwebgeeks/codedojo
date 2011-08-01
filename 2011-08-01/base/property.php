<?php
if($_POST) {

}
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Property <?php echo strip_tags($_GET['id']); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2" >
  <link rel="stylesheet" media="handheld" href="css/handheld.css">
  <script src="js/libs/modernizr-1.7.min.js"></script>
  <script src="js/common.js"></script>
</head>

<body>

<div id="outer" class="list">
	<header id="header">
		<nav id="nav" class="green">
			<ul id="topnav">
				<li id="navbackbtn"><a href="/" class="btn green">Back</a></li>		
				<li id="navrefresh"><a href="/"><img src="css/img/refreshbtn.png" alt="refreshbtn" /></a></li>
				<li id="navedit"><a href="/" class="btn green">Edit</a></li>
			</ul>
		</nav>
		<div id="masthead">
			<a href="/" id="oh-logo">Open Houses</a>
		</div>
	</header>
	
	<div id="main" role="main" class="comments">
	<h2>Comments:</h2>
	<dl>
	<dt>Pork tri-tip sausage chicken shoulder. Chicken tri-tip shoulder beef tail ham hock meatloaf tenderloin ribeye, turkey tongue fatback salami pork chop t-bone.</dt>
	<dd>July 1st, 2011</dd>
	<dt>Beef ribs pig sirloin, shankle biltong short ribs venison ham hock ground round short loin boudin. Turkey biltong spare ribs, tenderloin ground round ham tail venison drumstick chuck. </dt>
	<dd>July 9th, 2011</dd>
	</dl>
	<form action="" method="post" name="commentform" id="commentform">
	<label for="commentfield">Add a comment</label>
	<textarea id="commentfield" name="commentfield"></textarea>
	<button type="submit">Submit</button>
	</form>
	</div>
	
	<div id="clearfooter"></div>
	<footer id="footer">
		<p id="ft-bd"><a href="http://creativecommons.org/licenses/by/3.0/"><img src="http://i.creativecommons.org/l/by/3.0/88x31.png" alt="Creative Commons"></a> 2010 <a href="http://dmswebgeeks.com">Des Moines Web Geeks</a>.</p>
	</footer>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->



  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>

