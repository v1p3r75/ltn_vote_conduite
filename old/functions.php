<?php
$link = '';
  if (isset($_POST["send_index"]) && $_POST["users"] != 'default' ) {
    if ($_POST["users"] == 'surveillant' ) {
      $link = 'session_surveillant.php';
    }else {
      $link = 'session_enseignant.php';
    }
  }

?>
