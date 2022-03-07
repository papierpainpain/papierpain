<?php
$data = json_decode(file_get_contents("routes.json"), true);
$data = $data["data"];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Papierpain Lab</title>
	<meta name="robots" content="follow, index">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="PapierPain">

    <link rel="icon" type="image/png" href="/public/favicon.png" />

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/public/main.css">

    <script src="https://kit.fontawesome.com/e88cb087ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="logo">
            <figure>
                <img src="/public/images/papierpain.png" alt="logo papierpain">
            </figure>

            <p>PapierPain Lab</p>
        </div>

        <nav>
            <ul>
                <li type="all"><a>
                    <i class="fa-solid fa-box-archive"></i>
                    <p>Explore (all)</p>
                </a></li>
                <li type="tool"><a>
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <p>Tools</p>
                </a></li>
                <li type="project"><a>
                    <i class="fa-solid fa-folders"></i>
                    <p>Projects</p>
                </a></li>
                <li type="personal"><a>
                    <i class="fa-solid fa-briefcase"></i>
                    <p>Personal Work</p>
                </a></li>
                <li type="cloud"><a>
                    <i class="fa-solid fa-cloud"></i>
                    <p>Cloud</p>
                </a></li>
                <li type="manage"><a>
                    <i class="fa-solid fa-gear"></i>
                    <p>Manage</p>
                </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Explore</h1>

        <div>
            <ul id="projects">
                <?php foreach ($data as $link) { ?>

                    <li type="<?= implode(' ', $link["tags"]) ?>">
                        <div class="item">
                            <figure>
                                <?= $link["img"] ?>
                            </figure>

                            <h2><?= $link["title"] ?></h2>

                            <p><?= $link["description"] ?></p>

                            <a href="<?= $link["url"] ?>" target="_blank" rel="noopener noreferrer">Go to website</a>
                        </div>
                    </li>

                <?php } ?>
            </ul>
        </div>

        <footer>© Copyright 2022 <a href="http://www.gourves-steven.fr" target="_blank" rel="noopener noreferrer">Steven Gourves</a></footer>
    </main>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/public/main.js"></script>
</body>

</html>