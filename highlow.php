<?php
$number = mt_rand(1,100);
$guess = 0;
$numGuesses = 0;
while ($guess != $number) {
  fwrite(STDOUT, 'Guess? ');
  $guess = fgets(STDIN);
  $numGuesses++;
  if ($number > $guess) {
    fwrite(STDOUT, "HIGHER\n");
  } elseif ($number < $guess) {
    fwrite(STDOUT, "LOWER\n");
  } else {
    fwrite(STDOUT, "GOOD GUESS\n");
    fwrite(STDOUT, "Number of guesses = $numGuesses\n");
  }
}
 ?>
