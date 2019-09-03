<?php
$User_name = filter_input(INPUT_POST,"User_name");
$Email_id=filter_input(INPUT_POST,"Email_id",FILTER_VALIDATE_EMAIL);
$Mobile_no=filter_input(INPUT_POST,"Mobile_no");
$Social_id=filter_input(INPUT_POST,"Social_id");
$Password=filter_input(INPUT_POST,"Password");                       

$link = mysqli_connect("127.0.0.1","root","123456","user_details");

if (!$link) {
echo "Some error occurs.";	
}

$sql= "insert into contact_details values ('$User_name','$Email_id','$Mobile_no','$Social_id',AES_ENCRYPT('$Password','abc'))";          
if ($link->query($sql) == TRUE) {
    echo "Created a contact successfully";
} 
else 
{
    echo "Please fill in the correct details again." ;
}

?>
