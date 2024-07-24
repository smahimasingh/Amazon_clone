<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request</title>
</head>
<style>
.heading{
    margin-top: 0rem;
   text-align: center;
}
.k{
    border-collapse: collapse;
    border-color:black;
    border-radius:5px;

}
.key{
    background-color: red;
    font-size:20px;
    
}
.bttn{
    font-size: 22px;
    width: 115px;
    background-color: grey;
}
</style>
<body class="body">

<div class="heading">
  <h1>Request History</h1>
<table border="5" class="k">
    <tr><td class="key"><b>S.NO</b></td>
    <td class="key"><b>Full Name </b></td>
    <td class="key"><b>Age</b></td>
    <td class="key"><b>Blood Group</b></td>
    <td class="key"><b>Units</b></td>
    <td class="key"><b>Disease</b></td>
    <td class="key"><b>Request Date</b></td>
    <td class="key"><b>Status</b></td>
    <td class="key"><b>Action</b></td>
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
   <td><a href='?d1=$row[full_name]'> </a></td>
   <td><button class=bttn><a href='?d1=$row[full_name]'> Approve</a></button>
        <button class=bttn><a href='?d1=$row[full_name]'> Reject</button></a></td>
    </tr>";
    $i++;
}

?>