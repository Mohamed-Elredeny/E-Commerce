<?php
    $con = mysqli_connect('localhost','root','','e-commerce');
//Login
function login($username,$password,$submit){

    $con = mysqli_connect('localhost','root','','e-commerce');
    if(isset($_POST["$submit"])){
        $username =htmlspecialchars(mysqli_real_escape_string($con,$_POST['username']));
        $password =htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));
        if($username == Null || $password == Null){
            echo 'NICE TRY fields can not be empty<br>';

        }

        $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";
        $result = mysqli_query($con, $sql);

        $student = mysqli_fetch_all($result,MYSQLI_ASSOC);
        if(count($student) > 0){
            echo "login page";
            //redirect to specific page
        }else{
            echo "Try Again with another username or password";
            //redirect to specific page
        }



    }

}
//practice

//=================================================================================================//
//Register
function signup($fname,$lname,$uname,$upass,$phone,$address,$submit){
    $con = mysqli_connect('localhost','root','','e-commerce');

    if(isset($_POST["$submit"])){
        if($_POST["$fname"] != null) {
            $fname =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$fname"]));
        }else{
            echo "first name can not be empty<br>";
        }
        if($_POST["$lname"] != null) {
            $lname =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$lname"]));
        }else{
            echo "last name can not be empty<br>";
        }
        if($_POST["$uname"] != null) {
            $uname =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$uname"]));
        }else{
            echo "User name can not be empty<br>";
        }
        if($_POST["$upass"] != null) {
            $upass =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$upass"]));
        }else{
            echo "Password can not be empty<br>";
        }
        if($_POST["$phone"] != null) {
            $phone =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$phone"]));
        }else{
            echo "Phone can not be empty<br>";
        }

        if($_POST["$address"] != null) {
            $address =htmlspecialchars(mysqli_real_escape_string($con,$_POST["$address"]));
        }else{
            echo "Address can not be empty<br>";
        }


        if($fname != null and $lname != null and $uname !=null and $upass !=null and $phone !=null and $address !=null){
            $sql = "INSERT INTO users (fname,lname,username,password,phoneNumber,address) values('".$fname."','".$lname."','".$uname."','".$upass."','".$phone."','".$address."')";
            $result = mysqli_query($con,$sql);
            if($result){
                header('location:test.php');
            }
            header('location:login.php');
        }


    }

}

//Select Categories
$SelectCategories = mysqli_fetch_all(mysqli_query($con,"SELECT * FROM categories "),MYSQLI_ASSOC);
//GetAnyTableName
function GetName($id,$table){
    $con = mysqli_connect('localhost','root','','e-commerce');
    $SelectCategories = mysqli_fetch_all(mysqli_query($con,"SELECT * FROM ".$table." where id='".$id."' "),MYSQLI_ASSOC);
    return $SelectCategories[0]['name'];
}
