

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Created 99-99-9999 by name -->
    <!-- This page demonstrates functions -->
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
    <img src="download.jpg" alt="Hello World Image">
    <h1>Welcome to the Second PHP Page</h1>

    <?php
    function Memo (){
        echo "Food Spot LLC";
    }
        Memo();
    ?>

    <div>
        <ul>
            <li>Home</li>
            <li>Recipes</li>
            <li>Blogs</li>
            <li>Contacts</li>
        </ul>
    </div>

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
