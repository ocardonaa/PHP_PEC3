<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <h1>My Profile</h1>
    <?php require 'partials/session_name.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <form method="GET" action="">
        <label for="name">change name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" />
        <p>Current name: <?= $old_user->name ?></p>
        <label for="surname">change surname</label>
        <input type="text" id="surname" name="surname" value="<?php echo htmlspecialchars($surname); ?>" />
        <p>Current surname: <?= $old_user->surname ?></p>
        <label for="password">change password</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" />
        <br>
        <label for="password2">confirm password</label>
        <input type="password" id="password2" name="password2" value="<?php echo htmlspecialchars($password2); ?>" />
        <br>
        <p></p>
        <button type='submit'>Change</button>
    </form>
</body>
</html>