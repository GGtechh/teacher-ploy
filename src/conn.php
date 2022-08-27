<?php
$servername = "203.154.83.84";
$username = "admin_extra";
$password = "admin_extra@9999";
// $password = "GGtech@9999";
$db = "extra_course";

        $conn = mysqli_connect($servername,$username,$password,$db);

        if (!$conn) {
            die("Failed to connect to database ".mysqli_error($conn));
        }


?>
