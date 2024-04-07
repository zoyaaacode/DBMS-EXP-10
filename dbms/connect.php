<?php

    session_start();

    $conn = new mysqli('localhost', 'root', '', 'studentreg');

    $id=0;
    $update = false;
    $name = '';
    $phoneno = '';
    $branch = '';
    $year = '';

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phoneno = $_POST['phone'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];


      $conn->query("INSERT INTO `student` (id, name, phoneno, branch, year) VALUES ('$id', '$name', '$phoneno', '$branch', '$year')") or
                die($conn->error);

            $_SESSION['message'] = "Record Has been Saved!!";   
            $_SESSION['msg_type'] = "success";

            header("location: user.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $conn->query("DELETE FROM student WHERE id=$id") or die($conn->error());

        $_SESSION['message'] = "Record Has been Deleted!!";   
        $_SESSION['msg_type'] = "danger";

        header("location: user.php");
    }

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $conn->query("SELECT * FROM student WHERE id= $id") or die($conn->error());
        if($result->num_rows){
            $row = $result->fetch_array();
            $id = $row['id'];
            $name = $row['name'];
            $phoneno = $row['phoneno'];
            $branch = $row['branch'];
            $year = $row['year'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phoneno = $_POST['phone'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];

        $conn->query("UPDATE student SET id=$id, name=$name, phoneno=$phoneno, branch=$branch , year=$year WHERE id=$id") or
        die($conn->error);

        $_SESSION['message'] = "Record Has been updated!!";   
        $_SESSION['msg_type'] = "warning";

        header("location: user.php");
    }

?>
