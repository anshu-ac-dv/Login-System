<?php
    
        if (isset($_POST['submit'])) {
            include 'dbcon.php';
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pname = $_POST['pname'];
            $mname = $_POST['mname'];
            $gander = $_POST['gander'];
            $dob = $_POST['dob'];
            $mat = $_POST['mat'];
            $mar = $_POST['mar'];
            $qual = $_POST['qual'];
            $marks = $_POST['marks'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            
            $sql = "INSERT INTO `users`(`First Name`, `Last Name`, `Father Name`, `Mother Name`, `Date of Birth`, `Gander`, `10th Roll No.`, `10th Marks`, `High Qualification`, `Marks`, `Email`, `Password`) 
            VALUES ('$fname','$lname','$fname','$mname','$dob','$gander','$mat','$mar','$qual','$marks','$email','$password')";

            $result = mysqli_query($conn,$sql);

            if ($result) {
                echo "Registration Success";
            }
            else {
                echo "Failt to register";
            }
            
          }

    ?>