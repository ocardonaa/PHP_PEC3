<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <?php require 'partials/session_name.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <form method="GET" action="">
        <label for="username">username</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" />
        <br>
        <label for="password">password</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" />
        <br>
        <button type='submit'>Login</button>
    </form>
</body>
</html>