<?php
require_once(__DIR__ . '/get-one.php');
require_once(__DIR__ . '/../../base/sql/delete.php');
require_once(__DIR__ . '/../../util/constant.php');

$albumId = getPhoto()["album_id"];
delete("photo");
header(LOCATION_HEADER . ALBUM_SHOW_PATH . $albumId);
exit();
