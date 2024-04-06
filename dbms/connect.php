<?php
    $conn = new mysqli('localhost', 'root', '', 'studentreg');
    if(!$conn) {
        die(mysqli_error($conn));
    }
?>