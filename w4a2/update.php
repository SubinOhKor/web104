
<?php
$file = file("test.txt");
echo "<form action=\".$PHP_SELF.\" method=\"post\">";
echo "<textarea Name=\"update\" cols=\"50\" rows=\"10\">";
foreach($file as $text) {
echo $text;
} 
echo "</textarea>";
echo "<input name=\"Submit\" type=\"submit\" value=\"Update\" />\n
</form>";
?>