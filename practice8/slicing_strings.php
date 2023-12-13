//slicing
$x = "Hello World!";
echo substr($x, 6, 5);


//Slice to the End
$x = "Hello World!";
echo substr($x, 6);

//Slice From the End
$x = "Hello World!";
echo substr($x, -5, 3);

//Negative Length
$x = "Hello World!";
echo substr($x, 5, -3);