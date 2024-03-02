<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .newbutton {
            margin-top: 20px;
            background-color: black;
            color: white;
            padding: 10px 30px;
            border-radius: 20px;
        }

        .addnew {
            text-decoration: none;
            color: white;
        }

        table {
            margin-top: 20px;
            width: 90%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6495ED;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .update, .delete {
            color: white;
            padding: 8px 30px;
            border-radius: 10px;
        }

        .update {
            background-color: #6495ED;
        }

        .delete {
            background-color: #FD1C03;
        }

        .updatebtn, .deletebtn {
            text-decoration: none;
            color: white;
        }

        .newbutton a, .update a, .delete a {
            text-decoration: none;
            color: white;
        }

        .newbutton:hover {
            color: black;
            background: white;
        }

        .update:hover, .delete:hover {
            color: black;
            background: white;
        }
    </style>
</head>
<body>
<button class="newbutton"><a href="index.php" class="addnew">New Question</a></button>
<table>
    <tr>
        <th scope="col">id</th>
        <th scope="col">First_Name</th>
        <th scope="col">Last_Name</th>
        <th scope="col">User_Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Confirm_Password</th>
        <th scope="col">Date</th>
        <th scope="col">Gender</th>
        <th scope="col">Number_of_Guest</th>
        <th scope="col">Contact_Number</th>
        <th scope="col">Actions</th>
    </tr>
    <tbody>
    <?php
    $sql = "SELECT * FROM registration";
    $result = mysqli_query($con, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $First_Name = $row['First_Name'];
            $Last_Name = $row['Last_Name'];
            $User_Name = $row['User_Name'];
            $Email = $row['Email'];
            $Password = $row['Password'];
            $Confirm_Password = $row['Confirm_Password'];
            $Date = $row['Date'];
            $Gender = $row['Gender'];
            $Number_of_Guest = $row['Number_of_Guest'];
            $Contact_Number = $row['Contact_Number'];

            echo '<tr>
            <td>' . $id . '</td>
            <td>' . $First_Name . '</td>
            <td>' . $Last_Name . '</td>
            <td>' . $User_Name . '</td>
            <td>' . $Email . '</td>
            <td>' . $Password . '</td>
            <td>' . $Confirm_Password . '</td>
            <td>' . $Date . '</td>
            <td>' . $Gender . '</td>
            <td>' . $Number_of_Guest . '</td>
            <td>' . $Contact_Number . '</td>
            <td>
            <button class="update"><a href="update.php?id=' . $id . '" class="updatebtn">Update</a></button>
            <button class="delete"><a href="delete.php?deleteid=' . $id . '" class="deletebtn">Delete</a></button>
            </td>
            </tr>';
        }
    } else {
        echo '<tr><td colspan="12">No records found</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>
