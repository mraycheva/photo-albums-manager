<?php

function execute($sql)
{
    $conn = new mysqli('localhost', 'root', '', 'album');
    $res = $conn->query($sql);
    $conn->close();
    return $res;
}
