<?php

$length = 100;
$width = 200;

echo"////////////Question 1//////////<br><br>";

echo "The area of the rectangle is: " . ($length * $width)."<br>";

echo "The perimeter of the rectangle is: " . (2 * ($length + $width));

echo"<br><br>////////////Question 2//////////<br><br>";

$price = 1005;

if ($price > 1000) {
    $vat = $price * 0.15;
    $final_price = $price + $vat;
    echo "final price: " . $final_price;
} else {
    echo "No discount applied. The price is: " . $price;
}

echo"<br><br>////////////Question 3//////////<br><br>";

$number = 5;

if($number%2==0){

echo "The number ".$number." is even.";
}
else{
    echo "The number ".$number." is odd.";  

}

echo"<br><br>////////////Question 4//////////<br><br>";

$a = 5;
$b = 6;
$c = 7;

if($a > $b && $a > $c) {
    echo "The largest number is: " . $a;
} elseif ($b > $a && $b > $c) {
    echo "The largest number is: " . $b;
} else {
    echo "The largest number is: " . $c;
}

echo"<br><br>////////////Question 5//////////<br><br>";

for($i = 10; $i <= 100; $i++) {

    if($i % 2 != 0) {
        echo $i . " ";
    }


}


echo"<br><br>////////////Question 6//////////<br><br>";

$numbers = [1, 2, 3, 4, 5];
 
$num = 5;

for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i] == $num) {
        echo "The number " . $num . " is found in the array.";
        break;
}
}

echo"<br><br>////////////Question 7//////////<br><br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
}
    echo "<br>"; 
}

echo "<br><br>";

$num = 1;

for($i=3;$i>=1;$i--){

$num = 1;

    for($j=1;$j<= $i;$j++){

    echo "".$num++;

    }

    echo "<br>";

}

echo "<br><br>";

$num = 'A';

for($i=3;$i>=1;$i--){

    for($j=1;$j<= $i;$j++){

    echo "".$num++;

    }

    echo "<br>";

}

?>