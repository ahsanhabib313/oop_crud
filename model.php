<?php
/**
 * Created by PhpStorm.
 * User: CB
 * Date: 11/13/2020
 * Time: 9:49 AM
 */

class Model{
    private  $server='Localhost';
    private $username = 'root';
    private $password;
    private $db = 'oop_crud';
    private $conn;


    function __construct()
    {
       try{
           $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
       }catch (Exception $e){
           echo 'Connection Failed'.$e->getMessage();
       }

    }

    public function insert(){
        if (isset($_POST['submit'])){
           if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
               if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

                   $name = $_POST['name'];
                   $email = $_POST['email'];
                   $mobile = $_POST['mobile'];
                   $address = $_POST['address'];

                   $query = "insert into records (name, email, mobile, address) VALUES ('$name','$email','$mobile','$address')";
                   if ($sql= $this->conn->query($query)){
                       echo "<script>alert('Inserted Succesfully')</script>";
                       echo " <script>window.location.href= 'index.php';</script>";
                   }


               }else{
                   echo '<script>alert("Empty") </script>';
                   echo " <script>window.location.href= 'index.php';</script>";

               }
           }
        }
    }

    public function fetch(){
        $data =null;
        $query = "select * from records";
        if($sql=$this->conn->query($query)){
            while ($row =mysqli_fetch_assoc($sql)){
                $data[]=$row;
            }
        }
        return $data;
    }

    public function fetch_single($id){
        $data =null;
        $query = "SELECT *FROM records WHERE id='$id'";
        if($sql=$this->conn->query($query)){
            while ($row =mysqli_fetch_assoc($sql)){
                $data[]=$row;
            }
        }
        return $data;

    }

    public function delete($id){
        $query = "DELETE FROM records WHERE id='$id'";
        if ($this->conn->query($query)){
            return true;
        }else{
            return false;
        }
    }
    public function edit_fatch($id){
        $data =null;
        $query = "SELECT *FROM records WHERE id='$id'";
        if($sql=$this->conn->query($query)){
            while ($row =mysqli_fetch_assoc($sql)){
                $data[]=$row;
            }
        }
        return $data;
    }

    public function update($id){

        if (isset($_POST['update'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];

                    $query = "update records set name='$name', email ='$email', mobile='$mobile',address='$address' where id='$id'";
                    if ($this->conn->query($query)){
                        echo "<script>alert('Updated Succesfully')</script>";
                        header('Location: edit.php?id='.$id);
                    }


                }else{
                    echo '<script>alert("Empty") </script>';
                    header('Location: edit.php?id="$id"'.$id);

                }
            }
        }

    }
}




