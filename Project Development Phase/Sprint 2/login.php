<?php
$pass=$_POST['password'];
$username=$_POST['username'];
$dbc = mysqli_connect('mysql.hostinger.in', 'u684030433_root', 'fastrack',
'u684030433_blood')or
die("error connecting database");
$query = "SELECT username,name FROM user_info WHERE ((username =
'$username' ORemail='$username' )AND password ='$pass')";
$data = 
mysqli_query($dbc, 
$query);if
(mysqli_num_rows($data)
== 1) {
$name=array();
while($row=mysqli_fetch_arra
y($data))
{
$name[]=$row['name'];
}
print json_encode($name);
}
else
{
echo "Wrong";
}
mysqli_close($dbc);
?>
