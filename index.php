

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Created 11-26-2024 by your Ashley A -->
    <!-- This page is the Homepage of the Product listing Project -->
    <title>Functions</title>
    <meta http-equiv="Content-Type"
          content="text/html; charset=iso-8859-1" />
    <style type="text/css">

        h1{
            color: peru;
        }
        .Button{
            background: peru;
            height: 40px;
            width: 80px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php   //Navigation Array
        $navCaptions = array("Home", "Recipes");
        $navLinks = array("http://localhost:63342/aaaProjects/index.php?_ijt=dc29e8asotdttrdic3uucdotts&_ij_reload=RELOAD_ON_SAVE", "http://localhost:63342/aaaProjects/Pages/Products.php?_ijt=65vescnnldtdlgmvqq3cjc27g9&_ij_reload=RELOAD_ON_SAVE" )

    ?>

    <nav>
        <h1><a href="<?php echo $navLinks[0];?>">Food Spot</a></h1>
        <a href="<?php echo $navLinks[0];?>"><img src="Img/DALL·E 2024-11-28 21.24.45 - A minimalistic icon resembling an iPhone emoji style_ a brown book with a simple red location drop pin in the center. The design is flat, clean, and c.jpg" alt=""/></a>
        <ul>
            <li><a href="<?php echo $navLinks[0];?>"><?php echo $navCaptions[0]; ?></a></li>
            <li><a href="<?php echo $navLinks[1];?>"><?php echo $navCaptions[1]; ?></a></li>
        </ul>
        <button>Review</button>
    </nav>

    <img src="Img/download.jpg" alt="Hello World Image">
    <h1>Welcome to the Second PHP Page</h1>

    <?php
    function Memo (){
        echo "Food Spot LLC";
    }
        Memo();
    ?>



    <div class="Button">Buy now</div>

    <hr />
    <p>This online recipe webpage serves as a comprehensive<br/>
        platform for food enthusiasts, offering a wide array <br/>
        of recipes tailored to various cuisines, dietary<br/>
        preferences, and skill levels. The platform is designed<br/>
        to inspire cooking at home while providing step-by-step<br/>
        guides, nutritional information, and interactive tools.
    </p>

    <?php  Memo();?>
</body>
</html>
