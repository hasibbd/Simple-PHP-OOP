<?php
include_once ("func.php");
$obj = new TestOop;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $obj->deleteData ($id, "oop_test");
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
        <?php
        foreach ($obj->showData ("oop_test") as $value) {
            ?>
            <tr class="">
                <td><input type="text" name="name" placeholder="Name" value="<?php echo $value['name']; ?>"></td>
                <td>
                    <button name="delete" type="submit"><a href="index.php?id=<?php echo $value['id']; ?>">Delete</a></button>
                    <button><a href="update.php?id=<?php echo $value['id']; ?>">Edit</a></button>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <button><a href="add.php">Add</a></button>
</form>
</body>
</html>