<?php
require_once(__DIR__ . '/constant.php');
require_once(__DIR__ . '/../base/sql/exists.php');

function validateTextLength($text, $textKey, $minLength, $maxLength, &$errors)
{
    if (isset($text)) {
        $textLength = strlen($text);
        if (($textLength >= $minLength) && ($textLength <= $maxLength)) {
            return;
        }
    }

    $errors [$textKey] = INVALID_NAME_MESSAGE;
}

function validateResourceExistence($tableName, $id, $keyName, &$errors)
{
    if (!exists($tableName, $id)) {
        $errors [$keyName] = RESOURCE_DOES_NOT_EXIST_MESSAGE;
    }
}

function validatePhotoContent(&$errors)
{
    if (isPhotoMissing()) {
        $errors [PHOTO_KEY_NAME] = MISSING_PHOTO_MESSAGE;
        return;
    }

    if (isPhotoFormatInvalid()) {
        $errors [PHOTO_KEY_NAME] = INVALID_FORMAT_MESSAGE;
        return;
    }

    if (isPhotoSizeInvalid()) {
        $errors [PHOTO_KEY_NAME] = PHOTO_SIZE_NOT_ALLOWED_MESSAGE;
    }
}

function isPhotoMissing()
{
    return (!isset($_FILES[PHOTO_KEY_NAME])) || ($_FILES[PHOTO_KEY_NAME][ERROR_KEY_NAME] == UPLOAD_ERR_NO_FILE);
}

function isPhotoFormatInvalid()
{
    return $_FILES[PHOTO_KEY_NAME][TYPE_KEY_NAME] != JPEG_MIME_TYPE;
}

function isPhotoSizeInvalid()
{
    $error = $_FILES[PHOTO_KEY_NAME][ERROR_KEY_NAME];
    return ($error == UPLOAD_ERR_INI_SIZE) || ($error == UPLOAD_ERR_FORM_SIZE);
}
