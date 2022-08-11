<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $id= $_POST['id'];

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $city = $_POST['city'];

    $sql = "INSERT INTO `NewTable`(`id`, `name`, `email`, `phone`, `city`) VALUES ('$id','$name','$email','$phone','$city')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>
<body>
<button > <a href="read.php">READ DATA </a></button>
<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    ID:<br>

    <input type="text" name="id">

    <br>

    Name:<br>

    <input type="text" name="name">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    phone:<br>

    <input type="phone" name="phone">

    <br>

    City:<br>

    <input type="city" name="city" >

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
</body>

</html>