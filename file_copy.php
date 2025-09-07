<?php 
$file_name = __FILE__;
$write_file_name = __DIR__."/file_copy.php";

$file_string = file_get_contents($file_name);

file_put_contents($write_file_name,$file_string);