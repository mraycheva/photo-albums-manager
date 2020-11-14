<?php
require_once(__DIR__ . '/../sql/insert.php');
require_once(__DIR__ . '/../sql/update.php');
require_once(__DIR__ . '/../util/constant.php');

function saveAlbum($albumName)
{
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        update($id, $albumName);
    } else {
        insert($albumName);
    }

    header(LOCATION_HEADER . ROOT_DIR);
    exit();
}
