<?php
require_once(__DIR__ . '/../../base/sql/get-one.php');

function getPhoto()
{
    return getOne("photo");
}
