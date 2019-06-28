<?php

$page = $_GET['page'];

if ( $page == "") {
	$page = "main";
	}

print "<html>
	<head>
		<title>Thunix Wiki - $page</title>
		<link rel='stylesheet' type='text/css' href='includes/theme.css'>
	</head>
	<body>";
echo ( shell_exec("/usr/bin/pandoc includes/header.md") );
echo ( shell_exec("/usr/bin/pandoc articles/$page.md") );
echo ( shell_exec("/usr/bin/pandoc includes/footer.md") );

print "	</body>
</html>";
?>
