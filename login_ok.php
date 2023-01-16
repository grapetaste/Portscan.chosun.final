<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/default1.css">
  <link rel="stylesheet" href="css/style1.css">
</head>
<?php
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $conn = mysqli_connect('localhost', 'root', '123456', 'opentutorials');
    $sql = "SELECT * FROM study_login where login_id='$user_id' and login_pw='$user_pw'";
    $res = mysqli_fetch_array(mysqli_query($conn,$sql));
    if($res){
        session_start();
        $_SESSION['user_id'] = $res['login_id'];
        $_SESSION['user_name'] = $res['name'];
        echo "<script>alert('Login success!');";
        echo "window.location.replace('index.php');</script>";
        exit;
    }
    else{
       echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');";
       echo "window.location.replace('login.php');</script>";
    }
?>