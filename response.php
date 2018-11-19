<?php
    $data = $_REQUEST['data'];
    include ("clear_data.php");
    $clear = new Cleardata();
    $clear->cleardata($data);

    $status = "Status : ".http_response_code(200);
    echo "Your request is $data.\n";
    echo "$status";
?>