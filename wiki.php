<?php

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Thunix Wiki - $page</title>
		<link rel='stylesheet' type='text/css' href='includes/site.css'>
	</head>
	<body>";
echo ( shell_exec("/usr/bin/pandoc includes/header.md") );
print "<hr/>";
echo ( shell_exec("/usr/bin/pandoc articles/$page.md") );
print "<hr/>";
echo ( shell_exec("/usr/bin/pandoc includes/footer.md") );

print "	</body>
</html>";
?>
