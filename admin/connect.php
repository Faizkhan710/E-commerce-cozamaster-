<?php 
// 	$conn = new mysqli("localhost","root","","php_project");
// 	mysqli_set_charset($conn, 'UTF8MB4');
// //check connection
// 	if ($conn == false) {
// 		die("Connection failed: " . $conn->connect_error);
// 	}
// ?>

<?php
    $server="localhost";
    $user="root";
    $pwd="";
    $db="php_project";
    $conn=mysqli_connect($server,$user,$pwd,$db);
    if(!$conn){
        die(mysqli_error($conn));
    }
    else {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> Connected!!!!.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
  
?>
