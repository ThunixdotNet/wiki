<?php

$page= $_GET['page'];

print "<html><body>";
echo ( shell_exec("/usr/bin/pandoc $page.md") );
print "</body></html>";
?>
