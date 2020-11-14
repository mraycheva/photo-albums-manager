<?php
require_once(__DIR__ . '/../sql/update.php');
require_once(__DIR__ . '/../../util/constant.php');

function editPhoto($photoName)
{
    $id = $_GET["id"];
    $albumId = getPhoto()["album_id"];

    update($id, $photoName);
    header(LOCATION_HEADER . ALBUM_SHOW_PATH . $albumId);
    exit();
}
