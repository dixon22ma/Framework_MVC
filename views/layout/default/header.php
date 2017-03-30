<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
            if (isset($this->title)) {
                echo $this->title;
            }
            ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="
            <?php 
                echo $_layoutParams['routeCss']; 
            ?>style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>
            <?php
            echo APP_NAME;
            //echo $_layoutParams['routeCss'] . 'style.css';
            //var_dump($_layoutParams);
            ?>
        </h1>