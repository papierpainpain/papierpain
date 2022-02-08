<!DOCTYPE html>

<html lang="fr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Labo - Papierpain</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="author" content="PapierPain">

        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/public/main.css">
    </head>

    <body>
        <main>
            <h1>Labo papierpain</h1>

            <div>
                <ul>
                    <?php 
                        $data = json_decode(file_get_contents("routes.json"), true);
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
