<?php

if( !unlink('test.txt') ) {
  echo "failed\n";
}
else {
  echo "success\n";
}
?>