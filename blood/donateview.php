<?php
$a=$_GET['s1'];
$b=$_GET['s2'];
$c=$_GET['s3'];
$d=$_GET['s4'];
$e=$_GET['s5'];
$f=$_GET['s6'];

$Con=mysqli_connect('localhost','root','Mahima@123','bloodbank');
$q="insert into stock values('$a','$b','$c','$d','$e','$f')";
$rs=mysqli_query($Con,$q);
if ($rs)
{
    echo "<script>alert('Your information saved successfully');</script>";
    }
    else
    {
        echo "<script> alert('Error occurred while saving your information');</script>";
    }
?>