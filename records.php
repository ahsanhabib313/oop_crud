<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>OOP CRUD</title>
</head>
<body>

<div class="container-fluid">
    <?php
      include 'navbar.php';
    ?>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <table class="table table-hover bg-white" >
                <thead>
                <tr class="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                   include 'model.php';
                   $model = new Model();
                   $rows = $model->fetch();
                   $i = 1;
                   if(!empty($rows)) {
                       foreach ($rows as $row) {

                           ?>
                           <tr>
                               <td><?php
                                   echo $i++;
                                   ?></td>
                               <td><?php
                                   echo $row['name'];
                                   ?></td>
                               <td><?php
                                   echo $row['email'];
                                   ?></td>
                               <td><?php
                                   echo $row['mobile'];
                                   ?></td>
                               <td><?php
                                   echo $row['address'];
                                   ?></td>
                               <td>
                                   <a class="badge badge-primary" href="view.php?id=<?php echo $row['id']?>">View</a>
                                   <a class="badge badge-info" href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                                   <a class="badge badge-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                               </td>

                           </tr>

                           <?php
                       }
                   }
                ?>
                </tbody>
            </table>

        </div>

    </div>

</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>