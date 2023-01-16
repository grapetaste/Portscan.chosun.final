<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/default.css">
  <title>로그인</title>
</head>
<body>
  <section class="login">
    <h2>로그인</h2>
    <ul>
      <li><input type="text" placeholder="아이디" title="아이디입력"></li>
      <li><input type="password" placeholder="비밀번호" title="비밀번호입력"></li>
      <li><input type="checkbox" id="login_id"><label for="login_id">아이디저장</label></li>
      <li><a href="login_ok.php"><button>로그인</button></a></li>
    </ul>
    <div>
      <ul>
      <li><a href="join.php">회원가입</a></li>
      <li><a href="">아이디 찾기</a></li>
      <li><a href="">비밀번호 찾기</a></li>
      </ul>
    
  </section>
</body>
</html>