<?php

$texts = [ 
    "Hello, world!", 
    "Welcome to my website!", 
    "Enjoy your stay!", 
    "Random quote of the day!", 
    "Have a great day!" 
];

$randomText = $texts[array_rand($texts)]; 
?>
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Random Text Display</title> 
</head> 
<body> 
    <h1><?php echo $randomText; ?></h1> 
</body> 
</html> 
