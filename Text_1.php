<?php
$user_name = filter_input(INPUT_POST,"user_name");
$Mobile_no=filter_input(INPUT_POST, "Mobile_no");
$Email_id=filter_input(INPUT_POST,"Email_id",FILTER_VALIDATE_EMAIL); 
$Social_id=filter_input(INPUT_POST, "Social_id");
$password=filter_input(INPUT_POST,"password");                       

$link = mysqli_connect("127.0.0.1","root","123456","assign");

if (!$link) {
echo "Some error occurs.";	
}

$sql= "insert into basics values ('$user_name','$Email_id','$Mobile_no',AES_ENCRYPT('$Social_id','abc'),'$password')";          
if ($link->query($sql) === TRUE) {
    echo "Created a contact successfully";
} 
else 
{
    echo "Please fill in the correct details again." ;
}

?>