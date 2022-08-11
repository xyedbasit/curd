<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $id= $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $city = $_POST['city']; 

        $sql = "UPDATE NewTable SET id='$id',name='$name',email='$email',phone='$phone',city='$city'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM  NewTable" ;

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];

            $name = $row['name'];

            $email = $row['email'];

            $phone = $row['phone'];

            $city = $row['city'];

        } 
    } 
    else{ 

        header('Location: read.php');

    } }

    ?>
         <html>
         <button > <a href="read.php">READ DATA </a></button>
        <h2>User Update Form</h2>
<body> 
        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            id:<br>

            <input type="text" name="id" value="<?php echo $id; ?>">

            <br>

             name:<br>

            <input type="text" name="name" value="<?php echo "$name"; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo "$email"; ?>">

            <br>

            phone:<br>

            <input type="phone" name="phone" value="<?php echo "$phone"; ?>">

            <br>

            city:<br>

            <input type="name" name="city"  <?php  echo "$city"; ?> >

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

