<?php
require_once(__DIR__ . '/../sql/insert.php');
require_once(__DIR__ . '/../../util/constant.php');

function addPhoto($photoName)
{
    $albumId = $_GET[ALBUM_ID_KEY_NAME];

    $photo = $_FILES[PHOTO_KEY_NAME]['tmp_name'];
    $content = addslashes(file_get_contents($photo));

    $extension = pathinfo($_FILES[PHOTO_KEY_NAME]['name'], PATHINFO_EXTENSION);

    insert($photoName, $albumId, $content, $extension);

    header(LOCATION_HEADER . ALBUM_SHOW_PATH . $albumId);
    exit();
}
