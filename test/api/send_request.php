<?php

function sendRequest($uuid, $name, $price) {
    $txn_date = date("Y-m-d H:i:s");
    $url = "https://ugmk-telecom.ru/test?command=pay&txn_id=$uuid&txn_date=$txn_date&account=$name&sum=$price&type=sometype";
    $response = file_get_contents($url);
    echo $response;
}

