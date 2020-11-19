<?php

//6. Armstrong number. Write a PHP program to check armstrong number.

echo "Task 6" . "<br>";
echo "<br>";
echo "Sorry, I could not do that!";
echo "<br>";
echo "<br>";

//7. Palindrome number. Write a PHP program to check palindrome number.

echo "Task 7" . "<br>";
echo "<br>";
$nm = 121;
if ($nm == strrev($nm)) {
    echo $nm . " is palindrome number";
} else {
    echo $nm . " is not a palindrome number";
}
echo "<br>";

$nmb = 113;
if ($nmb == strrev($nm)) {
    echo $nmb . " is palindrome number";
} else {
    echo $nmb . " is not a palindrome number";
}
echo "<br>";
echo "<br>";

//8 Fibbonaci series. Write a PHP program to print fibonacci series without using recursion and using recursion.

echo "Task 8" . "<br>";
echo "<br>";
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 8)  {  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
echo "<br>";

$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 9)  {  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
echo "<br>";
echo "<br>";


//9. Reverse number. WWrite a PHP program to reverse given number.

echo "Task 9" . "<br>";
echo "<br>";
$number = 234;
echo "Reverse number of $number is " . strrev($number);
echo "<br>";

$number2 = 14354;
echo "Reverse number of $number2 is " . strrev($number2);
echo "<br>";
echo "<br>";

//10. Reverse string. WWrite a PHP program to reverse given string.

echo "Task 10" . "<br>";
echo "<br>";
$text = "hello";
echo "Reverse string of $text is " . strrev($text); 
echo "<br>";

$text2 = "dlrow";
echo "Reverse string of $text2 is " . strrev($text2);