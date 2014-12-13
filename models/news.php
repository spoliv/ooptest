<?php
require_once __DIR__ . '/../functions/db.php';
$basaone = new DB('localhost', 'root', '', 'test');
$news = $basaone -> All_news('news');

