<?php
require_once(__DIR__ . '/../../util/validate.php');
require_once(__DIR__ . '/edit.php');

function processForm($errors)
{
    $photoName = $_POST[PHOTO_NAME_KEY_NAME];
    validateTextLength($photoName, PHOTO_NAME_KEY_NAME, 5, 20, $errors);

    if ($errors) {
        displayForm($errors);
        return;
    }

    editPhoto($photoName);
}
