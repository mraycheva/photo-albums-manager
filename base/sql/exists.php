<?php
require_once(__DIR__ . '/execute-statement.php');

function exists($tableName, $id)
{
    $sql = 'SELECT EXISTS (SELECT * FROM ' . $tableName . ' WHERE id = ' . $id . ' LIMIT 1) res';

    $res = execute($sql);

    while ($row = $res->fetch_assoc()) {
        return $row["res"];
    }
}
