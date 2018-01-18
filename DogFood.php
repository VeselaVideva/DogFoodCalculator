<?php

$weight = readline();
$age = readline();
$coef_1 = 2;
$coef_2 = 1;

if ($age <= 9) {
    echo "Your dog needs ";
    echo (70 * $weight) * 0.75 * $coef_1;
    echo " kcal on a daily basis.";
}
if ($age > 12)  {
    echo "Your dog needs ";
    echo (70 * $weight) * 0.75 * $coef_2;
    echo " kcal on a daily basis.";
}




