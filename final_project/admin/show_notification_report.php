<?php
//include "header.php";
//include "slidebar.php";
?>
<title>Notification Report </title>
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
</tr>
<input type="submit" onClick="window.print()" value="Print Report" size="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Generate PDF"><br><br>
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
echo "</tr>";
}
?>
</body>
</html>