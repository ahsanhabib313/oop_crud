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
<div class="container">
    <?php
    include 'navbar.php';
    ?>
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <?php

            $id= $_REQUEST['id'];
            include 'model.php';
            $model = new Model();
            $datas=[];
            $datas = $model->edit_fatch($id);
            if(isset($_POST['update'])){
                $model->update($id);
            }
            if(!empty($datas)){
                foreach ($datas as $data){

            ?>
            <form class="bg-white mt-5 p-5 rounded" action="" method="post">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" value="<?php echo $data['name'];?>" type="text" class="form-control" id="name" placeholder="your name...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" value="<?php echo $data['email'];?>"  type="email" class="form-control" id="email" placeholder="your email...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mobileNumber" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-10">
                        <input name="mobile" value="<?php echo $data['mobile'];?>"  type="text" class="form-control" id="mobileNumber" placeholder="your Mobile Number...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea name="address"  class="form-control" rows="3" id="address"><?php echo $data['address'];?> </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-right pt-3">
                        <button name="update" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            <?php

                }
            }
            if(isset($_POST['update'])){
                $model->update($id);
            }

            ?>
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