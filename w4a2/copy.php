<?php 
 
 
 $oldfile = 'test.php';
 $newfile = 'test.phps';
 
 
 if(file_exists($oldfile)) { 
      if(!copy($oldfile, $newfile)) { 
            echo "File Copy Failed"; 
      } else if (file_exists($newfile)) { 
            echo "File Copy Success"; 
      } 
 } 
 ?>
