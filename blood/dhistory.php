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
  <h1>My Donation History</h1>
<table border="1" class="k">
    <tr><td><b>S.NO</b></td>
    <td> <b>Full Name </b></td>
    <td><b>Age</b></td>
    <td><b>Blood Group</b></td>
    <td><b>Units</b></td>
    <td><b>Disease</b></td>
    <td><b>Request Date</b></td>
    <td><b>Status</b></td>
   </tr>
    

<?php
$i=1;
$Con=mysqli_connect('localhost','root','Mahima@123','bloodbank');
$q="select * from stock";
$rs=mysqli_query($Con,$q);
while ($row=mysqli_fetch_array($rs))
{
    echo "
    <tr>
    <td>$i</td>
    <td>$row[full_name]</td>
    <td>  $row[age]</td>
    <td> $row[blood_group]</td>
   <td>  $row[units]</td>
   <td>  $row[disease]</td>
   <td>  $row[date]</td>

    </tr>";
    $i++;
}

?>