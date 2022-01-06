<?php
if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "";
}
switch ($action) {
    case "add":
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            if(empty($name) ||empty(email)||empty($phone)){
                $error = "Not null";
            }else{
                $db->action(sql:"INSERT INTO 1951060718_dhtl (name,email,phone) VALUES ('$name','$email','$phone')");
                header(string:"Location:index.php?controller=1951060718_dhtl");
            }
        }
        require_once "view/add.php";
        break;
    case "edit":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach ($db->getData(sql:"SELECT * FROM 1951060718_dhtl WHERE id='$id") as $row ){
                $name = isset($row['name'])?$row['name']:'';
                $name = isset($row['email'])?$row['email']:'';
                $name = isset($row['phone'])?$row['phone']:'';
            }
            if(isset($_POST['submit'])){
                $name_new=$_POST['name'];
                $email_new=$_POST['email'];
                $phone_new=$_POST['phone'];
                if(empty($name) ||empty(email)||empty($phone)){
                    $error = "Not null";
                }else{
                    $db->action(sql:"UPDATE 1951060718_dhtl SET name='$name_new',email='$email_new',phone='$phone_new'");
                        WHERE id=['$id'];
                    header(string:"Location:index.php?controller=1951060718_dhtl");
                }
            }
        }
        require_once "view/edit.php";
        break;
    case "delete":
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $db->action(sql:"DELETE FROM 1951060718_dhtl WHERE id = '$id'");
            header(string:"Location:index.php?controller=1951060718_dhtl");
        }
        break;
    default:
        $data = $db->getData(sql:"SELECT * FROM 1951060718_dhtl");
        require_once "controller/index.php";
        break;
}
?>