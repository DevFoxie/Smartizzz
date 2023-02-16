<?php
// Database connexion.
require_once('database.php');

// Verify if form is sent. 
if (isset($_POST['submit'])) {
    // GET Email ID of the user. 
    $email = $_POST['email'];

    // Verify if Email ID exist in database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $con->query($query);

    if ($result->num_rows == 1) {
        // If the Email ID exist, create a reset token password and stock it into the database w/ the email ID of the user. 
        $token = md5(uniqid(rand(), true));
        $query = "INSERT INTO password_resets (email, token) VALUES ('$email', '$token')";
        $con->query($query);

        // Send an email to the email ID of the user with an unique link containing a reset token. 
        $to = $email;
        $subject = 'Password Reset';
        $message = 'Hello,' . "\r\n\r\n";
        $message .= 'You asked for the reset of your password. click on the following link to reset it:' . "\r\n\r\n";
        $message .= 'http://www.example.com/reset_password.php?email=' . $email . '&token=' . $token . "\r\n\r\n";
        $message .= 'If you didn\'t ask to reset your password, ignore this msg.' . "\r\n\r\n";
        $message .= 'Thanks,' . "\r\n";
        $message .= 'Smartizz Team';

        $headers = 'From: info@example.com' . "\r\n" .
            'Reply-To: info@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // REdirection user into "reset_password.php"
        header('Location: reset_password.php?email=' . $email . '&token=' . $token);
        exit;
    } else {
        // If Email ID doesn't exist then print error MSG :)
        $error = 'The email ID that you entered does not exist in our database.';
    }
}

// 
//
//We can add some security by hatching the password which is reset + use CSRF tokens.
//
// 

?>

<!DOCTYPE html>
<html>

<head>
    <title>Mot de passe oublié - Smartizz</title>
</head>

<body>
    <h1>Forgot your password ?</h1>
    <?php if (isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <form method="post">
        <div class="form-group">
            <label>Enter your Email ID :</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Reset password</button>
        <br>
        <a href="index.php">Retour à l'index</a>
    </form>
</body>

</html>