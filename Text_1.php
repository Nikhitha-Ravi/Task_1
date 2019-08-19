<?php
$name = filter_input(INPUT_POST,"name");
$mobile=filter_input(INPUT_POST, "mobile");
$email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL); 
$social=filter_input(INPUT_POST, "social");
$password=filter_input(INPUT_POST,"password");                       

$link = mysqli_connect("127.0.0.1","root","123456","assign");

if (!$link) {
echo "Some error occurs.";	
}

$sql= "insert into basics values ('$name','$email','$mobile','$social','$password')";          
if ($link->query($sql) === TRUE) {
    echo "Created a contact successfully";
} 
else 
{
    echo "Please fill in the correct details again." ;
}

?>