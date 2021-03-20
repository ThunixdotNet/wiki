<?php
/*
This code is Copyright(c) 2019 by ubergeek under the GPL 3 or later.
Parsedown is licensed under the MIT license.
*/

include('config.php');
include('parsedown-1.7.3/Parsedown.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'main';

// Sanitize page request so we don't allow to read EVERY markdown file
// for example ../../../home/foobar/mysecretdocument
if (strpos($page, "../") !== false) {
    $content_file = "includes/nice_try.md";
} else {
    $content_file = "articles/$page.md";
}

$Parsedown = new Parsedown();
$Parsedown->setSafeMode(true);

if(isset($_GET['style']))
	$site_style = $_GET['style'];
else
	$site_style="site";

$header  = file_get_contents("includes/header.md");
$sidebar = file_get_contents("includes/sidebar.md");
$content = file_exists($content_file) ? file_get_contents($content_file) : str_replace('$page', "$page", file_get_contents("includes/404.md"));
$footer  = file_get_contents("includes/footer.md");
 
print "<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>$site_name - $page</title>
		<link rel='stylesheet' type='text/css' href='$site_root/includes/$site_style.css'>
	</head>
	<body>
<!-- Begin Header -->

	<div id='header'>";

print $Parsedown->text($header);

print "
		</div>
<!-- End Header -->
";

print "<hr>
	<div id='body'>

<!-- Begin Sidebar  -->
		<div id='sidebar'>
";

echo $Parsedown->text($sidebar);

print "		</div>
<!-- End Sidebar -->

<!-- Begin Body -->
		<div id='content'>";

echo $Parsedown->text($content);

print "		</div>
<!-- End Body -->

	</div>

<!-- Begin Footer -->
	<div id='footer'>
	<hr>
";

echo $Parsedown->text($footer);

print "	</div>
<!-- End Footer -->

	</body>
</html>";
?>
