<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include "Header.php";
    ?>
    <div class="container mt-5">
      <form class="p-5 shadow" action="Users.php" method="post">
        <center><h3>Login Now</h3></center>
        <div class="row g-3">
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Email</label>
            <input type="email" class="form-control" name="username">
          </div>
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Password</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login Now</button><br><br>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>