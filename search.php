
<?php
echo '<input type="button" onclick="history.back();" value="Back" name="button" class="btn">';

$link = mysqli_connect("127.0.0.1","root","123456","user_details");  
$set=$_POST['Search'];

if($set){
$show ="SELECT * FROM contact_details where Email_id='$set' or User_name='$set'";
$result = mysqli_query($link,$show);

while ($rows = mysqli_fetch_array($result))
{
?>
	 <html>
	 <title> Contact Details </title>
      <table align="center" border ="1px" style="width:600px; line-height:40px;">
       <tr>
	<th colspan="4"><h2>Contact Details</h2></th>
	</tr>
	 
	<th> Name</th>
	<th> Email ID</th>
	<th> Mobile Number</th>
	

	  <tr>
	 <td><?php echo $rows['User_name']; ?></td>
	 <td><?php echo $rows['Email_id']; ?></td>
	 <td><?php echo $rows['Mobile_no']; ?></td>
	 </tr>
	 </table>
	 </html>
	 
<?php	 
exit;
}
}
?>
<html>
<h1>No user found.</h1>
</html>
