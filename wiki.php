<?php

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<html>
	<head>
		<title>Thunix Wiki - $page</title>
	</head>
	<body>";

echo ( shell_exec("/usr/bin/pandoc /var/www/wiki.thunix.net/articles/$page.md") );

print "	</body>
</html>";
?>
