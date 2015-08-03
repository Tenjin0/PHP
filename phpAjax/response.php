<?php
  if(!empty($_POST['action'])){
    $return = $_POST;
    $return["json"] = json_encode($return);
    echo json_encode($return);
  }
?>
