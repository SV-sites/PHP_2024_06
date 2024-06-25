<?php
$name = "John";
$age = 30;
$is_student = true;
$grades = array(90, 85, 70);

echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Is Student: " . ($is_student ? 'Yes' : 'No') . "<br>";
echo "Grades: " . implode(", ", $grades) . "<br>";
?>
