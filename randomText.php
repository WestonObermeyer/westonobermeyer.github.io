<?php 
// Array of random texts 
$texts = [ 
    "Hello, world!", 
    "Welcome to my website!", 
    "Enjoy your stay!", 
    "Random quote of the day!", 
    "Have a great day!" 
]; 
 
// Select a random text 
$randomText = $texts[array_rand($texts)]; 
?> 
