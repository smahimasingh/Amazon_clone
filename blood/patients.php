<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
</head>
<style>
.bttn{
    font-size: large;
    width: 100px;
    background-color: grey;

}
.heading{
    margin-top: 0rem;
   text-align: center;
}
.k{
    border-collapse: collapse;
    border-color:black;
    border-radius:5px;
    margin: 25px;
   margin-top: 0px;

    
}
.key{
    background-color: red;
    font-size:20px;
    
}
</style>
<body class="body">

<div class="heading">
  <h1> View Details </h1>
<table border="1" class="k">
    <tr><td class="key"><b>S.NO</b></td>
    <td class="key"><b>Patient Name </b></td>
    <td class="key"><b>Age</b></td>
    <td class="key"><b>Gender</b></td>
    <td class="key"><b>Blood Group</b></td>
    <td class="key"><b>Units</b></td>
    <td class="key"><b>Phone no</b></td>
    <td class="key"><b>Status</b></td>
    <td class="key"><b>Action</b></td>
   </tr>
    

<?php
$i=1;
$Con=mysqli_connect('localhost','root','Mahima@123','Bloodbank');
$q="select * from patient";
$rs=mysqli_query($Con,$q);
while ($row=mysqli_fetch_array($rs))
{
    echo "
    <tr>
    <td>$i</td>
    <td>$row[patient_name]</td>
    <td>  $row[age]</td>
    <td> $row[gender]</td>
   <td>  $row[blood_group]</td>
   <td>  $row[units]</td>
   <td>  $row[phone_no]</td>
   <td><a href='?t1=$row[patient_name]'></a></td>
   <td><button class=bttn><a href='?t1=$row[patient_name]'> Update</a></button>
   <button class=bttn><a href='delete.php?t1=$row[patient_name]'> Delete </button> </a></td>
    </tr>";
    $i++;
}

?>

</table>
</div>
</body>
</html>
