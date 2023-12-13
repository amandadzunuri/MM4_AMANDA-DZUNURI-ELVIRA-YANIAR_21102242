//Upper Case
$x = "Hello World!";
echo strtoupper($x);

//Lower Case
$x = "Hello World!";
echo strtolower($x);

//Replace String
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

//Reverse a String
$x = "Hello World!";
echo strrev($x);

//Remove Whitespace
$x = " Hello World! ";
echo trim($x);

//Convert String into Array
$x = "Hello World!");
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/