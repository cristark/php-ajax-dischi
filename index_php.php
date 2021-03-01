<?php
    include 'music_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Music Database</title>
</head>
<body>

    <!-- MAIN -->
    <main>
        <?php foreach ($musicDisk as $disk) { ?>
            <h2> <?php echo $disk["title"] ?></h2>
            <h3> <?php echo $disk["author"] ?></h3>
        <?php } ?> 
    </main>

</body>
</html>