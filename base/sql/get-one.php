<?php
require_once(__DIR__ . '/execute-statement.php');

function getOne($tableName)
{
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = ' . $id . ' LIMIT 1';

        $res = execute($sql);

        while ($row = $res->fetch_assoc()) {
            return $row;
        }
    }
}
