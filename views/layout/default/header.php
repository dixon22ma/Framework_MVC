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
        <div id="main"> <!-- init div main-->
            <div id="header"><!-- init div header-->
                <h1>
                    <?php echo APP_NAME;?>
                </h1>
            </div><!-- close div header-->
            <div id="top_menu">
                <ul>
                    <?php if(isset($_layoutParams['menu'])): ?>
                    <?php for ($i = 0; $i < count($_layoutParams['menu']); $i++): ?>
                    <?php
                        if(isset($_item) && ($_layoutParams['menu'][$i]['id'] == $_item)) {
                            $_item_style = 'current';
                        } else {
                            $_item_style = '';
                        }
                    ?>
                    
                    <li >
                        <a id="<?php echo $_item_style?>" href="<?php echo $_layoutParams['menu'][$i]['url'];?>"><?php echo $_layoutParams['menu'][$i]['title'];?></a>
                    </li>                    
                    <?php endfor; ?>
                    <?php endif; ?>
                </ul>
                
            </div>
        
        
        
        