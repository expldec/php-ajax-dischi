<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
    <title>PHP-Ajax Dischi</title>
</head>

<body>
    <div id="app">
        <?php
        include __DIR__ . "/database.php";
        ?>
        <header>
            <div class="header__logo rounded-circle">
                <img src="img/discogs-record-icon.svg" alt="" />
            </div>
        </header>
        <main>
            <div class="app-list__container container">
                <div class="row row-cols-2 row-cols-md-4 g-2">
                    <?php
                    foreach ($database as $key => $album) {
                    ?>
                        <div class="col">
                            <div class="album-card p-2 text-center">
                                <?php
                                echo "<img class=\"img-fluid\" src=\"" . $album["poster"] . "\" alt=\"\" />";
                                ?>
                                <h2 class="album-title fw-bold mt-3">
                                    <?php echo $album["title"]; ?>
                                </h2>

                                <p> <?php echo $album["author"]; ?>
                                </p>
                                <div>
                                    <?php echo $album["year"] . " &centerdot; " . $album["genre"]; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>