<?php 

/**
 * 
 * GitHub: @celyes
 * Repo: https://github.com/celyes/phpcodes 
 * 
 */


$file = fopen("file.txt", "r"); // open file

while(!feof($file)){
    echo fgets($file); // echo line by line 
    echo "<br>"; // return after printing each line
}

fclose($file); // close file after finishing

echo "type of \$file : " . gettype($file); // echo type

