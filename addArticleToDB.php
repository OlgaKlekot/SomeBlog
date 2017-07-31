<?php
include_once 'articleDB.php';

if (!empty($_POST['text'])) {
    $DBH->beginTransaction();
    try {

        $STH = $DBH->prepare('INSERT INTO articles (title, article_text) VALUES (:title, :text)');
        $newArticle = [
            ':title' => $_POST['title'],
            ':text' => $_POST['text'],
        ];
        $STH->execute($newArticle);
        $newBookId = $DBH->lastInsertId();

        $DBH->commit();
    }

    catch(Exception $e) {
        echo $e->getMessage();
        $DBH->rollBack();
    }
};