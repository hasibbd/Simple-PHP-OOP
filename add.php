<?php
include_once ("func.php");
$obj = new TestOop;
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    $obj->insertData ($name, "oop_test");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <table>
        <thead>
        <th>Name</th>
        <th>Actions</th>
        </thead>
        <tbody>
        <td><input type="text" name="name" placeholder="Name"></td>
        <td><input type="submit" name="add" value="Add"></td>
        </tbody>
    </table>
    <button><a href="index.php">Home</a></button>
</form>
</body>
</html>