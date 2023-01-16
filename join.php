<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Join</title>
        <link rel="stylesheet" href="css/style_3.css">
    </head>
    <body>
    <div class="container">
    <div class="components">
        <p class="title" style="font-weight:600; font-size:x-large">회원가입</h2>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
        <form method="post" action="join_ok.php" autocomplete="off">
            <p><input type="text" placeholder="이름" name="join_name" required></p>
            <p><input type="text" placeholder="아이디" name="join_id" required></p>
            <p><input type="password" placeholder="비밀번호" name="join_pw" required></p>
            <p ><input type="submit" value="가입하기" class="submit-button"></p>
        </form>
        <small><a href="login.php">이미 회원이신가요?</a><small>
        <?php } 
            else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p>$user_name($user_id)님은 이미 로그인되어 있습니다.";
                echo "<p><button onclick=\"window.location.href='index.php'\">메인으로</button> <button onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
        </div>
        </div>
    </body>
</html>