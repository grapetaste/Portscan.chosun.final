<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/default_1.css">
    <link rel="stylesheet" href="css/style_3.css">
    <title>Port Scanner-로그인</title>
    </head>
    <body>
    <div class="container">
    <div class="components">
    <section class="login">
    <p class="title" style="font-weight:600; font-size:x-large">로그인</h2>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
        <form method="post" action="login_ok.php" autocomplete="off">
            <p><input type="text" placeholder="아이디" name="user_id" required></p>
            <p><input type="password" placeholder="비밀번호" name="user_pw" required></p>
            <p><a href="login_ok.php"><button>로그인</button></p>
        </form>
        <small><a href="join.php">처음 오셨나요?</a><small>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님은 이미 로그인되어 있습니다.";
            echo "<p><button onclick=\"window.location.href='index.php'\">메인으로</button> <button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
         </div>
        </div>
        </section>
    </body>
</html>