  <?php
  if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'blog');
    if ($conn) {
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];
      $SQL = "SELECT * FROM users WHERE username='$username' and password = md5('$password') limit 1;";
      $query = mysqli_query($conn, $SQL);
      $success = false;
      mysqli_close($conn);
      while (($row = mysqli_fetch_assoc($query)) != null) {
        session_start();
        $_SESSION['user'] = [
          'id' => $row['id'],
          'name' => $row['name'],
          'email' => $row['email'],
          'username' => $row['username'],
          'type' => $row['type']
        ];
        var_export('TEST');
        //session
        //redirect to home page
        $success = true;
      }

      if ($success) {
        header('Location:index.php');
        die();
      } else {
        $errors['generic'] = "Please enter a valid username or password";
      }
    }
  }
  ?>
  <?php require_once('layout/header.php'); ?>
  <section class="register">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>Login form</h1>
          <form method="POST" action="login.php">
            <div class="row">
              <label class="col-md-4">Username:</label> <input name="username" class="col-md-8 form-control" required />
            </div>
            <div class="row">
              <label class="col-md-4">Password:</label> <input name="password" type="password" required class="col-md-8 form-control" />
              <span class="text text-danger"><?= isset($errors['generic']) ? $errors['generic'] : '' ?></span>

              <button class="btn btn-success btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php require_once('layout/footer.php') ?>