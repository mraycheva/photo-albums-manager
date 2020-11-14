<?php
require_once(__DIR__ . '/../../base/sql/execute-statement.php');

function getAll()
{
    $id = $_GET["id"];
    $sql = 'SELECT * FROM photo WHERE album_id = ' . $id . ' ORDER BY id';

    $res = execute($sql);

    $photos = array();
    while ($row = $res->fetch_assoc()) {
        $photos[] = $row;
    }
    return $photos;
}
