<?php
include 'table.php';

$car = new Car();
$car->createTable();

$values = 
[
'carbrand' => $_POST['carbrand'],
'model' => $_POST['model'],
'price' => $_POST['price']
];

$status = $car->insert($values);

if($status == true)
{
    header('location: form.php');
}
?>