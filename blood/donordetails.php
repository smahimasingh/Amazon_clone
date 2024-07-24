<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Details</title>
</head>
<style>

</style>
<body class="body" style="background-color:;">

<div class="heading" style="margin-left: 34rem;margin-top: 2rem; ">
  <h1> View Details </h1>
<table border="1" class="k" style="border: 3px solid red;">
    <tr><td><b>S.NO</b></td>
    <td> <b>Full Name </b></td>
    <td><b>Username</b></td>
    <td><b>Gender</b></td>
    <td><b>DOB</b></td>
    <td><b>Phone </b></td>
    <td><b>Email</b></td>
    <td><b>Status</b></td>
   </tr>
    

<?php
$i=1;
$Con=mysqli_connect('localhost','root','Mahima@123','donor');
$q="select * from register";
$rs=mysqli_query($Con,$q);
while ($row=mysqli_fetch_array($rs))
{
    echo "
    <tr>
    <td>$i</td>
    <td>$row[full_name]</td>
    <td>  $row[username]</td>
    <td> $row[gender]</td>
   <td>  $row[dob]</td>
   <td>  $row[phone]</td>
   <td>  $row[email]</td>
   <td><a href='?d1=$row[full_name]'> Approved</a></td>
   <td><a href='delete.php?d1=$row[full_name]'> Delete</a></td>
    </tr>";
    $i++;
}

?>

</table>
</div>
</body>
</html>