<?php

$number = 6821;

// Paritás vizsgálat
echo "Hello_World<br>";
if (($number % 2 == 0) && ($number != 0)) {
    echo "a szam paros $number.<br>";
}
elseif ($number % 2 != 0 ) {
    echo "a szam paratlan $number.<br>";
}
else {
    echo "a szam egyenlo nullaval $number<br>";
}

// Switch Case

$a = 0;
switch ($a) {
    case 1: 
        echo "Egyest kaptal<br>";
        break;
    case 2: 
        echo "Kettes kaptal<br>";
        break;
    default: 
        echo "Beteg voltal<br>";
        break;
}


// for ciklus
for ($i=0;$i<5;$i++) {
    echo "i erteke: $i.<br>";
}

// foreach
$grade = array(90, 85, 70);
foreach ($grade as $ygrade) {
    echo "my is $ygrade<br>";
}


// while ciklus
$t = 0;
while ($t < 1000 ) {
    echo "$t<br>";
    $t+=21;
}

do {
    echo "Do-while count: $count<br>";
    $count++;
} while ($count < 5);

?>