<?php
include "header.php";
include "slidebar.php";
?>

<style>
tr,td{padding:10px !important; font-size:18px; color:#003;text-align:center;  }
</style>

      <section id="main-content">
          <section class="wrapper">
<br>
<br>
<br>
<br>
<br>
<center>
<strong><h1 align="center" style="font-size:38px !important; color:#F00; text-align:center !important;">Notification </h1>
</strong>
<br>
<br>
<table border="1" cellpadding="15" align="center">
<tr bgcolor="#CC0000">

<td>noti_id</td>
<td>noti_name</td>
<td>noti_time</td>
<td>noti_desc</td>
<td>noti_date</td>
<td>u_id</td>
<td>update</td>
<td>delete</td>
</tr>
<?php
$con=mysqli_connect('localhost','root','',"bloodbank");
mysqli_select_db($con,"bloodbank");
$query=mysqli_query($con,"select * from notification");
while($row=mysqli_fetch_array($query))
{
	$notiid=$row['noti_id'];
	echo"<tr>";
echo "<td>".$row['noti_id']."</td>";
echo "<td>".$row['noti_name']."</td>";
echo "<td>".$row['noti_time']."</td>";
echo "<td>".$row['noti_desc']."</td>";
echo "<td>".$row['noti_date']."</td>";
echo "<td>".$row['u_id']."</td>";
echo "<td>"."<a href='update_notification.php?notiid=$notiid'>UPDATE</a>"."</td>";
echo "<td>"."<a href='delete_notification.php?notiid=$notiid'>DELETE</a>"."</td>";
echo "</tr>";
}
?>
</body>
</html>