<?php

$map = [
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0],
    [0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0],
    [0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0],
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
    <style>
        div {
            width: 20px;
            height: 20px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php foreach ($map as $row) : ?>
        <?php foreach ($row as $pixel) : ?>
            <div style="background-color: <?php echo $pixel === 0 ? '#fff' : '#572984'; ?>;"></div>
        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>
</body>

</html>
