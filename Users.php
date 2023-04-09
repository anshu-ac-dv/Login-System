<?php
  
      session_start();
      if (isset($_POST['login'])) {
        include 'dbcon.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE Email ='$username' AND Password='$password'";
        $r = mysqli_query($conn, $sql);
        if (mysqli_num_rows($r) === 1) {
            $row = mysqli_fetch_assoc($r);
            if ($row['Email'] === $username && $row['Password'] === $password) {
                 $_SESSION['Email'] = $row['Email']; 
                  header("Location: Dashboard.php");
                  exit();
              }
              else{
                header("Location: Login.php?error=Incorect User name or password"); 
                exit();
              }
            }
            else{
              header("Location: Login.php?error=Incorect User name or password");
                  exit();
            }
        }
        
    ?>
