<?php
/**
 * Created by PhpStorm.
 * User: CB
 * Date: 11/13/2020
 * Time: 12:19 PM
 */

  $id = $_REQUEST['id'];
  include 'model.php';
  $model = new Model();
  $delete = $model->delete($id);
  if($delete){
      echo "<script>alert('Deleted Successfully...!!!')</script>";
      echo "<script>window.location.href= 'records.php';</script>";
  }else{
      echo "<script>alert('Deleted Failed...!!!')</script>";
      echo "<script>window.location.href= 'records.php';</script>";
  }