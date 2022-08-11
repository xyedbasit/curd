<?php

include "config.php";

$sql = "SELECT * FROM NewTable";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>
<head>
    <title>View Page</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: skyblue;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;} 
.button3 {background-color: #f44336;}
</style>
<body>

    <div class="container">

        <h1>Users</h1>

        <table class="table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th> Name</th>


                    <th>Email</th>
                    <th>Phone NO </th>
                    <th>City</th>

                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>

                            <td> <br> <?php echo $row['id']; ?> </td>
                            <td> <br> <?php echo $row['name']; ?> </td>
                            <td> <br> <?php echo $row['email']; ?> </td>
                            <td><br> <?php echo $row['phone']; ?> </td>
                            <td><br> <?php echo $row['city']; ?> </td>



                            <td><a class="button button2" href="update.php">Edit</a>&nbsp;<a class=" button button3" href="delete.php">Delete</a></td>

                        </tr>

                <?php
                    }
                }


                ?>

            </tbody>

        </table>

    </div>

</body>

</html>