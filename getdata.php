<?php
    include 'registrationForm.php';
    $res = $obj->getAllData();
  //  print_r($res);exit;
    echo json_encode($res);
?>