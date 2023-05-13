<form method = "post" action = "insert.php">
    <label>Car Brand</label><br>
        <input type = "name" name = "carbrand"><br>
    <label>Model</label><br>
        <input type = "name" name = "model"><br>
    <label>Price</label><br>
        <input type = "name" name = "price"><br>
<br>
    <input type = "submit" value = "Submit">


    <?php 
    include 'table.php';

    $car = new Car();
    $car->createTable();
    $items = $car->getAll();
    $list = $items->fetch_all(MYSQLI_ASSOC);

    ?>

<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Car Brand</td>
            <td>Model</td>
            <td>Price</td>
        </tr>
    </thead>
    <tbody>

          <?php foreach ($list as $brands) { ?>
            <tr>
                 <td><?php echo $brands['id']?></td>
                 <td><?php echo $brands['carbrand']?></td>
                 <td><?php echo $brands['model']?></td>
                 <td><?php echo $brands['price']?></td>
            </tr>
            <?php } ?>
    </tbody>

</table>