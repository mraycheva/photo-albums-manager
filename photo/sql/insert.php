<?php
require_once(__DIR__ . '/../../base/sql/execute-statement.php');

function insert($name, $albumId, $content, $extension)
{
    $sql = 'INSERT INTO photo (name, album_id, content, extension) '
        . 'VALUES (\'' . $name . '\', ' . $albumId . ', \'' . $content . '\', \'' . $extension . '\');';

    execute($sql);
}
