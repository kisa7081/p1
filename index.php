<?php require('index-logic.php'); ?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset="urf-8" />
    <link rel='stylesheet' href="css/simple.css" />
</head>

<body>
    <h1><?=$name; ?></h1>
    <img src="images/me.jpg" alt="<?=$image_alt; ?>" title="<?=$image_alt; ?>"/>
    <h1>About me</h1>
    <p>
       <?=$about_me; ?>
    </p>
    <h1>Random quote from <?=$author; ?>:</h1>
    <blockquote>
        <?=$quote; ?>
    </blockquote>
</body>

</html>