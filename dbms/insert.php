 <?php
 if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phoneno = $_POST['phone'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
      }

      $sql = "INSERT INTO `student` (id, name, phoneno, branch, year) VALUES ('$id', '$name', '$phoneno', '$branch', '$year')";
      $result = mysqli_query($conn, $sql);

      if($result) {
        echo "Data inserted successfully";
      }
      else {
        die(mysqli_error($conn));
      }
      ?>