<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    font-family: 'poppins', sans-serif;
    margin: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    height:100vh;
    padding: 16px;
    background-color: var(--background);
}

.table-widget{
    border-radius: 16px;
    background-color: var(--table-background);
    padding: 24px;
    border: 2px solid var(--gray-background);
    text-align: left;
    overflow-x: auto; 
}
.table-widget table{
    max-width: fit-content;
    border-collapse: collapse;
}
.table-widget caption{
    font-size: 1.12rem;
    font-weight: 700;
    text-align: left;
    margin: 8px 0px;
}

.table-widget th{
    padding: 20px 16px;
    font-size: 0.875rem;
    color: var(--gray);
    }

    .table-widget thead{
        border-top: 2px solid var(--gray-background);
    }
    .table-widget tfoot{
        margin-top:16px;
        border-top: 2px solid var(--gray-background);
    }
    .table-widget td{
        padding: 8px 16px;
        vertical-align: middle;
    }
    .table-widget tbody tr{
        cursor: pointer;
    }
    .table-widget tbody tr:nth-child(odd)
    {
        background-color: var(--odd-row);
    }
    .table-widget tbody tr:hover{
        background-color: white;
    }


</style>
<body>
    <div class="table-widget">
        <table>
            <caption>Team Members
            <span class="table-row-count"></span>
            </caption>
            <thead>
                <tr>
                <th> <b>Full Name </b></th>
                <th><b>Age</b></th>
    <th><b>Gender</b></th>
    <th><b>Blood Group</b></th>
    <th><b>Phone no</b></th>
    <th><b>Aadhar Card</b></th>
    <th><b>Action</b></th>
   </tr>    
</thead>
<tbody id="team-member-rows">
    <!--?-->
    </tbody>
    </table>
</div>
</body>
</html>