<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Student </title>
  </head>
  <body>
    <?php
      require_once 'connect.php'; 
    ?>

    <?php 
    if (isset($_SESSION['message'])):  ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
<div class="container">
    <?php  
      $conn = new mysqli('localhost','root','','studentreg') or die(mysqli_error($conn));
      $result = $conn->query ("SELECT * FROM student") or die($conn->error);
    ?>

    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone No</th>
            <th>Branch</th>
            <th>Year</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
    <?php 
    while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo $row['id'];  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['phoneno'];  ?></td>
      <td><?php echo $row['branch'];  ?></td>
      <td><?php echo $row['year'];  ?></td>
      <td>
          <a href="user.php?edit=<?php echo $row['id']; ?>"
            class="btn btn-info">Edit</a>
            <a href="connect.php?delete=<?php echo $row['id']; ?>"
            class="btn btn-danger">Delete</a>
      </td> 
    ?>
    </tr>
    <?php endwhile; ?>
</table>
    </div>

  <?php
    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
  ?>

    <div class = 'container'>
    <form method = 'post'>
  
  <div class="form-group">
    <label>Enter Student ID</label>
    <input type="text" name= "id" class="form-control" value="<?php echo $id ?>">
  </div>
  <div class="form-group">
    <label>Enter Student Name:</label>
    <input type="text" name= "name" class="form-control" value="<?php echo $name; ?>"  placeholder="Enter your name"  >
  </div>
  <div class="form-group">
    <label>Enter Phone number:</label>
    <input type="number" name= "phone" class="form-control" value="<?php echo $phoneno; ?>" >
  </div>
  <div class="form-group">
    <label>Enter Branch:</label>
    <input type="text" name= "branch" class="form-control" value="<?php echo $branch; ?>"  >
  </div>
  <div class="form-group">
    <label>Enter Year:</label>
    <input type="text" name= "year" class="form-control" value="<?php echo $year; ?>"  >
  </div>

  <?php 
  if ($update == true):?>
   <button type="submit" class="btn btn-info" name = "update">Update</button>
   <?php else: ?>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  <?php endif; ?>
</form>
    </div>
  </div>
  </body>
</html>
