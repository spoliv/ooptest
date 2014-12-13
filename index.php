<?php
require_once __DIR__ . '/models/news.php';
include 'view/index.php';

include 'view/forms.php';
if (isset($_POST['article']) && isset($_POST['title']))
    {
        require_once __DIR__ . '/functios/db.php';
        $basaone->Add_news('news', $_POST['title'], $_POST['text']);
    }
