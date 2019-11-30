<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $userid = htmlspecialchars($_POST['userid']);
  $pwd  = htmlspecialchars($_POST['pwd']);

  echo  $userid, ' ', $pwd;
?>