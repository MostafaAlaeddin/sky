<?php
if (!function_exists('head')) {
    function head(string $title)
    {
        ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo "<title>علاءالدین - $title</title>"?>
    <link rel="icon" href="/wp_crud/Interface/Images/favicon/alaeddin.png">
    <link rel="stylesheet" href="/wp_crud/Interface/Css/style.css">
</head>
<body>
        <?php
    }
}