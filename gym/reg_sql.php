<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$d=$_GET['t4'];
$e=$_GET['t5'];
$f=$_GET['t6'];
$g=$_GET['t7'];
$h=$_GET['t8'];
$i=$_GET['t9'];
$j=$_GET['t10'];
$k=$_GET['t11'];
$l=$_GET['t12'];
$m=$_GET['t13'];
$n=$_GET['t14'];


$con=mysqli_connect("localhost","root","Mahima@123","Gym");
$q="insert into info values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
$q2=mysqli_query($con,$q);

echo "added successfully";
echo "<script>window.location='index.php'</script>";
?>