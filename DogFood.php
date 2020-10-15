<?php

$weight = readline();   // kilograms
$age = readline();      // months
$puppy = 2;
$adult = 1;

if ($age <= 9) {
    echo "Your dog needs ";
    echo (70 * $weight) * 0.75 * $puppy;
    echo " kcal on a daily basis.";
}
if ($age > 12)  {
    echo "Your dog needs ";
    echo (70 * $weight) * 0.75 * $adult;
    echo " kcal on a daily basis.";
}
