<?php


echo "hello world \\n\n\n...\n";

// sleep(3);

$name = "david";

echo "hello  \$name \n";


endlessLoop();


$x = 0;

function endlessLoop(){
  global $x;
  $x++;
	print "hi! $x \n";
  if ($x < 100) {
    endlessLoop();
  }

}




?>
