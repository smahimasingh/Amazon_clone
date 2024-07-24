<?php
$a=$_GET['a1'];
$b=$_GET['a2']; 
$Con=mysqli_connect('localhost','root','Mahima@123','bloodbank');
$q="select * from admin where username='$a' and password='$b'";
$rs=mysqli_query($Con,$q);
if($row=mysqli_fetch_array($rs))
{
    session_start();
    $_SESSION['u']=$a;
    echo "<script>
    window.location='admindb.php'
    </script>";
}

else
{
  echo"  invalid";
}
?>
