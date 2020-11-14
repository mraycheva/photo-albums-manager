<?php
require_once(__DIR__ . '/../base/sql/delete.php');
require_once(__DIR__ . '/../util/constant.php');

delete("album");
header(LOCATION_HEADER . ROOT_DIR);
exit();
