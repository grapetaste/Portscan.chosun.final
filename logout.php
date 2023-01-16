<head>
<meta charset="UTF-8">
</head>
<?php
  session_start();
  unset($_SESSION["user_id"]);
  unset($_SESSION["user_name"]);
  echo "
  <script type=\"text/javascript\">
      alert(\"로그아웃 되었습니다.\");
      location.href = \"index.php\";
  </script>
";

?>
