<?php
require_once(__DIR__ . '/execute-statement.php');

function delete($tableName)
{
    $id = $_GET["id"];
    $sql = 'DELETE FROM ' . $tableName . ' WHERE id = ' . $id;

    execute($sql);
}
