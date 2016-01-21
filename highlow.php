<?php
$number = rand(1,100);
$guess = 0;
while ($guess != $number) {
  fwrite(STDOUT, 'Guess? ');
  $guess = fgets(STDIN);

  if ($number > $guess) {
    fwrite(STDOUT, "HIGHER\n");
  } elseif ($number < $guess) {
    fwrite(STDOUT, "LOWER\n");
  } else {
    fwrite(STDOUT, "GOOD GUESS\n");
  }
}
 ?>
