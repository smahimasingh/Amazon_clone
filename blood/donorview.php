<?php
$a=$_GET['d1'];
$b=$_GET['d2'];
$c=$_GET['d3'];
$d=$_GET['d4'];
$e=$_GET['d5'];
$f=$_GET['d6'];
$g=$_GET['d7'];
$h=$_GET['d8'];

$Con=mysqli_connect('localhost','root','Mahima@123','donor');
$q="insert into register values('$a','$b','$c','$d','$e','$f','$g','$h')";
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

<?php
if (isset($_SESSION['u'])== false)
{
    echo "<script>
    window.location='home.php';

    </script>";
}
?>