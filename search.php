<?php

$link = mysqli_connect("127.0.0.1","root","123456","assign");  
$set=$_POST['Search'];
if($set){
$show ="SELECT * FROM basics where Social_id=AES_ENCRYPT('$set','abc')";

$result = mysqli_query($link,$show);
while ($rows=mysqli_fetch_array($result))
 {
echo "name:";
echo $rows['user_name'];
echo "<br>";
echo "email:";
echo $rows['Email_id'];
echo "<br>";
echo "mobile:";
echo $rows['Mobile_no'];
echo "<br>";



  }
}

else{
echo "NOTHING FOUND";
}
?>