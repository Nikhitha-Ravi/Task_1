<?php

$link = mysqli_connect("127.0.0.1","root","123456","assign"); 
$set=$_POST['Search'];
if($set){
$show ="SELECT * FROM basics where email='$set'";
$result = mysqli_query($link,$show);
while ($rows=mysqli_fetch_array($result))
 {
echo "name:";
echo $rows['name'];
echo "<br>";
echo "email:";
echo $rows['email'];
echo "<br>";
echo "mobile:";
echo $rows['mobile'];
echo "<br>";
echo "social:";
echo $rows['social'];
echo "<br>";

  }
}
else{
echo "NOTHING FOUND";
}
?>