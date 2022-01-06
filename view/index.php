<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php?controller=1951060718_dhtl&action=add" class ="btn btn-primary" >Add</a>
       
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
              foreach($data as $1951060718_dhtl) {
                  ?>
                <tr>
                    <td><?=$1951060718_dhtl['name'] ?> </td>
                    <td><?=$1951060718_dhtl['email'] ?></td>
                    <td><?=$1951060718_dhtl['phone'] ?></td>
                    <td>
                        <a href="index.php?controller=1951060718_dhtl&actione=edit&id=<?=$1951060718_dhtl['id']?> " class="btn btn-danger" >Edit</a>
                        <a href="index.php?controller=1951060718_dhtl&actione=delete&id=<?=$1951060718_dhtl['id']?>" class="btn btn-primary" >Delete</a>
                    </td>
                </tr>
                <?php

              }
            ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>