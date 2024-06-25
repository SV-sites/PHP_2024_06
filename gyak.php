<?php

$name = 'Vale';
$age = '34';
$isStudent = true;
$grade = [92, 90, 81];

echo 'Name: ' . $name . '<br>';
echo 'Age: ' . $age . '<br>';
echo 'Student: ' . ($isStudent ? 'Yes' : 'No') . "<br>";
echo 'Grade: ' . implode(', ' , $grade);



?>
