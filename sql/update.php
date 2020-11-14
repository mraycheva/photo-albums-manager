<?php
require_once(__DIR__ . '/../base/sql/execute-statement.php');

function update($id, $name)
{
    $sql = 'UPDATE album SET name = \'' . $name . '\' WHERE id = ' . $id;

    execute($sql);
}
