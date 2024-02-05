<?php 

//membuat variabel menjadi array
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");
print_r($result);

//mencari file dalam directory
echo file_exists("funct1.php");

//mengganti beberapa kata dalam string
echo str_replace("dunia","zaki","Hello dunia!");

?>