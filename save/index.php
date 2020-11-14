<?php
require_once(__DIR__ . '/../sql/get-one.php');
require_once(__DIR__ . '/../base/handle-form.php');
require_once(__DIR__ . '/../util/process-form.php');
require_once(__DIR__ . '/../util/display-form.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo getPageTitle(); ?></title>
</head>
<body>
<?php

$errors = array();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    validateResourceExistence("album", $id, INVALID_ALBUM_ID_KEY_NAME, $errors);
}

handleForm($errors);
?>
</body>
</html>
