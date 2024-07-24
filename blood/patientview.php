<?php
$a=$_GET['p1'];
$b=$_GET['p2'];
$c=$_GET['p3'];
$d=$_GET['p4'];
$e=$_GET['p5'];
$f=$_GET['p6'];

$Con=mysqli_connect('localhost','root','Mahima@123','Bloodbank');
$q="insert into patient values('$a','$b','$c','$d','$e','$f')";
$rs=mysqli_query($Con,$q);
if ($rs)
{
    echo "<script> alert('Your information saved successfully');
    </script>";
    }
    else
    {
        echo  "<script>alert('Invalid information');</script>";
    }
?>
