<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
      include 'connect.php';
       include 'insert.php';
    ?>
    <div class = 'container'>
    <form method = 'post'>
  <div class="form-group">
    <label>Enter Student ID</label>
    <input type="text" name= "id" class="form-control">
  </div>
  <div class="form-group">
    <label>Enter Student Name:</label>
    <input type="text" name= "name" class="form-control">
  </div>
  <div class="form-group">
    <label>Enter Phone number:</label>
    <input type="number" name= "phone" class="form-control">
  </div>
  <div class="form-group">
    <label>Enter Branch:</label>
    <input type="text" name= "branch" class="form-control">
  </div>
  <div class="form-group">
    <label>Enter Year:</label>
    <input type="text" name= "year" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
    </div>
  </body>
</html>