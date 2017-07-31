<?php
include 'addArticleToDB.php';
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
</header>
<main>
    <div class="addPage">
        <form method="post" class="addForm">
            <input class="field" placeholder="title" name="title" required>
            <textarea class="field" name="text" id="" cols="70" rows="25"></textarea>
            <input type="submit" name="adding" class="button" value="Send">
        </form>
    </div>
</main>

</body>
</html>
