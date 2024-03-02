<?php
    $cos = json_decode(file_get_contents('php://input'), true);
    $tak = array('nie' => $cos['huj']);
    echo json_encode($tak);
?>