<?php
echo "File creation complete";
$fp = fopen("test.php", "w");

fwrite($fp, "Subin Oh\n");
fwrite($fp, "Artificial Intelligence\n");
fwrite($fp, "I need to study more after I get my degree\n");



fclose($fp);
?>