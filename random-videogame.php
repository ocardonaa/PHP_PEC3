<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Videogame View</title>
</head>
<body>
    <ul>
        <li>
            Title: <?= $random_videogame->title; ?>
        </li>
        <li>
            Developer: <?= $random_videogame->developer; ?>
        </li>
        <li>
            Genre: <?= $random_videogame->genre; ?>
        </li>
        <li>
            Release year: <?= $random_videogame->release_year; ?>
        </li>
        <li>
            Game Mode: 
            <?php if($random_videogame->game_mode) : ?> 
                Multiplayer
            <?php else: ?> 
                SinglePlayer
            <?php endif; ?>
        </li>
    </ul>
</body>
</html>