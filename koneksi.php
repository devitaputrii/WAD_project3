<?php
$conn = mysqli_connect ("127.0.0.1","root","","wad_project3");

//insert
//get data from form
//letakan di var
//create query
//execute
$result = mysqli_query($conn,"SELECT * FROM students");

//var_dump($result);
echo "<br/>";
var_dump(mysqli_fetch_object($result));


?>

