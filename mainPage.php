<?php
include 'articleDB.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="mainPage.php"><input type="button" class="button" value="Main Page"></a>
            <a href="articleAdd.php"><input type="button" class="button" value="Add new Article"></a>
        </nav>
        <form class="search">
            <input class="field" placeholder="Enter an article title" required name="title" />
            <input class="button" type="submit" value="Search">
        </form>
    </header>
    <main>
        <div class="page">
            <?php foreach ($articles as $article): ?>
            <div class="article">
                <h3 class="title"><?= $article['title'] ?></h3>
                <p class="art"><?= $article['article_text'] ?></p>
                <span class="data"><?= $article['creation_date'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="pagesNum">
            <?php
            if ( $str_pag > 1): ?>

                <?php if ($page != 1): ?>
                <a href="?page=1"> << </a>
                <a href="?page=<?= $page - 1 ?>"> < </a>
                <?php endif; ?>


                <?php if (($page - 2) > 1): ?>
                    <a href="?page=<?= $page - 2 ?>"> <?= $page - 2 ?></a>
                <?php endif; ?>
                <?php if (($page - 1) > 1): ?>
                    <a href="?page=<?= $page - 1 ?>"><?= $page - 1 ?></a>
                <?php endif; ?>
                <?php if ($page): ?>
                    <a href="?page=<?= $page ?>" class="now"><?= $page ?></a>
                <?php endif; ?>
                <?php if (($page + 1) <= $str_pag): ?>
                    <a href="?page=<?= $page + 1 ?>"><?= $page + 1 ?></a>
                <?php endif; ?>
                <?php if (($page + 2) <= $str_pag): ?>
                    <a href="?page=<?= $page + 2 ?>"><?= $page + 2 ?></a>
                <?php endif; ?>


                <?php if ($page != $str_pag): ?>
                <a href="?page=<?= $page + 1 ?>"> > </a>
                <a href="?page=<?= $str_pag ?>"> >> </a>
                <?php endif; ?>


            <?php endif; ?>

        </div>
    </main>
</body>
</html>