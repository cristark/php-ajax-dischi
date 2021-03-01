<?php
    include 'music_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Music Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="Logo Spotify">
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <?php foreach ($musicDisk as $disk) { ?>
                <div class="album_box">
                    <img src="<?php echo $disk["poster"] ?>" alt="<?php echo $disk["title"] ?>">
                    <h2> <?php echo $disk["title"] ?></h2>
                    <h3> <?php echo $disk["author"] ?></h3>
                    <div class="specs">
                        <p><?php echo $disk["year"] ?></p>
                        <p><?php echo $disk["genre"] ?></p>
                    </div>
                </div>
            <?php } ?> 
        </div>
    </main>

</body>
</html>