<?php
// Start the session
session_start();
include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="background"></div>
    <div class="wrapper">
        <h2 align='center'>Welcome</h2>
        <p align='center'>Please fill in your credentials to login.</p>
        <?php 
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form method='POST' action='index.php'>
            <table align='center'>
                <tr>
                    <td align='right'>E-mail:</td>
                    <td><input type='text' name='emelid' placeholder='Enter your e-mail or respective ID.' size='30'></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td align='right'>Password:</td>
                    <td><input type='password' name='password' required minlength='8' maxlength='25' placeholder='Enter your password' size='30'></td>
                    <td><input type='button' value='!' onclick="alert('Your password must be between 8 to 25 characters.')"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td></td>
                    <td><input type='submit' value='Login'></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
