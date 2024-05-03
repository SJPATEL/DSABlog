<!-- Pro-8 : Write a PHP script to demonstrate File functions -->
<!-- 
Crate file 
Write file 
Read file  -->


<?php 

// Crateting file 
$file = fopen("Text.text","w");
print("File is Create \n");

// Write file 
$content = "Hii, This is file tutorial, and i am wrile program for file. in this product first i am create file then write this content in file and read this content from file";

fwrite($file, $content);

// Read file 
$content = fread($file , filesize("Text.text"));
echo $content;

fclose($file);



?>