<?php

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<!DOCTYPE html>
<html lang='e'>
	<head>
		<title>Thunix Wiki - $page</title>
		<link rel='stylesheet' type='text/css' href='includes/site.css'>
	</head>
	<body>";
echo ( shell_exec("/usr/bin/pandoc includes/header.md") );

print "<hr/>
	<div id='content' style='width=90%'>
		<div id='sidebar' style='20%;float:left;'>";
echo ( shell_exec("/usr/bin/pandoc includes/sidebar.md") );

print "	</div>
	<div='content' style='width=80%'; float:right>";

echo ( shell_exec("/usr/bin/pandoc articles/$page.md") );

print "	</div><hr/>
	</div>";

echo ( shell_exec("/usr/bin/pandoc includes/footer.md") );

print "	</body>
</html>";
?>
