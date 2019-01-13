<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <!-- Vendors -->
    <link href="dist/css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Componenets -->
    <link href="dist/css/font.css" rel="stylesheet" type="text/css">
    <link href="dist/css/layout.css" rel="stylesheet" type="text/css">
    <link href="dist/css/general.css" rel="stylesheet" type="text/css">
    <link href="dist/css/navigation.css" rel="stylesheet" type="text/css">
    <link href="dist/css/icons.css" rel="stylesheet" type="text/css">
    <link href="dist/css/header.css" rel="stylesheet" type="text/css">
    <link href="dist/css/faq.css" rel="stylesheet" type="text/css">
    <link href="dist/css/general-styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="dist/css/animate.css">
</head>
<body>
    <header class="l-grid c-header topnav">
        <div class="c-header__logo">
            <?php include 'objects/icons/logo.php'; ?>
        </div>
        
        <div class="c-header__mobile-menu js-header__mobile-menu">
            <button class="c-header__trigger js-header__trigger">
                <span class="c-header__icon-menu c-header__ham">
                    <?php include 'objects/icons/menu.php'; ?>
                </span>
                <span class="c-header__icon-menu c-header__close">
                    <?php include 'objects/icons/close.php'; ?>
                </span>
            </button>
            <!-- Navigation links hidden by default -->      
            <nav class="c-header__menu c-nav-main">
                <a class="c-nav-main__link wow bounceInUp" href="index.php">home</a>
                <a class="c-nav-main__link wow bounceInUp" href="faq.php">faq</a>
                <a class="c-nav-main__link wow bounceInUp" href="#">gallery</a>
                <a class="c-nav-main__link wow bounceInUp" href="general.php">contact</a>
            </nav>
        </div>
    </header>