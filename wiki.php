<?php

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Thunix Wiki - $page</title>
		<link rel='stylesheet' type='text/css' href='/includes/site.css'>
	</head>
	<body>";
echo ( shell_exec("/usr/bin/pandoc includes/header.md") );

print "<hr>
	<div id='body' style='width: 90%;'>
		<div id='sidebar' style='width: 20%;float:left;'>";
echo ( shell_exec("/usr/bin/pandoc includes/sidebar.md") );

print "	</div>
	<div id='content' style='width: 78%; float:right;'>";

echo ( shell_exec("/usr/bin/pandoc articles/$page.md") );

print "	</div>
	</div><hr>
	<div id='footer' style='clear:both;'>";

echo ( shell_exec("/usr/bin/pandoc includes/footer.md") );

print "		</div>
	</body>
</html>";
?>
