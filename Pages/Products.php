<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Created 11-28-2024 by your Ashley A -->
    <!-- This page is a table of all the products that will be displayed on the webpage. -->
    <title>Products Array</title>
    <style>
        table{
            border: 2px solid black;
        }
        th{
            border: 2px solid black;
        }
        td{
            border: 2px solid black;
        }
        tr{
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php

    include 'inc_welcome.php';

    include 'inc_navigation.php';

    echo "<h1>Recipe Collection</h1>";

        $tableCaptions = array ("Dishes", "Country", "Duration", "Cost");
            foreach ($tableCaptions as $caption) {
                echo "<th> $caption </th>";
            }
            echo "<br>";
        $Dishes = array("Biryani", "Jollof Rice", "Pho", "Poutine", "Lasagna", "Hummus with Pita");
            foreach ($Dishes as $Dish) {
                echo "<td> $Dish </td>";
            }
            echo "<br>";
        $Country = array("India", "Nigeria", "Vietnam", "Canada", "Italy", "Levant Region");
            foreach ($Country as $country) {
                echo "<td> $country </td>";
            }
            echo "<br>";
        $Duration = array("150", "90", "120", "30", "90", "30");
            foreach ($Duration as $duration) {
                echo "<td> $duration </td>";
            }
            echo "<br>";
        $Cost = array("25", "20", "30", "15", "25", "15");
            foreach ($Cost as $cost) {
                echo "<td> $cost </td>";
            }

        //Navigation Array
//        $navCaptions = array("Home", "Recipes");
//        $navLinks = array("http://localhost:63342/aaaProjects/index.php?_ijt=dc29e8asotdttrdic3uucdotts&_ij_reload=RELOAD_ON_SAVE", "http://localhost:63342/aaaProjects/Pages/Products.php?_ijt=65vescnnldtdlgmvqq3cjc27g9&_ij_reload=RELOAD_ON_SAVE")

    ?>


    <!--<nav>
        <h1>Food Spot</h1>
        <ul>
            <li><a href="<?php /*echo $navLinks[0];*/?>"><?php /*echo $navCaptions[0]; */?></a></li>
            <li><a href="<?php /*echo $navLinks[1];*/?>"><?php /*echo $navCaptions[1]; */?></a></li>
        </ul>
        <button>Review</button>
    </nav>
-->


    <!--<table>
        <tr>
            <th>Dishes</th>
            <th>Country</th>
            <th>Duration</th>
            <th>Cost</th>
        </tr>

        <tr>
            <th><?php /*echo $Dishes[0]; */?></th>
            <td><?php /*echo $Country[0]; */?></td>
            <td><?php /*echo "$Duration[0] minutes"; */?></td>
            <td><?php /*echo "$$Cost[0]"; */?></td>
        </tr>
        <tr>
            <th><?php /*echo $Dishes[1]; */?></th>
            <td><?php /*echo $Country[1]; */?></td>
            <td><?php /*echo "$Duration[1] minutes"; */?></td>
            <td><?php /*echo "$$Cost[1]"; */?></td>
        </tr>
        <tr>
            <th><?php /*echo $Dishes[2]; */?></th>
            <td><?php /*echo $Country[2]; */?></td>
            <td><?php /*echo "$Duration[2] minutes"; */?></td>
            <td><?php /*echo "$$Cost[2]"; */?></td>
        </tr>
        <tr>
            <th><?php /*echo $Dishes[3]; */?></th>
            <td><?php /*echo $Country[3]; */?></td>
            <td><?php /*echo "$Duration[3] minutes"; */?></td>
            <td><?php /*echo "$$Cost[3]"; */?></td>
        </tr>
        <tr>
            <th><?php /*echo $Dishes[4]; */?></th>
            <td><?php /*echo $Country[4]; */?></td>
            <td><?php /*echo "$Duration[4] minutes"; */?></td>
            <td><?php /*echo "$$Cost[4]"; */?></td>
        </tr>
        <tr>
            <th><?php /*echo $Dishes[5]; */?></th>
            <td><?php /*echo $Country[5]; */?></td>
            <td><?php /*echo "$Duration[5] minutes"; */?></td>
            <td><?php /*echo "$$Cost[5]"; */?></td>
        </tr>

    </table>-->

    <footer>
        <?php
            include 'inc.footer.php'
        ?>
    </footer>



</body>
</html>