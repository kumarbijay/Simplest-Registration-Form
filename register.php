<?php
    $username="";
    $email="";
    $first="";
    $last="";
    $db = mysqli_connect('localhost', 'root', '', 'register');

    if (isset($_POST['reg_user'])) {
        $first = mysqli_real_escape_string($db, $_POST['first']);
        $last = mysqli_real_escape_string($db, $_POST['last']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $date = mysqli_real_escape_string($db, $_POST['date']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password_1 = mysqli_real_escape_string($db, md5($_POST['password_1']));
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        $check_user = mysqli_query($db, "SELECT * FROM register WHERE email='".$email."'");
        if(mysqli_num_rows($check_user)>=1)
        {
            echo "<script>alert('User already registered.')</script>";
            echo "<script>window.location.href='./'</script>";
        }
        else{
            if(mysqli_query($db, "INSERT INTO register (first, last, email, gender, date, username, password_1) values ('$first','$last','$email','$gender','$date','$username','$password_1')"))
            {
                echo "<script>alert('Registration Successful.')</script>"; 
                echo "<script>window.location.href='./'</script>";
            }

        }
    
    
    }


