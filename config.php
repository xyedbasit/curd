<?php
$servername = "localhost";
$username = "root";
$password = "Random@123";
$dbname = "task";
// echo 'sss';
// exit();
// echo phpinfo();
// exit();
// try {
  // $conn = mysqli_connect($servername, $username, $password, $dbname, 3306);
  $conn =  mysqli_connect($servername, $username, $password ,  $dbname , 3306 );
    // echo 'connected';
  //code...
// } catch (\Throwable $th) {
//   //throw $th;
//   echo '<pre>';
//   print_r($th);
//   exit();
// }
// echo $conn;
// exit();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>