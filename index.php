<!DOCTYPE html>

<html lang="fr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Super Home</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="author" content="PapierPain">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-tofit=no"> -->

        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/public/main.css">
    </head>

    <body>
        <main>
            <h1>Du PAPIER avec du PAIN</h1>

            <div>
                <ul>
                    <?php 
                        $data = file_get_contents("css-color-names.json");
                        $data = $data["data"];

                        foreach ($data as $link) {
                    ?>

                    <li>
                        <a href="<?= $link["url"] ?>"><?= $link["name"] ?></a>
                    </li>

                    <?php } ?>
                </ul>
            </div>
        </main>
    </body>
</html>