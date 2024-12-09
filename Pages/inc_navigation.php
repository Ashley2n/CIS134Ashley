<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Created 12-3-2024 by your Ashley A -->
    <!-- This page is a table of all the products that will be displayed on the webpage. -->
    <title>Products Array</title>
</head>

<body>
<?php

    class Link{
        public $name;
        public $link;

        function __construct($name, $link){
            $this->name = $name;
            $this->link = $link;
        }
    }

    $link1 = new Link("Home", "http://localhost:63342/aaaProjects/index.php?_ijt=dc29e8asotdttrdic3uucdotts&_ij_reload=RELOAD_ON_SAVE");
    $link2 = new Link("Recipes", "http://localhost:63342/aaaProjects/Pages/Products.php?_ijt=65vescnnldtdlgmvqq3cjc27g9&_ij_reload=RELOAD_ON_SAVE");


    $navSet = array(
            $link1,
            $link2
    );

foreach($navSet as $set) {
            echo "<li><a href={$set->link}>{$set->name}</a></li>";
        }
?>


<!--<nav>-->
<!--    <h1>Food Spot</h1>-->
<!--    <ul>-->
<!--        <li><a href="--><?php //echo $navLinks[0];?><!--">--><?php //echo "$navCaption" ; ?><!--</a></li>-->
<!--        <li><a href="--><?php //echo $navLinks[1];?><!--">--><?php //echo $navCaption; ?><!--</a></li>-->
<!--    </ul>-->
<!--    <button>Review</button>-->
<!--</nav>-->

</body>
</html>