<?php
    require_once __DIR__ . '/models/news.php';
    include 'view/index.php';
    include 'view/forms.php';
    if (isset($_POST['text']) && isset($_POST['title']))
        {
            $tit = $_POST['title'];
            $txt = $_POST['text'];
            require_once __DIR__ . '/models/news.php';
        }
