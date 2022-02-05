<?php 

 $oldfile = 'test.php';
 $newfile = 'test.txt';
 
 
 if(file_exists($oldfile)) { 
      if(!copy($oldfile, $newfile)) { 
            echo "File copy failure"; 
      } else if (file_exists($newfile)) { 
        
            if(!@unlink($oldfile)){ 
                 if(@unlink($newfile)){ 
                      echo "File move failure"; 
                 } 
            } 
      } 
 } 
 ?>

