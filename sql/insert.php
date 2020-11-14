<?php
require_once(__DIR__ . '/../base/sql/execute-statement.php');

function insert($name)
{
    $sql = 'INSERT INTO album (name) VALUES (\'' . $name . '\');';

    execute($sql);
}
