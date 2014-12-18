<?php

$sum = 0;
$iteration = 1;

foreach ($_POST as $key => $value) {
    echo "Answer number: {$iteration} is: ".($value==1 ? 'Correct' : 'Incorrect')."<br>";
    if($value == 1) { $sum++; }
    $iteration++;
}
echo "<br>Total correct: {$sum}/10";