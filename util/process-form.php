<?php
require_once(__DIR__ . '/../save/save.php');
require_once(__DIR__ . '/validate.php');
require_once(__DIR__ . '/constant.php');

function processForm($errors)
{
    $albumName = $_POST[ALBUM_NAME_KEY_NAME];
    validateTextLength($albumName, ALBUM_NAME_KEY_NAME, 5, 30, $errors);

    if ($errors) {
        displayForm($errors);
        return;
    }

    saveAlbum($albumName);
}
