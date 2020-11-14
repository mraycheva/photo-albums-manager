﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Add a photo</title>
</head>
<body>

<?php
require_once(__DIR__ . '/../../base/handle-form.php');
require_once(__DIR__ . '/display-form.php');
require_once(__DIR__ . '/process-form.php');

$errors = array();
if (isset($_GET[ALBUM_ID_KEY_NAME])) {
    $id = $_GET[ALBUM_ID_KEY_NAME];
    validateResourceExistence("album", $id, INVALID_ALBUM_ID_KEY_NAME, $errors);
}

handleForm($errors);
?>
</body>
</html>
