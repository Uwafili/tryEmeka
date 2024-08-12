<?php

$error=['name'=>'','email'=>'','password'=>'','gen'=>''];

$name='';
$email='';
$password='';

function signup(){
    global $error,$name,$email,$password,$connect;

    if (isset($_POST['signup'])) {
        
        if (strlen($_POST['name']) <5) {
            $error['name']="Name Field Must Be Greater Than 5 Character";
            return false;
        }else{
            $name=esc($_POST['name']);
        }

        if (strlen($_POST['email']) <5) {
            $error['email']="email Field Must Be Greater Than 5 Character";
            return false;
        
        }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $error['email']="Email Must Be A Valid Email Address";

        return false;
        }else{
            $email=esc($_POST['email']);
        }
        if (strlen($_POST['password']) < 8) {
            $error['password']="Password Field Must Be Greater Than 8 Character";
            return false;
        }else if($_POST['password'] !== $_POST['ComfirmP']){
            $error['password']="Passwords Do Not Match";
        return false;
        }else{
            $password=md5(esc($_POST['password']));
        }


       $check="SELECT * FROM user WHERE email='$email' OR name='$name'"; 
        $rf=mysqli_query($connect,$check);

        if (mysqli_num_rows($rf) != 0) {
            $error['gen']="User Name Of Email Already Exist";

        }else{
            
      $insert="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
      $query=mysqli_query($connect,$insert);
      if ($query) {
        $error['gen']="Your Are Good";
        $lId=mysqli_insert_id($connect);
        $user=logI($lId);
        $_SESSION['user']=$user;    
        header("location:user.php");
      }else{
        $error['gen']="Your Are Bad";
      }  
       }
    }




}

function login(){
    global $error,$email,$password,$connect;

    if (isset($_POST['login'])) {
        if (strlen($_POST['email']) <5) {
            $error['email']="email Field Must Be Greater Than 5 Character";
            return false;
        
        }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $error['email']="Email Must Be A Valid Email Address";

        return false;
        }else{
            $email=esc($_POST['email']);
        }
        if (strlen($_POST['password']) < 8) {
            $error['password']="Password Field Must Be Greater Than 8 Character";
            return false;
        }
        else{
            $password=md5(esc($_POST['password']));
        }

        $check="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1"; 
        $rf=mysqli_query($connect,$check);
       $row=mysqli_num_rows($rf);
        if ($row !==0) {
         $result=mysqli_fetch_assoc($rf);
         $_SESSION['user']= $result;
            header("location:user.php");
        }else{
            $error['gen']="Invalid Email Or Password";
        }




    }
}

function logI($id) {
    global $connect;
    $select="SELECT name,email,date FROM user WHERE id='$id' LIMIT 1";
    $query=mysqli_query($connect,$select);
    $result=mysqli_fetch_assoc($query);
    return $result;
}


function esc($val)  {
    return html_entity_decode(strip_tags(stripslashes($val)));
}
signup();

login();


