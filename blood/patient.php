<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-detail">
        <h3> Patient Details</h3>
        <form action="patientview.php">
            <label>Patient Name</label>
            <input type="text" placeholder="Full Name" name="p1" class="details">
            <label> Age</label>
            <input type="text" placeholder="Age" name="p2" class="details">
            <label> Gender</label>
            <input type="text" placeholder="Gender" name="p3" class="details">
            <label> Blood Group</label>
            <input type="text" placeholder="Blood Group" name="p4" class="details">
            <label> Units</label>
            <input type="text" placeholder="Units in ml" name="p5" class="details">
            <label>Phone Number</label>
            <input type="text" placeholder="Phone Number" name="p6" class="details">
            <br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</body>

</html>