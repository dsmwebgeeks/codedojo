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

	<ul id="commentlist">
	<li id="opentext">There are currently no comments.</li>
	</ul>

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
  <script type="text/javascript" src="http://o.aolcdn.com/dojo/1.6/dojo/dojo.xd.js"></script> 


  <!-- scripts concatenated and minified via ant build script-->
<!--   <script src="js/plugins.js"></script> -->
  <script src="js/script.js"></script>
<!--   <script src="js/common.js"></script>   -->
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

