
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<a href="index.php?page=add" class="btn btn-success">Add</a>
<form method="post" action="index.php?page=search">
    <input type="search" class="form-control" name="name">
    <button type="submit" class="btn btn-success ">search</button>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">ten hang</th>
        <th scope="col">loai hang</th>
        <th scope="col">gia</th>
        <th scope="col">so luong</th>
        <th scope="col">mo ta</th>
        <th colspan="2" scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($row as $key=>$row):?>
        <tr>
            <th scope="row"><?php echo $key+1?></th>
            <td><?php echo $row['ten']?></td>
            <td><?php echo $row['loai hang']?></td>
            <td><a href="index.php?page=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
            <td><a href="index.php?page=edit&id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>
</body>
</html>