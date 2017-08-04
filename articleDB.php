<?php

try {
    $DBH = new PDO("mysql:host=localhost;dbname=blog", 'root', '');
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo $e->getMessage();
}



$art_limit = 2;
$page = $_GET['page'];
$currentPage = !empty($_GET['page']) ? intval($_GET['page']) : 1;
$art = ($currentPage - 1) * $art_limit ;
$STH = $DBH->query('SELECT SQL_CALC_FOUND_ROWS * FROM  articles');
$STH->execute();
$art_count = $STH->fetchAll();
$allArt_count = count($art_count);
$str_pag = ceil($allArt_count / $art_limit);



if (isset($_GET['title'])) {
    $STH = $DBH->prepare("SELECT * FROM  articles a WHERE a.title = :title GROUP BY a.id");
    $STH->bindValue(':title', $_GET['title']);
} else {
    $STH = $DBH->query("SELECT  * FROM  articles a GROUP BY a.id ORDER BY a.creation_date DESC LIMIT $art_limit OFFSET $art");
};
if (isset($_POST['adding'])) {
    header("Location: http://someblog.com/mainPage.php");
};



$STH->setFetchMode(PDO::FETCH_ASSOC);
$STH->execute();
$articles = $STH->fetchAll();