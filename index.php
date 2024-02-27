<?php
require_once('./db/DB_connection.php');
require_once('./db/DB_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
<body>
    <div class="container">
    <img src="./assets/images/st-cashier.png" width="65%" style="display: block; margin: 0 auto;">
        <form method="POST">
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <div>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Username" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="*****">
            </div>
            <div>
                <button type="submit">Sign In</button>
            </div>
            <div class="text-center mt-4">
                 <p>Don't have an account? <a href="./pages/register.php">Register here</a></p>
            </div>
        </form>
    </div>
</body>
</html>