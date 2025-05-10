<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <h1>Sign up Page</h1>
    <?php require 'partials/session_name.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <form method="GET" action="">
        <label for="username">username</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" />
        <br>
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" />
        <br>
        <label for="surname">surname</label>
        <input type="text" id="surname" name="surname" value="<?php echo htmlspecialchars($surname); ?>" />
        <br>
        <label for="password">password</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" />
        <br>
        <label for="password2">confirm password</label>
        <input type="password" id="password2" name="password2" value="<?php echo htmlspecialchars($password2); ?>" />
        <br>
        <button type='submit'>Register</button>
    </form>
</body>
</html>
