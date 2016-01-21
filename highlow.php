<?php
if ($argc == 3 && is_numeric($argv[1]) && is_numeric($argv[2])) {
  $min = $argv[1];
  $max = $argv[2];
} else {
  $min = 1;
  $max = 100;
}
$number = mt_rand($min,$max);
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
