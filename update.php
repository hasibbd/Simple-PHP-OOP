<?php
include_once("func.php");
$obj=new TestOop;
$id = $_GET['id'];
$on = $obj->getById ($id,"oop_test");
if (isset($_POST['update'])){
    $name = $_POST['name'];
    $obj->update ($id,$name,"oop_test");
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
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
        </thead>
        <tbody>
        <td><input type="text" name="id" placeholder="ID" disabled value="<?php echo $on['id'];?>"></td>
        <td><input type="text" name="name" placeholder="Name" value="<?php echo $on['name'];?>"></td>
        <td><input type="submit" name="update" value="Update"></td>
        </tbody>
    </table>
    <button><a href="index.php">Home</a></button>
</form>
</body>
</html>