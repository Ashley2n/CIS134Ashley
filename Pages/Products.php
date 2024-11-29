<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Created 11-28-2024 by your Ashley A -->
    <!-- This page is a table of all the products that will be displayed on the webpage. -->
    <title>Products Array</title>
</head>

<body>
    <?php
        $Dishes = array("Biryani", "Jollof Rice", "Pho", "Poutine", "Lasagna", "Hummus with Pita");
        $Country = array("India", "Nigeria", "Vietnam", "Canada", "Italy", "Levant Region");
        $Duration = array("150", "90", "120", "30", "90", "30");
        $Cost = array("25", "20", "30", "15", "25", "15");

    ?>

    <h1>Recipe Collection</h1>

    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="Products.php">Products</a></li>
        </ul>
    </nav>

    <table>
        <tr>
            <th>Dishes</th>
            <th>Country</th>
            <th>Duration</th>
            <th>Cost</th>
        </tr>

        <tr>
            <th><?php echo $Dishes[0]; ?></th>
            <td><?php echo $Country[0]; ?></td>
            <td><?php echo $Duration[0]; ?></td>
            <td><?php echo $Cost[0]; ?></td>
        </tr>
        <tr>
            <th><?php echo $Dishes[1]; ?></th>
            <td><?php echo $Country[1]; ?></td>
            <td><?php echo $Duration[1]; ?></td>
            <td><?php echo $Cost[1]; ?></td>
        </tr>
        <tr>
            <th><?php echo $Dishes[2]; ?></th>
            <td><?php echo $Country[2]; ?></td>
            <td><?php echo $Duration[2]; ?></td>
            <td><?php echo $Cost[2]; ?></td>
        </tr>
        <tr>
            <th><?php echo $Dishes[3]; ?></th>
            <td><?php echo $Country[3]; ?></td>
            <td><?php echo $Duration[3]; ?></td>
            <td><?php echo $Cost[3]; ?></td>
        </tr>
        <tr>
            <th><?php echo $Dishes[4]; ?></th>
            <td><?php echo $Country[4]; ?></td>
            <td><?php echo $Duration[4]; ?></td>
            <td><?php echo $Cost[4]; ?></td>
        </tr>
        <tr>
            <th><?php echo $Dishes[5]; ?></th>
            <td><?php echo $Country[5]; ?></td>
            <td><?php echo $Duration[5]; ?></td>
            <td><?php echo $Cost[5]; ?></td>
        </tr>

    </table>

</body>
</html>