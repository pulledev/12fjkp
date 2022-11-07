<?php

class Head
{
public static function printHead($title, $cssFile)
{
?>
    <!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?php echo $title ?></title>
        <link rel="icon" type="image/png" sizes="159x180" href="assets/img/9.jgk.png">
        <link rel="icon" type="image/png" sizes="159x180" href="assets/img/9.jgk.png">
        <link rel="icon" type="image/png" sizes="159x180" href="assets/img/9.jgk.png">
        <link rel="icon" type="image/png" sizes="159x180" href="assets/img/9.jgk.png">
        <link rel="icon" type="image/png" sizes="159x180" href="assets/img/9.jgk.png">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
        <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
        <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="css/<?php echo $cssFile ?>">
    </head>
<?php
}
}