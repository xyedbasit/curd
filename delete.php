<?php 

include "config."; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `NewTable` WHERE `id`='$user_id'";

     $result = $conn->query($sql);
     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
<html>
    <body>
    <button > <a href="read.php">READ DATA </a></button>
    </body>
</html>