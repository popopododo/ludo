<?php
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = 'en';
}

if ($lang == 'ko') {
    include_once $_SERVER['DOCUMENT_ROOT'].'/locale/ko.php';
}

if ($lang == 'en') {
    include_once $_SERVER['DOCUMENT_ROOT'].'/locale/en.php';
}

// 데이터 셋
include_once $_SERVER['DOCUMENT_ROOT'].'/data/item_list.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/data/item_list2.php';
?>

<script>
    var currentLang = '<?php echo $lang ?>';
</script>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
    <script src="/static/js/jquery-3.5.1.min.js"></script>
    <script src="/static/js/imageMapResizer.min.js"></script>
    <script src="/static/js/main.js?1613483632"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/boot#sell-normalstrap/3.3.2/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/main.css"/>
    <link rel="stylesheet" href="/scss.php/app.scss"/>
    <title>LUDO::</title>
</head>
<body>
<div id="header">
    <div class="new">
        <a href="/item/item_form.php">
            <img src="/static/img/header/new.svg" alt="new">
        </a>
    </div>
    <div class="back">
        <a href="javascript:history.back();">
            <img src="/static/img/header/back.svg" alt="back">
        </a>
    </div>
    <div class="logo">
        <a href="/">
            <img src="/static/img/header/logo.svg" alt="logo">
        </a>
    </div>
    <div class="notify">
        <a href="#">
            <img src="/static/img/header/notification.svg" alt="notification">
        </a>
    </div>
</div>