<?php
require_once(__DIR__ . '/../sql/get-one.php');
require_once(__DIR__ . '/display-grid.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php
        $albumName = getAlbum()["name"];
        $pageTitle = 'Album "' . $albumName . '"';
        echo $pageTitle ?></title>
</head>
<body>
<?php displayGrid($pageTitle); ?>
</body>
</html>
