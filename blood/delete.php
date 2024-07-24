<?php
$a=$_GET['d1'];
$Con=mysqli_connect('localhost','root','Mahima@123','donor');
$q="delete from register where full_name='$a'"; 
$rs=mysqli_query($Con,$q);
if($rs){

    echo"Deleted successfully";
}
?>

<?php
if (isset($_SESSION['u'])== false)
{
    echo "<script>
    window.location='home.php';

    </script>";
}
?>