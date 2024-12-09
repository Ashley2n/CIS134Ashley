<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Created 11-28-2024 by your Ashley A -->
    <!-- This page is a footer of a webpage -->
    <title>footer</title>
</head>

<body>
<?php
//Navigation Array
$navCaptions = array("Home", "Recipes", "FoodSpot.LLC");
foreach ($navCaptions as $navCaption) {
    echo "$navCaption";
}

$navLinks = array("http://localhost:63342/aaaProjects/index.php?_ijt=dc29e8asotdttrdic3uucdotts&_ij_reload=RELOAD_ON_SAVE", "http://localhost:63342/aaaProjects/Pages/Products.php?_ijt=65vescnnldtdlgmvqq3cjc27g9&_ij_reload=RELOAD_ON_SAVE")

?>

<nav>
    <h1>Food Spot</h1>
    <ul>
        <li><a href="<?php echo $navLinks[0];?>"><?php echo $navCaptions[0]; ?></a></li>
        <li><a href="<?php echo $navLinks[1];?>"><?php echo $navCaptions[1]; ?></a></li>
    </ul>
    <button>Review</button>
</nav>

<footer>
    <p>Ashley A</p>
    <p>Copyright(c); 2024. FoodSpot.LLC. All rights reserved.</p>

</footer>


</body>
</html>
