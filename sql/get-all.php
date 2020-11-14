<?php
require_once(__DIR__ . '/../base/sql/execute-statement.php');

function getAll()
{
    $sql = 'SELECT * FROM album ORDER BY id';

    $res = execute($sql);
    $data = array();
    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}
