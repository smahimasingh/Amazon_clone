<?php
$a=$_GET['d2'];
$b=$_GET['d7']; 
$Con=mysqli_connect('localhost','root','Mahima@123','donor');
$q="select * from register where username='$a' and password='$b'";
$rs=mysqli_query($Con,$q);
if($row=mysqli_fetch_array($rs))
{
    session_start();
    $_SESSION['u']=$a;
    echo "<script>
    window.location='donordb.php'
    </script>";
}

else
{
  echo" <script>alert('Invalid');</script>";

}
?>
