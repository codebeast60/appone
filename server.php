<?php
// include 'connect.php';

$s_errors = array();
$l_errors = array();
$e_errors = array();

if (isset($_POST['signup'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $rpass = mysqli_real_escape_string($conn, $_POST['rpass']);

    if (isset($user)) {
        if (strlen($user) < 4) {
            $s_errors['user'] = "your username cant be less than 4 chars";
        } elseif (strlen($user) > 20) {
            $s_errors['user'] = "your username cant be more than 20 chars";
        }
    }
    if (isset($email)) {
        if (empty($email)) {
            $s_errors['email'] = "email cant be empty";
        }
    }
    if (isset($pass) && isset($rpass)) {
        if (empty($pass) || empty($rpass)) {
            $s_errors['pass'] = "your password cant be empty";
        } elseif ($pass !== $rpass) {
            $s_errors['pass'] = "password not matched";
        }
    }
    if (empty($s_errors)) {
        // $sql = "SELECT email FROM users WHERE email = '$email'";
        // $result = mysqli_query($conn, $sql);
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
            echo "<div class='alert alert-danger text-center'>this email is token</div>";
        } else {
            $enc = md5($pass);
            // $sql = "INSERT INTO users (name,password,email) VALUES ('$user','$enc','$email')";
            // $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO users(name,password,email) VALUES (?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $user, $enc, $email);
            $result = mysqli_stmt_execute($stmt);
            $_SESSION['user'] = $user;

            if ($result) {
                header("Location:index.php");
            }
        }
    }
}

// login
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['pass']);



    if (isset($email)) {
        if (empty($email)) {
            $l_errors['email'] = 'your email cant be empty';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $l_errors['email'] = "your email is invalid";
        }
    }
    if (isset($pass)) {
        if (empty($pass)) {
            $l_errors['pass'] = 'your password cant be empty';
        }
    }

    if (count($l_errors) == 0) {
        $enc = md5($pass);
        // $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$enc' LIMIT 1";
        // $result = mysqli_query($conn, $sql);
        // $fetch =  mysqli_fetch_assoc($result);
        $sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $email, $enc);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $fetch = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['user'] = $fetch['name'];

            header("Location:index.php");
        } else {
            echo '<div class="alert alert-danger text-center">email or password incorrect</div>';
        }
    }
}
// edit
if (isset($_POST['edit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);

    if (isset($user)) {
        if (strlen($user) < 4) {
            $e_errors['user'] = "your username cant be less than 4 chars";
        } elseif (strlen($user) > 20) {
            $e_errors['user'] = "your username cant be more than 20 chars";
        }
    }
    $pass = '';
    if (empty($_POST['pass'])) {
        $pass = $_POST['oldpass'];
    } else {
        if ($_POST['pass'] !== $_POST['rpass']) {
            $e_errors['pass'] = "password not matched";
        } else {
            $pass = md5($_POST['pass']);
        }
    }
    if (count($e_errors) == 0) {
        // $sql = "SELECT * FROM users WHERE name = '$user' AND id != '$userid'";
        // $result = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM users WHERE name = ? AND id != ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $user, $userid);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
            echo "<div class='alert alert-danger text-center'>user already exists</div>";
            header("Refresh:5;url=edit.php");
        } else {
            // $sql = "UPDATE users SET
            //                         name = '$user',password = '$pass' WHERE id='$userid'";
            // $result = mysqli_query($conn, $sql);
            $sql = "UPDATE users SET name = ?,password = ? WHERE id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssi", $user, $pass, $userid);
            $result = mysqli_stmt_execute($stmt);
            if ($result) {
                $_SESSION['user'] = $user;

                header("Location:index.php");
            }
        }
    }
}
